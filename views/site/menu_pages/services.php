<?php

use \app\models\ContentItems;
/**
 * @var \yii\web\View $this
 * @var \app\models\ContentItems $model
 */
?>

<div class="nav-units">
    <div class="container">
        <div class="row">
            <?php foreach (ContentItems::findAll(['enabled' => true, 'type' => ContentItems::TYPE_SERVICE]) as $item):?>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
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
