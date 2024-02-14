<?php

namespace Wappi\Client\Message;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class InteractiveImage
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public static MessageType $messageType = MessageType::INTERACTIVE_IMAGE;
    public string|int $id;
    public string $url;
    public string|int $text;
    public null|string|int $footer;
    public int $secondsDelay = 1;
}