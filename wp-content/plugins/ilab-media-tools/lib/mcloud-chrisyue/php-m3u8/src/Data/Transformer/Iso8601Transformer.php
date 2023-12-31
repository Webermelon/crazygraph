<?php

/*
 * This file is part of the PhpM3u8 package.
 *
 * (c) Chrisyue <https://chrisyue.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MediaCloud\Vendor\Chrisyue\PhpM3u8\Data\Transformer;

class Iso8601Transformer
{
    public static function fromString($string)
    {
        return new \DateTime($string);
    }

    public static function toString(\DateTime $datetime)
    {
        $timezone = $datetime->format('P');

        return sprintf('%s%s', substr($datetime->format('Y-m-d\TH:i:s.u'), 0, -3), $timezone);
    }
}
