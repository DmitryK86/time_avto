<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\ContentItems[] $serviceItems
 */
?>

<div class="col-sm-4 col-md-3">
    <div class="h3 decor-block">
        <?= Yii::t('app', 'Послуги');?>
    </div>
    <ul class="sidebar">
        <?php foreach ($serviceItems as $item):?>
        <li>
            <a href="<?= \yii\helpers\Url::to(['site/service', 'slug' => $item->slug])?>">
                <?= $item->title;?>
            </a>
        </li>
        <?php endforeach;?>
    </ul>
    <div class="stock"> <a href="<?= \yii\helpers\Url::to(['site/service', 'slug' => 'undercarriage']);?>" class="stock-service tbl"></a></div>
</div>
