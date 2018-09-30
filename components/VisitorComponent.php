<?php
namespace app\components;

use app\models\Visits;
use yii\web\Cookie;

class VisitorComponent
{
    const VISITOR = '_visitor';
    const VISITOR_TODAY = '_visitor_today';

    public static function isNewVisitor(){
        return !isset(\Yii::$app->request->cookies[self::VISITOR]);
    }

    public static function isNewVisitorToday(){
        return !isset(\Yii::$app->request->cookies[self::VISITOR_TODAY]);
    }

    public static function updateVisitsCounters(){
        $visit = Visits::find()->where(['date' => date('Y-m-d')])->one();

        if (!$visit){
            $visit = new Visits();
            $visit->date = date('Y-m-d');
            $visit->save();
        }
        else{
            $visit->updateCounters(['visits' => 1]);
        }

        $cookies = \Yii::$app->response->cookies;

        $cookies->add(new \yii\web\Cookie([
            'name' => self::VISITOR_TODAY,
            'value' => 1,
            'expire' => strtotime('tomorrow'),
        ]));
    }

    public static function checkIsBot(){
        $ua = \Yii::$app->request->userAgent;
        if (empty($ua) || strpos($ua, 'YandexBot') !== false || strpos($ua, 'Googlebot') !== false){
            return true;
        }
        return false;
    }
}