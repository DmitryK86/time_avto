<?php
/**
 * @var \yii\web\View $this
 * @var array $days
 * @var array $visits
 */
\yiier\chartjs\ChartJsAsset::register($this);
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
                'label'=> 'Посещения',
                'data' => $visits,
            ],
        ]
    ]
]);?>
