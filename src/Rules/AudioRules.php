<?php

namespace App\Sdk\Rules;

use App\Sdk\Enums\MessageType;

class AudioRules
{
    // Only opus codecs, base audio/ogg is not supported
    // Size Limit: 16MB
    const RULES = [
        'url' => ['required', 'cast:url', 'fileType:mp3,aac,mpeg,ogg,amr']
    ];
}