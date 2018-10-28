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
            'headerOptions' => ['style' => 'vertical-align:middle'],
            'value' => function($data){
                return $data['title'];
            }
        ],
        [
            'attribute' => Yii::t('app', 'Стоимость, грн.'),
            'headerOptions' => ['style' => 'vertical-align:middle'],
            'value' => function($data){
                return $data['price'];
            }
        ],
    ]
]);
?>
