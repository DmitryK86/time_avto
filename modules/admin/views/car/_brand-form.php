<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

/** @var $this \yii\web\View */
/** @var $form app\forms\BaseCarBrandForm*/
?>

<?php
$activeForm = ActiveForm::begin([
    'options' => ['class' => 'form-vertical']
]) ?>
    <?= $activeForm->field($form, 'name')?>
    <?= $activeForm->field($form, 'logo')?>
    <?= $activeForm->field($form, 'description')?>
    <?= $activeForm->field($form, 'status')->checkbox()?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>
