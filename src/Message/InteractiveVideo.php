<?php

namespace Wappi\Client\Message;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class InteractiveVideo
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::INTERACTIVE_VIDEO;

    public string|int $id;
    public string $url;
    public string|int $text;
    public null|string|int $footer;
    public array $options;
    public int $secondsDelay = 1;
}