<?php

require_once __DIR__ . '/vendor/autoload.php';

$s = new \Ichinya\SitemapGenerator\Sitemap();

$s->addUrl('https://site.ru/', time());
$s->addUrl('https://site.ru/about', strtotime('2021-09-30'), 'monthly', 0.3);

// Вывод с генерацией формата xml
$s->render(true);
// OR получаем ленту и сами выводим
header('Content-Type: application/xml; charset=utf-8');
echo $s->render();
