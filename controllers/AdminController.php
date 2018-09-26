<?php
namespace app\controllers;


use app\models\LoginForm;
use yii\helpers\Url;
use yii\web\Response;

class AdminController extends BaseController
{
    public $layout = '//admin';
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['admin/index']));
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

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        \Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionIndex(){
        if (\Yii::$app->user->isGuest){
            $this->redirect(Url::to('admin/login'));
        }

        if (\Yii::$app->request->getQueryParam('migrate1')){
            require '../migrations/m180903_193109_content_items.php';
            $migration = new \m180903_193109_content_items();
            $migration->up();
        }

        if (\Yii::$app->request->getQueryParam('migrate2')){
            require '../migrations/m180904_181359_add_default_content_items.php';
            $migration2 = new \m180904_181359_add_default_content_items();
            $migration2->up();
        }

        return $this->render('index');
    }
}