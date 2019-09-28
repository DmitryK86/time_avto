<?php
/**
 * @var \yii\web\View
 */
$subservices = \app\models\SubserviceItems::findAll(['is_main' => true]);
?>

<h2>Цены на основные виды работ СТО «Тайм Авто»</h2>

<?php if ($subservices):?>
<table class="price">
    <thead class="tableHeader-processed">
    <tr>
        <th>Наименование работ</th>
        <th>Стоимость, грн</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($subservices as $i => $subservice):?>
            <tr class="<?= ($i % 2) == 0 ? 'odd' : 'even';?>">
                <td><?= $subservice->title;?></td>
                <td><?= $subservice->price;?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
<?php endif;?>

<p>Стоимость работ может изменяться в зависимости от марки автомобиля и конструктивных особенностей</p>

<p>В зависимости от года выпуска автомобиля - могут добавляться слесарные работы</p>

<p>Электротехнические работы определяются по затраченному времени - из расчета 600 н/ч</p>
