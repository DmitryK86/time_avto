<?php
/**
 * @var \yii\web\View
 */
$subservices = \app\models\SubserviceItems::findAll(['is_main' => true]);
?>

<h2>Ціни на основні види робіт СТО «Тайм Авто»</h2>

<?php if ($subservices):?>
<table class="price">
    <thead class="tableHeader-processed">
    <tr>
        <th>Найменування роботи</th>
        <th>Вартість, грн</th>
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

<p>Вартість робіт може змінюватись в залежності від марки автомобіля та конструктивних особливостей</p>

<p>В залежності від року випуска автомобіля - можуть бути додані слюсарні роботи</p>

<p>Електротехнічні роботи визначаются по витраченому часу - із розрахунку 600 н/г</p>
