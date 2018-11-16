<?php
use yii\grid\GridView;
use yii\helpers\Html;
use yii\widgets\Pjax;

/** @var $this \yii\web\View */
/** @var $dataProvider \yii\data\DataProviderInterface */

$this->title = Yii::t('app', 'Каталог авто');
$this->params['breadcrumbs'][] = $this->title;
?>

<?php Pjax::begin(['id' => 'brands-grid', 'enablePushState' => false])?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'name',
            'description',
            'logo',
            [
                'header' => Yii::t('app', 'Управление'),
                'class' => 'yii\grid\ActionColumn',
                'template' => '{toggle}{update}{view}',
                'headerOptions' => ['class' => 'header-control-btns'],
                'contentOptions' => ['class' => 'control-btns'],
                'buttons' => [
                    'toggle' => function($url, $model, $key) {
                        $title = $model->status ? 'Выключить' : 'Включить';
                        $color = $model->status ? 'green' : 'red';
                        return Html::a(
                            '<span class="glyphicon glyphicon-off"></span>',
                            ['/admin/car/toggle-brand-status', 'brandId' => $model->id, 'status' => $model->status],
                            [
                                'title' => $title,
                                'style' => ['color' => $color],
                                'data-pjax' => '#brands-grid'
                            ]
                        );
                    },
                    'update' => function ($url, $model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-pencil"></span>',
                            ['/admin/car/brand-update', 'id' => $model->id],
                            ['title' => Yii::t('yii', 'Update')]
                        );
                    },
                    'view' => function ($url, $model) {
                        return Html::a(
                            '<span class="glyphicon glyphicon-eye-open"></span>',
                            ['/admin/car/model-index', 'brandId' => $model->id],
                            ['title' => Yii::t('app', 'Модели бренда {brand}', ['brand' => $model->name])]
                        );
                    }
                ]
            ],
        ]
    ])?>
<?php Pjax::end()?>