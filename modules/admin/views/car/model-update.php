<?php

/** @var $this \yii\web\View */
/** @var $form app\forms\CarModelUpdateForm */

$this->title = Yii::t('app', 'Добавить новую модель');
$this->params['breadcrumbs'][] =  ['label' => Yii::t('app', 'Каталог авто'), 'url'=> ['#']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_model-form', ['form' => $form])?>