<?php
/**
 * @var \yii\web\View $this
 * @var \yii\data\ActiveDataProvider $dataProvider
 */
?>

<?php
$columns = [
    'id',
    'title',
    'comment',
    'seo_description',
    'seo_keywords',
    'seo_h1',
    [
        'class' => 'yii\grid\ActionColumn',
        'template' => '{view} {update}',
    ],
];
?>

<?php echo \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => $columns
]);
?>
