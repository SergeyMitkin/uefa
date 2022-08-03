<?php

// Получаем html страницы через curl и сохраняем в переменную
$ch = curl_init('https://www.uefa.com/livescores/?date=2022-07-28');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$html = curl_exec($ch);
curl_exec($ch);
curl_close($ch);

// Парсим данные через phpQuery
$doc = phpQuery::newDocument($html);
$res = $doc->find('div.match-row')->each(function () {
    // Здесь получаем данные о матчах
});