# Wappi - PHP SDK Client

Install
```
composer require wappico/wappi-php-client
```

Usage:
```php
$wappi = new \Wappi\Client\WappiClient(apiKey: 'your-api-key');

$wappi->add(
    \Wappi\Client\Dto\Message::create(["text" => "¡Hi there!"])
);

$wappi->addMany(
    \Wappi\Client\Dto\Message::create(["text" => "¡Hi there!"]),
    \Wappi\Client\Dto\Image::create(["url" => "https://wappi.co/image.png", "text" => "¡Hi there!"]),
);

$wappi->send();
```