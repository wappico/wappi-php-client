<?php

namespace Wappi\Client\Dto;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class InteractiveVideo
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public static MessageType $messageType = MessageType::INTERACTIVE_VIDEO;
    public readonly string|int $id;
    public readonly string $url;
    public readonly string|int $text;
    public readonly null|string|int $footer;
    public int $secondsDelay = 1;
}