<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/** @var $this \yii\web\View */
/** @var $dataProvider \yii\data\DataProviderInterface */

$this->title = Yii::t('app', 'Каталог авто');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php Pjax::begin(['id' => 'models-grid', 'enablePushState' => false])?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'carBrand.name',
            'description',
            [
                'header' => Yii::t('app', 'Управление'),
                'class' => 'yii\grid\ActionColumn',
                'template' => '{toggle} {update}',
                'headerOptions' => ['class' => 'header-control-btns'],
                'contentOptions' => ['class' => 'control-btns'],
                'buttons' => [
                    'toggle' => function($url, $model, $key) {
                        $title = $model->status ? 'Выключить' : 'Включить';
                        $color = $model->status ? 'green' : 'red';
                        return Html::a(
                            '<span class="glyphicon glyphicon-off"></span>',
                            ['/admin/car/toggle-model-status', 'modelId' => $model->id, 'status' => $model->status],
                            [
                                'title' => $title,
                                'style' => ['color' => $color],
                                'data-pjax' => '#models-grid'
                            ]
                        );
                    },
                    'update' => function ($url, $model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-pencil"></span>',
                            ['/admin/car/model-update', 'id' => $model->id],
                            ['title' => Yii::t('yii', 'Update')]
                        );
                    }
                ]
            ],
        ]
    ])?>
<?php Pjax::end()?>
