<?php

namespace Wappi\Client\Message;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class Document
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public static MessageType $messageType = MessageType::DOCUMENT;
    public string $url;
    public string $filename;
    public int $secondsDelay = 1;
}