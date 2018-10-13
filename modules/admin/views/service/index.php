<?php
/**
 * @var \yii\web\View $this
 * @var \yii\data\ActiveDataProvider $dataProvider
 */
$this->title = Yii::t('app', 'Управление элементами сервисов');
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
        'class' => 'yii\grid\ActionColumn',
        'template' => '{toggle} {update}',
        'contentOptions' => ['style' => 'text-align:center;'],
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
