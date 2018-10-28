<?php
/**
 * @var \yii\web\View $this
 * @var \yii\data\ActiveDataProvider $dataProvider
 */
$this->title = Yii::t('app', 'Управление элементами меню');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php echo \app\modules\admin\widgets\NavTabs::widget(['controllerName' => 'menu-items']);?>

<?php \yii\widgets\Pjax::begin(['id' => 'model-grid', 'enablePushState' => false]); ?>
<?php
$columns = [
    'id',
    'title',
    'comment',
    [
        'header' => Yii::t('app', 'Управление'),
        'class' => 'yii\grid\ActionColumn',
        'template' => '{toggle} {update}',
        'headerOptions' => ['class' => 'header-control-btns'],
        'contentOptions' => ['class' => 'control-btns'],
        'buttons' => [
            'toggle' => function($url, $model, $key) {
                $title = $model->enabled ? 'Выключить' : 'Включить';
                $color = $model->enabled ? 'green' : 'red';
                return \yii\helpers\Html::a('<span class="glyphicon glyphicon-off"></span>', $url, [
                    'title' => $title,
                    'style' => 'color:' . $color,
                    'data-pjax' => '#model-grid',
                ]);
            }
        ]
    ],
];
?>

<?php echo \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => $columns
]);
?>
<?php \yii\widgets\Pjax::end();?>
