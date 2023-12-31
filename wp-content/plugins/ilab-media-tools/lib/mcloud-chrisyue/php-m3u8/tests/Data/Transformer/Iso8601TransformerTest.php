<?php

/*
 * This file is part of the PhpM3u8 package.
 *
 * (c) Chrisyue <https://chrisyue.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MediaCloud\Vendor\Chrisyue\PhpM3u8\Test\Data\Transformer;
use MediaCloud\Vendor\Chrisyue\PhpM3u8\Data\Transformer\Iso8601Transformer;
use PHPUnit\Framework\TestCase;

class Iso8601TransformerTest extends TestCase
{
    public function testFromString()
    {
        $string = '2018-01-01T01:02:03.002+08:00';

        $this->assertEquals(new \DateTime($string), Iso8601Transformer::fromString($string));
    }

    public function testToString()
    {
        $string = '2018-01-01T01:02:03.002+08:00';
        $datetime = new \DateTime($string);

        $this->assertEquals($string, Iso8601Transformer::toString($datetime));
    }
}
