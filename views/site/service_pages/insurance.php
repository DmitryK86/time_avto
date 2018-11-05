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

    <p>В нашем <?= Yii::$app->params['appName'];?> есть офис компании "Super Insurance", осуществляющий все виды автострахования.</p>

    <?php if ($model->hasPrice()):?>
        <h2>Цены на автострахование</h2>
        <?php echo \app\widgets\Price::widget(['model' => $model]);?>
    <?php endif;?>

    <div class="section-subs"></div>
</div>
