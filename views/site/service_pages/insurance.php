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

    <p>У нашому <?= Yii::$app->params['appName'];?> є офіс компанії "Super Insurance", який здійснює всі види автострахування.</p>

    <?php if ($model->hasPrice()):?>
        <h2>Ціни на автострахування</h2>
        <?php echo \app\widgets\Price::widget(['model' => $model]);?>
    <?php endif;?>

    <div class="section-subs"></div>
</div>
