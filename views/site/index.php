<?php

/**
 * @var $this yii\web\View
 * @var \app\models\ContentItems[] $serviceItems
 */

$this->title = Yii::$app->params['appName'];
$this->registerMetaTag(['name' => 'keywords', 'content' => 'Таймавто, Тайм Авто, Тайм-Авто, СТО, автосервіс, Київ, Академмістечко, Біличі, ремонт, діагностика, технічне обслуговування']);
$this->registerMetaTag(['name' => 'description', 'content' => 'СТО Тайм Авто - сучасний автосервіс в Києві на Академмістечку. Всі види робіт. Низькі ціни. Висока якість']);
?>

<?php echo Yii::$app->controller->renderPartial('index/slider'); ?>

<div class="nav-units nav-units-main">
    <div class="container">
        <div class="row">
            <?php $i = 0; foreach ($serviceItems as $item):?>
            <?php $i++; ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 <?php if ($i > 8) echo "nav-units-main-hided"?>">
                <div class="unit">
                    <a href="<?= \yii\helpers\Url::to(['site/service', 'slug' => $item->slug]);?>">
                        <span class="image"><img src="<?= $item->icon?>" style="height:72px;" alt="<?= $item->title;?>"></span>
                        <span class="title"><?= $item->title;?></span>
                    </a>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

<?php if (count($serviceItems) > 8):?>
<div class="nav-units-main-btn">
    <a style="text-decoration:none;" href="#">
        Все услуги
        <i class="fa fa-angle-double-down"></i>
    </a>
</div>
<?php endif;?>

<div class="info-units">
    <div class="container">
        <div class="text-center">
            <div class="h1">Чому обирають наш автосервіс?</div>
            <div class="row">
                <div class="col-sm-2_4">
                    <span class="image">
                        <img alt="" src="/img/svg/24-7.svg" style="height:72px;">
                    </span>
                    <span class="title">Оперативний подбір<br>і доставка запчастин</span>
                </div>
                <div class="col-sm-2_4">
                    <span class="image">
                        <img alt="" src="/img/svg/handshake.svg" style="height:72px;">
                    </span>
                    <span class="title">Індивідуальний<br>підхід</span>
                </div>
                <div class="col-sm-2_4">
                    <span class="image">
                        <img alt="" src="/img/svg/mechanic.svg" style="height:72px;">
                    </span>
                    <span class="title">Кваліфікований<br>персонал</span>
                </div>
                <div class="col-sm-2_4">
                    <span class="image">
                        <img alt="" src="/img/svg/diagnostics.svg" style="height:72px;">
                    </span>
                    <span class="title">Сучасне<br>обладнання</span>
                </div>
                <div class="col-sm-2_4">
                    <span class="image">
                        <img alt="" src="/img/svg/location.svg" style="height:72px;">
                    </span>
                    <span class="title">Зручне<br>розташування</span>
                </div>
            </div>
        </div>
    </div>
</div>
