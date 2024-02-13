<?php

namespace Wappi\Client\Dto;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class InteractiveText
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public static MessageType $messageType = MessageType::INTERACTIVE_TEXT;
    public readonly string|int $id;
    public readonly null|string|int $header;
    public readonly string|int $text;
    public readonly null|string|int $footer;
    public int $secondsDelay = 1;
}