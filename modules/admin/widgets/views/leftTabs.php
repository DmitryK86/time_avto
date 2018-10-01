<?php
/**
 * @var \yii\web\View $this
 */
?>

<?php echo \yii\bootstrap\Tabs::widget([
    'items' => [
        [
            'label' => Yii::t('app', 'Главная'),
            'url' => [Yii::$app->urlManager->createUrl('admin/admin/index')],
            'active' => Yii::$app->requestedAction->id == 'index' && Yii::$app->requestedAction->controller->id == 'admin',
        ],
        [
            'label' => Yii::t('app','Посещаемость'),
            'url' => [Yii::$app->urlManager->createUrl('admin/admin/visits')],
            'active' => Yii::$app->requestedAction->id == 'visits',
        ],
        [
            'label' => Yii::t('app','Элементы меню'),
            'url' => [Yii::$app->urlManager->createUrl('admin/menu/index')],
            'active' => Yii::$app->requestedAction->id == 'index' && Yii::$app->requestedAction->controller->id == 'menu',
        ],
        [
            'label' => Yii::t('app','Таб3'),
            'url' => ['site/contacts']],
        [
            'label' => Yii::t('app','Выход'),
            'url' => [Yii::$app->urlManager->createUrl('site/logout')]],
    ],
    'navType' => 'nav nav-pills nav-stacked',
]);?>
