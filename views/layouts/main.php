<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play:400,700&subset=cyrillic">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="header-top-absolute">
    <?php echo \app\widgets\Header::widget(); ?>
    <?php echo \app\widgets\Menu::widget(); ?>
</div>
<div class="wrap">
    <div class="container">
        <?= $content; ?>
    </div>
</div>

<?php echo \app\widgets\Footer::widget();?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
