<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\ServiceItems $model
 */
?>

<div class="main-content">
    <div class="decor-h1">
        <h1><?= $model->seo_h1;?></h1>
    </div>
    <p>Наш автосервис предлагает услугу по сезонному хранению автошин.</p>

    <?php if ($model->hasPrice()):?>
        <h2>Цены на сезонное хранение автошин</h2>
        <p>Стоимость хранения за 4 колеса в гривнах.</p>
        <?php echo \app\widgets\Price::widget(['model' => $model]);?>
    <?php endif;?>

    <p>Для заказа услуги звоните по телефону автосервиса: Тайм Авто на Академгородке  +38 (050) 888-26-65 либо записывайтесь на проведение работ он-лайн через форму <a
                href="#" onclick="featureInProgress()">запись на ремонт</a>.</p>

    <div class="section-subs"></div>
</div>
