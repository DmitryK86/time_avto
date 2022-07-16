<?php
/**
 *
 */
?>

<p><strong>Адрес:</strong>
    <?= Yii::$app->params['address'];?>
</p>

<p><strong>Пошта: </strong>
    <a href="mailto:<?= Yii::$app->params['email'];?>"><?= Yii::$app->params['email'];?>
    </a>
    <br>
    <strong>Телефони:</strong>
    <?= implode(' , ', Yii::$app->params['phones']);?>
</p>
<br>
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2135.5895720255508!2d30.329217475685205!3d50.46608711465896!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1537049478100" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
