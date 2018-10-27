<?php

use \yii\widgets\ActiveForm;
use yii\helpers\Html;

/**
 * @var \yii\web\View $this
 * @var \app\models\ServiceItems $model
 */
$this->title = $model->isNewRecord ? Yii::t('app', 'Создание элемента сервиса') : Yii::t('app', 'Редактирование элемента сервиса');
$this->params['breadcrumbs'][] =  ['label' => Yii::t('app', 'Управление элементами сервиса'), 'url'=> ['service/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php
$form = ActiveForm::begin([
    'id' => 'service-form',
    'options' => ['class' => 'form-vertical'],
]) ?>
<?= $form->field($model, 'title'); ?>
<?= $form->field($model, 'slug'); ?>
<?= $form->field($model, 'comment'); ?>
<?= $form->field($model, 'icon')->label('Путь к картинке'); ?>
<?= $form->field($model, 'seo_h1'); ?>
<?= $form->field($model, 'seo_description'); ?>
<?= $form->field($model, 'seo_keywords'); ?>
<?= $form->field($model, 'enabled')->checkbox(); ?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        <?= Html::tag('a', 'Редактировать услуги', ['class' => 'btn btn-info', 'href' => \yii\helpers\Url::to(['service/subservice', 'serviceId' => $model->id])]);?>
    </div>
</div>
<?php ActiveForm::end() ?>
