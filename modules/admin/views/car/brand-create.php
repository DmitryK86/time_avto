<?php

/** @var $this \yii\web\View */
/** @var $form app\forms\CarBrandCreateForm */

$this->title = Yii::t('app', 'Добавить новый бренд');
$this->params['breadcrumbs'][] =  ['label' => Yii::t('app', 'Каталог авто'), 'url'=> ['#']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('_brand-form', ['form' => $form])?>