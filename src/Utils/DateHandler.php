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

class DateHandler implements SubscribingHandlerInterface
{
    /** @phpstan-ignore-next-line */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => '\\Brick\\DateTime\\LocalDate',
                'method' => 'serializeDateTimeToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => '\\Brick\\DateTime\\LocalDate',
                'method' => 'deserializeDateTimeToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'Brick\\DateTime\\LocalDate',
                'method' => 'serializeDateTimeToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'Brick\\DateTime\\LocalDate',
                'method' => 'deserializeDateTimeToJson',
            ],
        ];
    }

    /** @phpstan-ignore-next-line */
    public function serializeDateTimeToJson(JsonSerializationVisitor $visitor, \Brick\DateTime\LocalDate $any, array $type, Context $context): string
    {
        return $any->jsonSerialize();
    }

    /** @phpstan-ignore-next-line */
    public function deserializeDateTimeToJson(JsonDeserializationVisitor $visitor, string $data, array $type, Context $context): mixed
    {
        return \Brick\DateTime\LocalDate::parse($data);
    }
}
