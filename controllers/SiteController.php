<?php

namespace app\controllers;

use app\models\MenuItems;
use app\models\ServiceItems;
use app\models\User;
use Yii;
use yii\helpers\Url;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends BaseController
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $serviceItems = ServiceItems::findAll(['enabled' => true]);
        return $this->render('index', ['serviceItems' => $serviceItems]);
    }

    public function actionMenu(string $slug)
    {
        $model = MenuItems::find()->where(['slug' => $slug])->one();

        if (!$model){
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('menuItem', ['model' => $model]);
    }

    public function actionService(string $slug)
    {
        $model = ServiceItems::find()->where(['slug' => $slug])->one();

        if (!$model){
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('serviceItem', ['model' => $model]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            if (\Yii::$app->user->getIdentity()->role = User::ROLE_ADMIN){
                $this->redirect(Url::to(['admin/admin/index']));
            }
        }

        $model = new LoginForm();
        if ($model->load(\Yii::$app->request->post()) && $model->login()) {
            $this->redirect(Url::to(['admin/index']));
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        $url = Yii::$app->user->logout() ? Url::home() : Url::previous();
        $this->redirect($url);

    }
}
