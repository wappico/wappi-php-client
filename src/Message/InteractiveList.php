<?php

namespace Wappi\Client\Message;

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
    public string|int $id;
    public string|int|null $title;
    public string|int|null $text;
    public string|int $buttonTitle;
    public array $sections;
    public int $secondsDelay = 1;
}