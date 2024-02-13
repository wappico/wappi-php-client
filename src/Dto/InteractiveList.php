<?php

namespace Wappi\Client\Dto;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class InteractiveList
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public static MessageType $messageType = MessageType::INTERACTIVE_LIST;
    public readonly string|int $id;
    public readonly string|int|null $title;
    public readonly string|int|null $text;
    public readonly string|int $buttonTitle;
    public readonly array $sections;
    public int $secondsDelay = 1;
}