<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\ServiceItems $model
 */
$this->title = Yii::t('app', 'Редактирование стоимости услуг');
$this->params['breadcrumbs'][] =  ['label' => Yii::t('app', 'Управление элементами сервиса'), 'url'=> ['service/index']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Редактирование ') . $model->title, 'url'=> [\yii\helpers\Url::to(['service/update', 'id' => $model->id])]];
$this->params['breadcrumbs'][] = $this->title;
?>

<h3>Прайс для сервиса "<?= $model->title;?>"</h3>
<hr>
<?php
$form = \yii\widgets\ActiveForm::begin([
    'id' => 'sub-service-form',
    'options' => ['class' => 'form-vertical'],

]) ?>

<div class="subservice-fields">
<?php if ($model->subservices):?>
    <?php for ($i = 0; $i < count($model->subservices); $i++):?>
    <?php if ($i ==0):?>
        <div class="subservice-items">
            <div class="subservice-item-block">
                <?= $form->field($model->subservices[$i], "[{$i}]title", ['options' => ['class' => 'form-group first-field']]); ?>
                <?= $form->field($model->subservices[$i], "[{$i}]price"); ?>
                <?= $form->field($model->subservices[$i], "[{$i}]is_main")->widget(\kartik\switchinput\SwitchInput::classname(), []); ?>
                <?= $form->field($model->subservices[$i], "[{$i}]enabled")->widget(\kartik\switchinput\SwitchInput::classname(), []); ?>
            </div>
        </div>
    <?php else:?>
            <div class="subservice-items">
                <div class="subservice-item-block">
                    <?= $form->field($model->subservices[$i], "[{$i}]title", ['options' => ['class' => 'form-group first-field']])->label(false); ?>
                    <?= $form->field($model->subservices[$i], "[{$i}]price")->label(false); ?>
                    <?= $form->field($model->subservices[$i], "[{$i}]is_main")->widget(\kartik\switchinput\SwitchInput::classname(), [])->label(false); ?>
                    <?= $form->field($model->subservices[$i], "[{$i}]enabled")->widget(\kartik\switchinput\SwitchInput::classname(), [])->label(false); ?>
                </div>
            </div>
    <?php endif;?>
    <?php endfor;?>
<?php else:?>
    <?php $subservice = new \app\models\SubserviceItems();?>
    <div class="subservice-items">
        <div class="subservice-item-block">
            <?php $checkboxTemplate = '{input}<br>{label}';?>
            <?= $form->field($subservice, "[0]title", ['options' => ['class' => 'form-group first-field']]); ?>
            <?= $form->field($subservice, "[0]price"); ?>
            <?= $form->field($subservice, "[0]is_main", ['options' => ['style' => 'margin-left:15px']])->widget(\kartik\switchinput\SwitchInput::classname(), []); ?>
            <?= $form->field($subservice, "[0]enabled", ['options' => ['style' => 'margin-left:15px']])->widget(\kartik\switchinput\SwitchInput::classname(), ['value'=>true]); ?>
        </div>
    </div>

<?php endif;?>
</div>
<div class="form-group">
    <div class="col-lg-offset-1 col-lg-11">
        <?= \yii\helpers\Html::submitButton('<i class="glyphicon glyphicon-ok"></i> Сохранить все записи', ['class' => 'btn btn-success']) ?>
        <?= \yii\helpers\Html::button('<i class="glyphicon glyphicon-plus"></i> Добавить строку', ['class' => 'btn btn-info', 'id' => 'add-fields']);?>
    </div>
</div>

<?php \yii\widgets\ActiveForm::end() ?>

<script>
    window.onload = function() {
        $('#add-fields').on('click', function () {
            var newFields = $('.subservice-fields .subservice-items').last().clone();
            newFields.find('input').each(function () {
                var name = $(this).attr('name');
                var num = Number(name.match(/\d+/)[0]);
                var newName = name.replace(/\d+/, ++num);
                $(this).attr('name', newName).attr('value', '');
            });

            newFields.find('label').remove();

            $('.subservice-fields .subservice-items').last().after(newFields);
        })
    };
</script>
