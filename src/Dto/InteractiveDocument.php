<?php

namespace Wappi\Client\Dto;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class InteractiveDocument
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public static MessageType $messageType = MessageType::INTERACTIVE_DOCUMENT;
    public readonly string|int $id;
    public readonly string $url;
    public readonly string|int $text;
    public readonly string|int $filename;
    public readonly null|string|int $footer;
    public int $secondsDelay = 1;
}