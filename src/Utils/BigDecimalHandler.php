<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace novu\Utils;

use Speakeasy\Serializer\Context;
use Speakeasy\Serializer\GraphNavigator;
use Speakeasy\Serializer\Handler\SubscribingHandlerInterface;
use Speakeasy\Serializer\JsonDeserializationVisitor;
use Speakeasy\Serializer\JsonSerializationVisitor;

class BigDecimalHandler implements SubscribingHandlerInterface
{
    /** @phpstan-ignore-next-line */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => '\\Brick\\Math\\BigDecimal',
                'method' => 'serialize',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => '\\Brick\\Math\\BigDecimal',
                'method' => 'deserialize',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'Brick\\Math\\BigDecimal',
                'method' => 'serialize',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'Brick\\Math\\BigDecimal',
                'method' => 'deserialize',
            ],
        ];
    }

    /** @phpstan-ignore-next-line */
    public function serialize(JsonSerializationVisitor $visitor, \Brick\Math\BigDecimal|string $any, array $type, Context $context): string|float
    {
        if (gettype($any) == 'string') {
            return $any;
        }

        return (float) $any->__toString();
    }

    /** @phpstan-ignore-next-line */
    public function deserialize(JsonDeserializationVisitor $visitor, string|float $data, array $type, Context $context): mixed
    {
        return \Brick\Math\BigDecimal::of($data);
    }
}
