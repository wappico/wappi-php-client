# Wappi - PHP SDK Client

Install
```
composer require wappico/wappi-php-client
```

Usage:

```php
use Wappi\Client\Wappi;


$wappi = new Wappi(
    new \Wappi\Client\Strategies\Whatsapp(apiKey: '')
);

$wappi->add(
    \Wappi\Client\Message\Message::create(["text" => "¡Hi there!"])
);

$wappi->addMany(
    \Wappi\Client\Message\Message::create(["text" => "¡Hi there!"]),
    \Wappi\Client\Message\Image::create(["url" => "https://wappi.co/image.png", "text" => "¡Hi there!"]),
);

$wappi->send();
```

Or you can use the strategy:

```php

$whatsapp = new \Wappi\Client\Strategies\Whatsapp(apiKey: '')

$whatsapp->request([
    \Wappi\Client\Message\Message::create(["text" => "¡Hi there!"]),
    \Wappi\Client\Message\Image::create(["url" => "https://wappi.co/image.png", "text" => "¡Hi there!"]),
]);
```