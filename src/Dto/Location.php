<?php

namespace Wappi\Client\Dto;

use Wappi\Client\Enums\MessageType;
use Wappi\Client\Traits\StaticCreateSelf;
use Wappi\Client\Traits\ToArray;
use Wappi\Client\Traits\Validate;

class Location
{
    use StaticCreateSelf;
    use ToArray;
    use Validate;

    public static MessageType $messageType = MessageType::LOCATION;
    public readonly float|string $longitude;
    public readonly float|string $latitude;
    public readonly string $name;
    public readonly string $address;
    public int $secondsDelay = 1;
}