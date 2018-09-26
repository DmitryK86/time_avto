<?php
/**
 * @var yii\web\View $this
 * @var \app\models\ContentItems $items[]
 */
?>

<div class="main-menu">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main-menu">
                        <ul class="nav navbar-nav navbar-left">
                            <li class="first active">
                                <a href="<?= \yii\helpers\Url::to('/');?>">
                                    <?= Yii::t('app', 'Главная'); ?>
                                </a>
                            </li>
                            <?php if ($items):?>
                            <?php foreach ($items as $item):?>
                            <li>
                                <a href="<?= \yii\helpers\Url::to(['site/menu', 'slug' => $item->slug]);?>"><?= $item->title ?></a>
                            </li>
                            <?php endforeach;?>
                            <?php endif;?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" style="margin-right: 0">
                            <li class="hidden-xs absolute-sm">
                                <a class="btn-form" href="#" onclick="featureInProgress()">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    &nbsp; <?= Yii::t('app', 'Запись на сервис'); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
