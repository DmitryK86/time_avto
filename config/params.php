<?php

$params = [
    'email' => 'timeavto88@gmail.com',
    'adminEmail' => 'admin@timeavto.com.ua',
    'supportEmail' => 'info@timeavto.com.ua',
    'appName' => 'СТО Тайм Авто',
    'address' => 'г.Київ, ул.Обухівська, 135',
    'phones' => ['<a href="tel:+380680200701">+38 (068) 020-07-01</a>', '<a href="tel:+380508882665">+38 (050) 888-26-65</a>'],
    'workTime' => ['Пн-Пт: c 9-00 до 19-00', 'Сб: с 9-00 до 15-00'],
];

$envParams = __DIR__ . '/' . YII_ENV . '/params.php';

return \yii\helpers\ArrayHelper::merge(
    $params,
    file_exists($envParams) ? require($envParams) : []
);
