<?php
namespace app\modules\admin\controllers;

use app\models\MenuItems;
use app\modules\admin\components\AdminBaseController;
use yii\data\ActiveDataProvider;
use yii\db\Exception;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * Class MenuController
 * @package app\modules\admin\controllers
 */
class MenuController extends AdminBaseController
{
    public function actionIndex(){
        $dataProvider = new ActiveDataProvider([
            'query' => MenuItems::find(),
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
        $model = new MenuItems();

        if ($model->load(\Yii::$app->request->post())){
            if ($model->save()){
                \Yii::$app->session->setFlash('success', 'Страница меню обновлена');
                return $this->redirect(Url::to(['index']));
            }
        }

        return $this->render('edit', ['model' => $model]);
    }

    public function actionToggle($id){
        $model = $this->getModel($id);

        if ($model->toggle()){
            $dataProvider = new ActiveDataProvider([
                'query' => MenuItems::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]);

            return $this->renderAjax('index', ['dataProvider' => $dataProvider]);
        }

        return false;
    }

    protected function getModel($id){
        $model = MenuItems::findOne($id);
        if (!$model){
            throw new Exception('Requested page does not exist');
        }

        return $model;
    }
}