<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
        <div class="col-md-2">
            <?php echo \app\modules\admin\widgets\LeftTabs::widget();?>
        </div>
    <div class="col-md-10">
        <?= Breadcrumbs::widget([
            'homeLink' => ['label' => 'Админка', 'url' => Yii::$app->urlManager->createUrl('admin/admin/index')],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
        ]);?>
        <div class="main-content">
            <?= Alert::widget();?>
            <?= $content; ?>
        </div>
    </div>
    <div class="col-md-12 footer">
        Made by DmitryK. All rights reserved. <?= date('Y');?>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
