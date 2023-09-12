<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/distribution.proto

namespace MediaCloud\Vendor\Google\Api\Distribution\BucketOptions;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies a set of buckets with arbitrary widths.
 * There are `size(bounds) + 1` (= N) buckets. Bucket `i` has the following
 * boundaries:
 *    Upper bound (0 <= i < N-1):     bounds[i]
 *    Lower bound (1 <= i < N);       bounds[i - 1]
 * The `bounds` field must contain at least one element. If `bounds` has
 * only one element, then there are no finite buckets, and that single
 * element is the common boundary of the overflow and underflow buckets.
 *
 * Generated from protobuf message <code>google.api.Distribution.BucketOptions.Explicit</code>
 */
class Explicit extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    /**
     * The values must be monotonically increasing.
     *
     * Generated from protobuf field <code>repeated double bounds = 1;</code>
     */
    private $bounds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float[]|\Google\Protobuf\Internal\RepeatedField $bounds
     *           The values must be monotonically increasing.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Api\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * The values must be monotonically increasing.
     *
     * Generated from protobuf field <code>repeated double bounds = 1;</code>
     * @return \MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField
     */
    public function getBounds()
    {
        return $this->bounds;
    }

    /**
     * The values must be monotonically increasing.
     *
     * Generated from protobuf field <code>repeated double bounds = 1;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBounds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \MediaCloud\Vendor\Google\Protobuf\Internal\GPBType::DOUBLE);
        $this->bounds = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Explicit::class, \MediaCloud\Vendor\Google\Api\Distribution_BucketOptions_Explicit::class);

