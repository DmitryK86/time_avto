<?php
/**
 * @var yii\web\View $this
 */
$this->registerCssFile('css/slick.css');
$this->registerCssFile('css/slick-theme.css');
$this->registerJsFile('js/slick.min.js', ['depends' => 'yii\web\YiiAsset']);
$this->registerJs('
    $(\'.single-item\').slick({
        variableWidth: true,
        autoplay: true,
        autoplaySpeed: 3000,
    });
')
?>

<div class="single-item">
    <img src="img/slider/slide03.jpg" alt="" />
    <img src="img/slider/slide02.jpg" alt="" />
    <img src="img/slider/slide04.jpg" alt="" />
    <img src="img/slider/slide05.jpg" alt="" />
    <img src="img/slider/slide06.jpg" alt="" />
    <img src="img/slider/slide07.jpg" alt="" />
    <img src="img/slider/slide01.jpg" alt="" />
</div>
