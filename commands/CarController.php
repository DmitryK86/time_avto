<?php

namespace app\commands;

use app\models\CarBrand;
use app\models\CarModel;
use yii\console\Controller;
use Yii;
use yii\console\ExitCode;
use yii\db\ActiveQuery;
use yii\helpers\Console;

class CarController extends Controller
{
    public function actionAddFromFile()
    {
        $content = file_get_contents('/var/www/commands/marks_json.txt');
        $content = json_decode($content);

        $brandsCount = 0;
        $modelsCount = 0;

        foreach ($content as $brand => $models) {
            $transaction = Yii::$app->db->beginTransaction();
            try {
                $brand = CarBrand::create($brand, '', '', false);
                $brand->save();
                Yii::$app->db->createCommand()->batchInsert(
                    '{{%car_model}}',
                    ['name', 'status', 'car_brand_id'],
                    array_map(function ($model) use ($brand) {
                        return [$model, false, $brand->id];
                    }, $models)
                )->execute();
                $brandsCount++;
                $modelsCount += count($models);
                $transaction->commit();
            } catch (\Exception $e) {
                $transaction->rollBack();
                $this->stdout(
                    $this->ansiFormat($e->getMessage() . PHP_EOL,
                    Console::BOLD, Console::FG_RED)
                );
                exit(ExitCode::UNSPECIFIED_ERROR);
            }
        }

        $this->stdout(
            $this->ansiFormat('Added ' . $brandsCount . ' brands.' . PHP_EOL,
            Console::BOLD, Console::FG_GREEN)
        );

        $this->stdout(
            $this->ansiFormat('Added ' . $modelsCount . ' models.' . PHP_EOL,
            Console::BOLD, Console::FG_GREEN)
        );

        exit(ExitCode::OK);
    }

    public function actionRemoveCarsData()
    {
        CarModel::deleteAll();
        CarBrand::deleteAll();

        $this->stdout($this->ansiFormat('All rows deleted' . PHP_EOL, Console::BOLD, Console::FG_GREEN));
    }
}