<?php

/*
 * This file is part of the PhpM3u8 package.
 *
 * (c) Chrisyue <https://chrisyue.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use MediaCloud\Vendor\Chrisyue\PhpM3u8\Config;
use MediaCloud\Vendor\Chrisyue\PhpM3u8\Data\Transformer\Iso8601Transformer;
use MediaCloud\Vendor\Chrisyue\PhpM3u8\Dumper\AttributeListDumper;

$attributeListDumper = new AttributeListDumper(
    new Config(require __DIR__.'/attributeValueDumpers.php')
);

return [
    'int' => 'strval',
    'bool' => null,
    'enum' => null,
    'attribute-list' => [$attributeListDumper, 'dump'],
    // special types
    'inf' => 'strval', // MediaCloud\Vendor\Chrisyue\PhpM3u8\Value\Inf is __toString able
    'byterange' => 'strval', // MediaCloud\Vendor\Chrisyue\PhpM3u8\Value\Byterange is __toString able
    'datetime' => [Iso8601Transformer::class, 'toString'],
];
