<?php

namespace Wappi\Client\Message;

use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;

class ContactAddress
{
    use StaticCreateSelf;
    use ToArray;

    public string|null $city;
    public string|null $country;
    public string|null $countryCode;
    public string|null $state;
    public string|null $street;
    public string|null $type;
    public string|null $zip;
}