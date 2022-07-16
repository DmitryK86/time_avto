<?php
/**
 * @var \yii\web\View $this
 */
?>

<div class="footer-wr">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="text-left">
                        <div class="address"><?= Yii::$app->params['address'] ?></div>
                        <?php foreach (Yii::$app->params['phones'] as $phone): ?>
                        <div class="phone"><?= $phone; ?></div>
                        <?php endforeach;?>
                        <div class="email"><a href="mailto:info@forszh-spb.ru"><?= Yii::$app->params['email'] ?></a></div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <i class="far fa-clock" aria-hidden="true"></i>
                        <span class="open-hours">Години роботи:</span><br>
                        <?php foreach (Yii::$app->params['workTime'] as $time):?>
                        <?= $time;?><br>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

