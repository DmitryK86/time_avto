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
    <p>СТО Тайм Авто пропонує професійний кузовний ремонт автомобіля. Ми працюємо з різними видами пошкоджень різних марок машин.</p>

    <?php if ($model->hasPrice()):?>
        <h2>Ціни на фарбування автомобіля</h2>
        <p>Ціни на кузовний ремонт та фарбування автомобіля у нашому СТО одні з найдемократичніших у Києві.</p>
        <?php echo \app\widgets\Price::widget(['model' => $model]);?>
    <?php endif;?>


    Виконувані арматурні та кузовні роботи, по-детально:

    <ul>
        <li>бампер передній і задній;</li>
        <li>капот;</li>
        <li>крило передній и задній;</li>
        <li>двері передні и задні;</li>
        <li>порог;</li>
        <li>кришка багажника;</li>
        <li>арка;</li>
        <li>криша.</li>
    </ul>

    <p>Якісне фарбування автомобіля - це  послуга, якою ми дійсно пишаємося. Наше СТО має сучасні камери Enzo та Yoki Star, оснащені професійним обладнанням Festool, Sata, Saico, Blowtherm, Car-O-Liner. Ми використовуємо матеріали провідних світових виробників - CarSystem, 3M, DuPont, а наші фахівці мають багаторічний досвід виконання подібних робіт. </p>
    <p>Також ми надаємо наступні псслуги:</p>

    <ul>
        <li>заміна лобового скла (автоскло в наявносі і під замовлення) - ціна робіт від 1 000 грн;</li>
        <li>ремонт пластикових деталей специальними матеріалами.</li>
    </ul>

    <h2>Види кузовного ремонту</h2>

    <p>Кузовной ремонт автомобіля передбачає відновлення різних його елементів при наявності дефектів чи пошкоджень, як зовнішніх, так і внутрішніх.</p>

    <p>Необхідність в ремонті може виникнути, якщо ваша машина потрапила в ДТП та була порушена геометрія. Небезбека таких порушень може бути в тому, що може розповсюджуватися корозія на місці удару. Іншою причиною є корозія елементів, яка виникає при тривалій експлуатації  автомобіля в агресивних умовах та недостатній догляд за лакофарбовим покриттям.</p>

    <p>Автосервіс <?= Yii::$app->params['appName'];?> пропонує наступні види ремонту та фарбування автомобіля:</p>

    <ul>
        <li>локальне. Цей вид використовується при невеликих пошкодженнях окремих елементів. Робиться швидко та недорого;</li>
        <li>повне. Потрібно при великих пошкодженнях після великої ДТП чи проступила іржа на кузові. Складна та функціональна процедура, яка вимагає багато часу та прфесійного підходу;</li>
        <li>ремонт без фарбування. Усунення невеликих вм'ятин вакуумним методом чи методом електровирівнювання.</li>
    </ul>

    <h3>Етапи фарбування автомобіля</h3>

    <p>В різних випадках кузовний ремонт та фарбування автомобіля виконується в декілька етапів:</p>

    <ol>
        <li>Оцінка пошкоджень. Необхідно провести діагностику всіх елементів та вузлів. На цьому етапі майсер виявляє, які пошкодження у автомобіля, які роботи повинні бути виконані та їх термін;</li>
        <li>Безпосередньо роботи. Сюди можуть входити роботи з відтворення початкової геометрії авто (при сильній деформації), рихтування та відновлення окремих деталей. Елементи, що не підлягають ремонту, замінюються на нові;</li>
        <li>Підготовка до лакофарбових робіт. На цьому етапі видаляється стара фарба, поверхня деталей, що фарбуються, обробляється шпаклівкою і загрунтовується (що часто є протикорозійною обробкою);</li>
        <li>Фарбування та полірування. Підбір кольору здійснюється за допомогою спеціального обладнання, щоб максимально наблизити його до основного кольору. Забарвлення пошкодженої ділянки дає можливість повністю оновити її до попереднього вигляду. Закінчується робота з відновлення полірування поверхні.</li>
    </ol>

    <p>В результаті у машини повністю відновлюються характеристики керованості та зовнішній вигляд.</p>

    <h3>Переваги СТО Тайм Авто</h3>

    <p>Кузовний ремонт автомобіля в СТО Тайм Авто має низку переваг:</p>

    <ul>
        <li>сертифіковані спеціалісти;</li>
        <li>100% попадання в колір;</li>
        <li>високий рівень якості;</li>
        <li>оперативність виконання;</li>
        <li>гарантія результату;</li>
        <li>доступні ціни.</li>
    </ul>

    <p>Приїжджайте до нас і будьте певні, що Ваша машина потрапить у потрібні руки. На фарбування крила, капота, порогів та стійки діють спеціальні знижки!</p>

    <h3>Записатися на кузовний ремонт у СТО Тайм Авто</h3>

    <p>Для замовлення послуги з фарбування автомобіля за цінами нижчими від міських телефонуйте за телефонами зручного для Вас автосервісу:</p>

    <ul>
        <li>Тайм Авто на Академмістечку +38 (050) 888-26-65</li>
    </ul>

    <p>або записуйтесь на проведення робіт онлайн через форму <a href="#" onclick="featureInProgress()">запис на ремонт</a>.</p>

    <hr>
    <p>Шановні відвідувачі, СТО Тайм Авто крім послуг з ремонту та обслуговування автомобілів також пропонує всі види оригінальних та неоригінальних запчастин.</p>

    <div class="row second-gallery">

    </div>

</div>
