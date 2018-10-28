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
                <?= $form->field($model->subservices[$i], "[{$i}]title"); ?>
                <?= $form->field($model->subservices[$i], "[{$i}]price"); ?>
            </div>
        </div>
    <?php else:?>
            <div class="subservice-items">
                <div class="subservice-item-block">
                    <?= $form->field($model->subservices[$i], "[{$i}]title")->label(false); ?>
                    <?= $form->field($model->subservices[$i], "[{$i}]price")->label(false); ?>
                </div>
            </div>
    <?php endif;?>
    <?php endfor;?>
<?php else:?>
    <?php $subservice = new \app\models\SubserviceItems();?>
    <div class="subservice-items">
        <div class="subservice-item-block">
            <?= $form->field($subservice, "[0]title"); ?>
            <?= $form->field($subservice, "[0]price"); ?>
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
                var newName = name.replace(/\d+/, num + 1);
                console.log(newName);
                $(this).attr('name', newName).attr('value', '');
            });

            newFields.find('label').remove();

            $('.subservice-fields .subservice-items').last().after(newFields);
        })
    };
</script>
