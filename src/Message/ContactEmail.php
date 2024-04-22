<?php

namespace Wappi\Client\Message;

use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;

class ContactEmail
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $email;
    public string|null $type;
}