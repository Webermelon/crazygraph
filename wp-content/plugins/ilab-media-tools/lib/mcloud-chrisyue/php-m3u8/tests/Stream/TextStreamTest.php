<?php

/*
 * This file is part of the PhpM3u8 package.
 *
 * (c) Chrisyue <https://chrisyue.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MediaCloud\Vendor\Chrisyue\PhpM3u8\Test\Stream;
use MediaCloud\Vendor\Chrisyue\PhpM3u8\Stream\TextStream;
use PHPUnit\Framework\TestCase;

class TextStreamTest extends TestCase
{
    public function testToString()
    {
        $text = "first\nsecond";
        $this->assertSame($text."\n", (string) new TextStream($text));

        $text = "first\nsecond\n";
        $this->assertSame($text, (string) new TextStream($text));
    }
}
