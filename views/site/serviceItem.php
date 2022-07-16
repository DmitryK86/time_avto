<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\ServiceItems $model
 */

use yii\widgets\Breadcrumbs;

$this->title = $model->title .' | '. Yii::$app->params['appName'];
$this->registerMetaTag(['name' => 'keywords', 'content' => $model->seo_keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $model->seo_description]);
$this->params['breadcrumbs'][] = $model->title;
?>

<div class="page-content">
    <div class="container">
        <div class="row">
            <?php echo \app\widgets\LeftMenu::widget(); ?>
            <div class="col-sm-8 col-md-6">
                <div>
                    <?= Breadcrumbs::widget([
                        'homeLink' => ['label' => 'Послуги', 'url' => \yii\helpers\Url::to(['site/menu', 'slug' => 'services'])],
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : []
                    ]);?>
                </div>
                <?php echo $this->render('service_pages/' . $model->slug, ['model' => $model]); ?>
            </div>

            <div class="col-sm-12 col-md-3 right-col">
                <?php echo \app\widgets\WorkProgress::widget(['model' => $model]); ?>
            </div>
        </div>
    </div>
</div>
