<?php
namespace app\modules\admin\controllers;

use app\components\Translit;
use app\models\Visits;
use app\modules\admin\controllers\AdminBaseController;
use yii\helpers\Url;

/**
 * Class AdminController
 * @package app\modules\admin\controllers
 */
class AdminController extends AdminBaseController
{
    public function actionIndex(){
        if (\Yii::$app->user->isGuest){
            return $this->redirect(Url::to('site/login'));
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

    /**
     * @param $str string
     */
    public function actionSlug($str)
    {
        $translit = new Translit();

        $result = $translit->translit($str, true, 'ru-en');
        $result = preg_replace('/[`\'\"]+/', '', $result);
        $result = preg_replace('/[^a-zA-Z0-9_\x7f-\xff]+/', '-', $result);
        $result = mb_strtolower($result, \Yii::$app->charset);
        $result = trim($result, '-');

        $this->ajaxResponse($result);
    }
}