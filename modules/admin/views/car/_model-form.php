<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\helpers\CarHelper;

/** @var $this \yii\web\View */
/** @var $form  app\forms\BaseCarModelForm*/
?>

<?php
$activeForm = ActiveForm::begin([
    'options' => ['class' => 'form-vertical']
]) ?>
<?= $activeForm->field($form, 'car_brand_id')
    ->dropDownList(CarHelper::getListOfBrands())?>
<?= $activeForm->field($form, 'name')?>
<?= $activeForm->field($form, 'description')?>
<?= $activeForm->field($form, 'status')->checkbox()?>

<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>
</div>
<?php ActiveForm::end() ?>
