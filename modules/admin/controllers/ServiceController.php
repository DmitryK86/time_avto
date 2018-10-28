<?php
namespace app\modules\admin\controllers;

use app\models\ServiceItems;
use app\models\SubserviceItems;
use app\modules\admin\components\AdminBaseController;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * Class ServiceController
 * @package app\modules\admin\controllers
 */
class ServiceController extends AdminBaseController
{
    public function actionIndex(){
        $dataProvider = new ActiveDataProvider([
            'query' => ServiceItems::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionUpdate($id){
        $model = $this->getModel($id);

        if ($model->load(\Yii::$app->request->post())){
            if ($model->save()){
                \Yii::$app->session->setFlash('success', 'Страница меню обновлена');
                return $this->redirect(Url::to(['index']));
            }
        }

        return $this->render('edit', ['model' => $model]);
    }

    public function actionCreate(){
        $model = new ServiceItems();

        if ($model->load(\Yii::$app->request->post())){
            if ($model->save()){
                \Yii::$app->session->setFlash('success', 'Страница меню создана');
                return $this->redirect(Url::to(['index']));
            }
        }

        return $this->render('edit', ['model' => $model]);
    }

    public function actionToggle($id){
        $model = $this->getModel($id);

        if ($model->toggle()){
            $dataProvider = new ActiveDataProvider([
                'query' => ServiceItems::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);

            return $this->renderAjax('index', ['dataProvider' => $dataProvider]);
        }

        return false;
    }

    public function actionSubservice($serviceId){
        $model = $this->getModel($serviceId);

        if ($subservicesData = \Yii::$app->request->post('SubserviceItems')){
            $subservicesData = array_filter($subservicesData, function ($data){
                return array_filter($data);
            });

            $transaction = \Yii::$app->db->beginTransaction();
            try{
                /** @var SubserviceItems $subservice */
                for ($i = 0; $i < count($subservicesData); $i++){
                    $subservice = $model->subservices[$i] ?? new SubserviceItems();

                    if ($subservice->load($subservicesData[$i], '')){
                        if ($subservice->isNewRecord){
                            $subservice->service_id = $model->id;
                        }

                        if ($subservice->save()){
                            continue;
                        }
                        else{
                            throw new \Exception(implode('<br>', $subservice->getErrorSummary(false)));
                        }
                    }
                    else{
                        throw new \Exception('Subservice data not load');
                    }
                }

                $transaction->commit();
                \Yii::$app->session->addFlash('success', 'Данные успешно сохранены');
            }
            catch (\Exception $e){
                $transaction->rollBack();
                \Yii::$app->session->setFlash('error', $e->getMessage());
            }

            return $this->refresh();
        }

        return $this->render('subservice', ['model' => $model]);
    }

    protected function getModel($id){
        $model = ServiceItems::findOne($id);
        if (!$model){
            throw new Exception('Requested page does not exist');
        }

        return $model;
    }
}