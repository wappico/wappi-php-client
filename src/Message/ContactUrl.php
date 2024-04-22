<?php

namespace Wappi\Client\Message;

use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;

class ContactUrl
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $url;
    public string|null $type;
}