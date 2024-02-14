<?php

namespace Wappi\Client\Message;

use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class ContactAddress
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public int $secondsDelay = 1;
}