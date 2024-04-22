<?php

namespace Wappi\Client\Message;

use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;

class ContactOrg
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $company;
}