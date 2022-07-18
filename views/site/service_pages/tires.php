<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\ServiceItems $model
 */

use app\helpers\PhoneHelper;
use app\widgets\Price;
?>

<div class="main-content">
    <div class="decor-h1">
        <h1><?= $model->seo_h1;?></h1>
    </div>
    <p>Наш автосервіс пропонує послугу сезонного зберігання автошин.</p>

    <?php if ($model->hasPrice()):?>
        <h2>Ціни на сезонне зберігання автошин</h2>
        <p>Вартість зберігання за 4 колеса у гривнях.</p>
        <?php echo Price::widget(['model' => $model]);?>
    <?php endif;?>

    <p>Для замовлення послуги телефонуйте за автосервісом: Тайм Авто на Академмістечку <?= PhoneHelper::getPhone(); ?> або записуйтесь на проведення робіт онлайн через форму
        <a href="#" onclick="featureInProgress()">запис на ремонт</a>.</p>

    <div class="section-subs"></div>
</div>
