<?php

declare(strict_types=1);

namespace Wappi\Client\Traits;

trait StaticCreateSelf
{
    public function __set(string $name, mixed $value): void {
        $this->{$name} = $value;
    }
    
    public static function create(array $values): self
    {
        $dto = new self();

        if (defined('self::MESSAGE_TYPE')) {
            $dto->messageType = self::MESSAGE_TYPE;
        }

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
        return self::MESSAGE_TYPE;
    }
}
