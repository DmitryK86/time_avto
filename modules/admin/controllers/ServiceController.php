<?php
namespace app\modules\admin\controllers;

use app\models\ServiceItems;
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
                $this->redirect(Url::to(['index']));
            }
        }

        return $this->render('edit', ['model' => $model]);
    }

    public function actionCreate(){
        $model = new ServiceItems();

        if ($model->load(\Yii::$app->request->post())){
            if ($model->save()){
                \Yii::$app->session->setFlash('success', 'Страница меню обновлена');
                $this->redirect(Url::to(['index']));
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

    protected function getModel($id){
        $model = ServiceItems::findOne($id);
        if (!$model){
            throw new Exception('Requested page does not exist');
        }

        return $model;
    }
}