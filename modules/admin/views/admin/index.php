<?php
/**
 * @var \yii\web\View $this
 */
$this->title = Yii::t('app', 'Админка');
$this->params['breadcrumbs'][] = $this->title;

?>
<blockquote>
    <h2>Добро пожаловать</h2>
</blockquote>
<div class="row-fluid">
        <div class="coll-md-4">
            <table class="table">
                <thead>
                <tr>
                    <th colspan="2">Сведения о системе</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Версия CMS</td>
                    <td><span class="label label-default"><?php echo Yii::$app->version; ?></span></td>
                </tr>
                <tr>
                    <td>Версия Yii</td>
                    <td><span class="label label-default"><?php echo Yii::getVersion(); ?></span></td>
                </tr>
                <tr>
                    <td>Версия PHP</td>
                    <td><span class="label label-default"><?php echo phpversion(); ?></span></td>
                </tr>
                </tbody>
            </table>

        </div>

    <div class="span4">
        <table class="table">
            <thead>
            <tr>
                <th colspan="2">Учетная запись и сессия</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Текущий IP</td>
                <td><span class="label label-warning"><?php echo Yii::$app->request->userIP; ?></span></td>
            </tr>
            </tbody>
        </table>


    </div>
</div>