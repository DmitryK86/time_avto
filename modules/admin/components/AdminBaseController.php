<?php
namespace app\modules\admin\components;

use yii\filters\AccessControl;
use yii\web\Controller;

class AdminBaseController extends Controller
{
    public $layout = '//admin';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['login'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                ],
            ],
        ];
    }

    public function ajaxResponse($response, $terminate = true){
        header('Content-Type: application/json; charset="UTF-8"');

        echo json_encode($response);
        if($terminate == true) \Yii::$app->end();
    }
}