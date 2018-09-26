<?php
/**
 * @var yii\web\View $this
 * @var array $files
 */
?>

<div class="stock">
    <h4 class="ttu indent">Ход выполнения работ<br><?= $model->title;?></h4>
</div>
<div class="gallery right">
    <?php foreach ($files as $file):?>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="g-unit">
                <img src="/img/progress/<?= $model->slug . DIRECTORY_SEPARATOR . $file; ?>" alt="">

            </div>
        </div>
    <?php endforeach;?>
</div>
