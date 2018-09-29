<?php

namespace app\controllers;

use app\models\ContentItems;
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
        $serviceItems = ContentItems::findAll(['enabled' => true, 'type' => ContentItems::TYPE_SERVICE]);
        return $this->render('index', ['serviceItems' => $serviceItems]);
    }

    public function actionMenu(string $slug)
    {
        return $this->render('menuItem', ['model' => $this->getModel($slug)]);
    }

    public function actionService(string $slug)
    {
        return $this->render('serviceItem', ['model' => $this->getModel($slug)]);
    }

    protected function getModel($slug){
        $model = ContentItems::find()->where(['slug' => $slug])->one();

        if (!$model){
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $model;
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function getRandomPhone($count = 1){
        return array_rand(Yii::$app->params['phones'], $count);
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
