<?php
/**
 * @var yii\web\View $this
 */
?>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="tbl">
                    <div class="td">
                        <div class="logo"><a href="/"><img src="/img/logo.png" alt=""></a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="tbl">
                    <div class="td">
                        <div class="slogan">
                            <?= Yii::t('app', 'Автосервис под ключ'); ?>
                            <br>
                            <?= Yii::t('app', 'Все виды ремонта'); ?>
                        </div>
                    </div>
                </div>
                <div class="line"></div>
            </div>
            <div class="col-sm-3">
                <div class="tbl">
                    <div class="td">
                        <span class="open-hours"><?= Yii::t('app', 'Часы работы'); ?>:<br>
                        <span class="icon-1">
                            <?php foreach (Yii::$app->params['workTime'] as $time): ?>
                            <?= $time; ?><br>
                            <?php endforeach;?>
                        </span>
                    </div>
                </div>
                <div class="line"></div>
            </div>
            <div class="col-sm-4">
                <div class="tbl">
                    <div class="td text-right">
                        <div class="address">
                            <?= Yii::$app->params['address'];?>
                        </div>
                        <div class="phone">
                            <?php foreach (Yii::$app->params['phones'] as $phone):?>
                            <img src="/img/phone.svg" alt="">
                            <?= $phone; ?><br>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
