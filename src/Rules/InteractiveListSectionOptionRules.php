<?php

namespace App\Sdk\Rules;

class InteractiveListSectionOptionRules
{
    const RULES = [
        'id' => ['required', 'cast:string', 'min:1', 'max:24'],
        'title' => ['required', 'cast:string', 'min:1', 'max:24'],
        'description' => ['optional', 'cast:string', 'min:1', 'max:72'],
    ];
}