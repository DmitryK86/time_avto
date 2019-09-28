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
            'active' => Yii::$app->requestedAction->controller->id == 'admin' && Yii::$app->requestedAction->id == 'index',
        ],
        [
            'label' => Yii::t('app','Посещаемость'),
            'url' => [Yii::$app->urlManager->createUrl('admin/admin/visits')],
            'active' => Yii::$app->requestedAction->controller->id == 'admin' && Yii::$app->requestedAction->id == 'visits',
        ],
        [
            'label' => Yii::t('app','Страници меню'),
            'url' => [Yii::$app->urlManager->createUrl('admin/menu/index')],
            'active' => Yii::$app->requestedAction->controller->id == 'menu',
        ],
        [
            'label' => Yii::t('app','Страници сервисов'),
            'url' => [Yii::$app->urlManager->createUrl('admin/service/index')],
            'active' => Yii::$app->requestedAction->controller->id == 'service',
        ],
        [
            'label' => Yii::t('app','Выход'),
            'url' => [Yii::$app->urlManager->createUrl('site/logout')]
        ],
        [
            'label' => Yii::t('app','На сайт'),
            'url' => [Yii::$app->urlManager->createUrl('site/index')]
        ],
    ],

    'navType' => 'nav nav-pills nav-stacked',
]);?>
