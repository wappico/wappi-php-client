<?php

namespace Wappi\Client\Message;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class Contact
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    const MESSAGE_TYPE = MessageType::CONTACT;

    public int $secondsDelay = 1;
}