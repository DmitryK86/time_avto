<?php
/**
 * @var \yii\web\View $this
 * @var array $days
 * @var array $visits
 */

$this->title = Yii::t('app', 'Посещаемость');
$this->params['breadcrumbs'][] = $this->title;
?>

<?= \yiier\chartjs\ChartJs::widget([
    'type' => 'line',
    'options' => [
        'height' => 200,
        'width' => 600
    ],
    'data' => [
        'labels' => $days,
        'datasets' => [
            [
                'label'=> Yii::t('app', 'Статистика по дням'),
                'data' => $visits,
            ],
        ]
    ]
]);?>
