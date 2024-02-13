<?php

namespace Wappi\Client\Dto;

use App\Sdk\Traits\StaticCreateSelf;
use App\Sdk\Traits\ToArray;
use App\Sdk\Traits\Validate;

class ContactAddress
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public int $secondsDelay = 1;
}