<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\ServiceItems $model
 */
?>


<div class="main-content">
    <div class="decor-h1">
        <h1><?= $model->seo_h1;?></h1>
    </div>
    <p>СТО Тайм Авто производит плановое техническое обслуживание (ТО) автомобилей в современном автосервисе на
        Академгородке. Мы занимаемся обслуживанием машин любых марок. В нашем штате опытные высококвалифицированные
        сотрудники, которые работают на современном профессиональном оборудованием. Все диагностические и ремонтные
        работы проводятся в максимально короткие сроки.</p>

    <h2>Стоимость ТО и ремонта</h2>

    <?php if ($model->hasPrice()):?>
        <?php echo \app\widgets\Price::widget(['model' => $model]);?>
    <?php endif;?>

    <h2>Работы, входящие в плановое ТО</h2>

    <p>В стоимость планового технического обслуживания (ТО) включено:</p>

    <ul>
        <li>проверка работы наружного освещения;</li>
        <li>проверка уровня эксплуатационных жидкостей;</li>
        <li>проверка уровня масла в КПП и редукторе заднего моста;</li>
        <li>проверка герметичности систем;</li>
        <li>проверка состояния тормозной системы (метод дорожного испытания);</li>
        <li>проверка состояния тормозных колодок, дисков;</li>
        <li>проверка состояния системы рулевого управления и состояния передней и задней подвески;</li>
        <li>проверка состояния и натяжение приводных рем;</li>
        <li>проверка работы стояночной тормозной системы;</li>
        <li>проверка работы сцепления состояния выпускной системы;</li>
        <li>проверка состояния АКБ;</li>
        <li>смазка шарнирных соединений;</li>
        <li>замена масла в двигателе и масляного фильтра;</li>
        <li>замена топливного, воздушного фильтра, салонного.</li>
    </ul>

    <h3>Важность планового технического обслуживания</h3>

    <p>Плановое техническое обслуживание автомобиля - это обязательное и регулярное мероприятие, которое не только
        продлит срок эксплуатации Вашего автомобиля, но и обеспечит Вашу безопасность на дороге.</p>

    <p>Для каждой марки авто существует перечень работ, согласно нормативной документации производителя и
        отличительных особенностей каждой модели. Есть технический регламент, согласно которому производится
        техническое обслуживание. Мы строго соблюдаем рекомендации производителя, а также используем, накопленный
        нами опыт при проведении данных работ для их высокой эффективности.</p>

    <h3>Как заказать ТО в СТО Тайм Авто</h3>

    <p>Для заказа услуги звоните по телефонам удобного для Вас автосервиса: Тайм Авто на Беличах +38 (050) 888 26 65
        либо записывайтесь на проведение работ он-лайн через форму <a href="#" onclick="featureInProgress()">запись на ремонт</a>.</p>

    <p>Гарантия на все виды работ!</p>

    <hr>

</div>

