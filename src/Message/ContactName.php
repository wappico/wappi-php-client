<?php

namespace Wappi\Client\Message;

use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;

class ContactName
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $firstName;
    public string|null $formattedName;
    public string|null $lastName;
}