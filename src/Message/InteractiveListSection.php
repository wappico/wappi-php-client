<?php

namespace Wappi\Client\Message;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class InteractiveListSection
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public static MessageType $messageType = MessageType::INTERACTIVE_LIST_SECTION;
    public null|string|int $title;
    public null|string|int $description;
    public array $options;
}