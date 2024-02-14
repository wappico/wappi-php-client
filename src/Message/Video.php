<?php

namespace Wappi\Client\Message;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class Video
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public static MessageType $messageType = MessageType::VIDEO;
    public string $url;
    public null|string|int $text;
    public int $secondsDelay = 1;
}