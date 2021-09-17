# Генератор sitemap

Примера кода в файле examples/example.php

```php
// Создаём объект, по умолчанию будет выбрано weekly, 0.5
$s = new \Ichinya\SitemapGenerator\Sitemap();

// можно поменять при создании
$s = new \Ichinya\SitemapGenerator\Sitemap('daily', 0.3);

// добавляем нужные ссылки
// 4 параметра:
// ссылка на страницу,
// время в timestamp,
// период обновления (always, hourly, daily, weekly, monthly, yearly, never)
// приоритет от 0.0 до 1.0, по умолчанию 0.5
$s->addUrl('https://site.ru/', time());
$s->addUrl('https://site.ru/about', strtotime('2021-09-30'), 'monthly', 0.3);

// Вывод с генерацией формата xml
$s->render(true);
// OR получаем ленту и сами выводим
header('Content-Type: application/xml; charset=utf-8');
echo $s->render();
```
