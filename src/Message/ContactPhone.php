<?php

namespace Wappi\Client\Message;

use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;

class ContactPhone
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $phone;
    public string|null $type;
}