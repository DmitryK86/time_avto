<?php
/**
 * @var \yii\web\View $this
 * @var \yii\data\ActiveDataProvider $provider
 */
?>

<?= \yii\grid\GridView::widget([
    'dataProvider' => $provider,
    'showOnEmpty' => false,
    'layout' => '{items}',
    'columns' => [
        [
            'attribute' => Yii::t('app', 'Наименование работ'),
            'value' => function($data){
                return $data['title'];
            }
        ],
        [
            'attribute' => Yii::t('app', 'Стоимость, грн.'),
            'value' => function($data){
                return $data['price'];
            }
        ],
    ]
]);
?>
