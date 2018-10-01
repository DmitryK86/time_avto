<?php
namespace app\modules\admin\controllers;

use app\models\MenuItems;
use app\modules\admin\components\AdminBaseController;
use yii\data\ActiveDataProvider;

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
}