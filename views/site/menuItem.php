<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\ContentItems $model
 */

$this->title = $model->title .' | '. Yii::$app->params['appName'];
?>

<div class="page-content">
    <div class="container">
        <div class="row">
            <?php echo \app\widgets\LeftMenu::widget(); ?>

            <div class="col-sm-8 col-md-9">
                <div></div>
                <div class="main-content">
                    <div class="decor-h1">
                        <h1><?= $model->title; ?></h1>
                    </div>
                    <?= $this->render('menu_pages/' . $model->slug); ?>
                </div>
            </div>
        </div>
    </div>
</div>
