<?php
use kartik\grid\GridView;

/** @var $searchModel app\models\search\CarSearch */
/** @var $dataProvider \yii\data\ActiveDataProvider */
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'kartik\grid\SerialColumn'],
        [
            'attribute' => 'carBrand.name',
            'group' => true
        ],
        [
            'attribute' => 'name'
        ]
    ]
])?>
