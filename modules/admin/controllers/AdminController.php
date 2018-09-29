<?php
namespace app\modules\admin\controllers;

use app\models\LoginForm;
use app\models\Visits;
use app\modules\admin\components\AdminBaseController;
use yii\helpers\Url;
use yii\web\Response;

/**
 * Class AdminController
 * @package app\modules\admin\controllers
 */
class AdminController extends AdminBaseController
{
    public function actionIndex(){
        if (\Yii::$app->user->isGuest){
            $this->redirect(Url::to('site/login'));
        }

        return $this->render('index');
    }

    public function actionVisits(){
        $visits = Visits::find()->orderBy('id desc')->limit(20)->all();
        $days = [];
        $visitorsCount = [];

        foreach ($visits as $visitDay){
            $days[] = $visitDay->date;
            $visitorsCount[] = $visitDay->visits;
        }

        return $this->render('visits', ['days' => array_reverse($days), 'visits' => array_reverse($visitorsCount)]);
    }
}