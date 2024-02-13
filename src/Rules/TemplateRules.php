<?php

namespace App\Sdk\Rules;

use App\Sdk\Enums\MessageType;
use App\Sdk\Traits\StaticCreateSelf;
use App\Sdk\Traits\ToArray;

class TemplateRules
{
    use StaticCreateSelf;
    use ToArray;

    public static MessageType $messageType = MessageType::TEMPLATE;
}