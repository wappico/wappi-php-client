# Wappi - PHP SDK Client

Install
```
composer require wappico/wappi-php-client
```

You may only contact people on WhatsApp if: (a) they have given you their mobile phone number; and (b) you have received opt-in permission from the recipient confirming that they wish to receive subsequent messages from you on WhatsApp
* The opt-in must (a) clearly state that the person is opting in to receive messages from you over WhatsApp and (b) clearly state your business' name.
* You are solely responsible for determining the method of opt-in, that you have obtained opt-in in a manner that complies with laws applicable to your communications, and that you have otherwise provided notices and obtained permissions that are required under applicable law.
* To help ensure a strong user experience, review the best practices suggested below. https://business.whatsapp.com/policy#best_practices_for_optin

```php
$whatsapp = new \Wappi\Client\Strategies\Whatsapp(apiKey: '')

$whatsapp->phoneNumber("521782003377")->markAsOptIn();
```

Send messages to one phone number

```php
$whatsapp = new \Wappi\Client\Strategies\Whatsapp(apiKey: '')

$whatsapp->phoneNumber("521782003377");

$whatsapp->request([
    \Wappi\Client\Message\Message::create(["text" => "¡Hi there!"]),
    \Wappi\Client\Message\Image::create(["url" => "https://wappi.co/image.png", "text" => "¡Hi there!"]),
]);
```