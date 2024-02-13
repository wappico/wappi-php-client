<?php

declare(strict_types=1);

namespace Wappi\Client\Traits;

trait StaticCreateSelf
{
    public static function create(array $values): self
    {
        $dto = new self();

        foreach ($values as $key => $value) {
            if (property_exists($dto, $key)) {
                $dto->$key = $value;
            }
        }

        return $dto;
    }

    public static function add(array $values): self
    {
        return self::create($values);
    }

    public static function getMessageType()
    {
        return self::$messageType;
    }
}
