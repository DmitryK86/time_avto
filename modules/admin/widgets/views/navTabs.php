<?php
/**
 * @var \yii\web\View $this
 */
?>

<?php
    \yii\bootstrap\NavBar::begin(['options' => ['class' => 'none']]);
    echo \yii\bootstrap\Nav::widget([
        'options' => ['class' => 'nav nav-pills'],
        'items' => $tabs
    ]);
    \yii\bootstrap\NavBar::end();
?>

