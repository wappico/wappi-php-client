<?php

namespace Wappi\Client\Message;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class InteractiveText
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_TEXT;

    public string|int $id;
    public null|string|int $header;
    public string|int $text;
    public null|string|int $footer;
    public array $options;
    public int $secondsDelay = 1;
}