<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace MediaCloud\Vendor\Google\Cloud\Vision\V1;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBType;
use MediaCloud\Vendor\Google\Protobuf\Internal\RepeatedField;
use MediaCloud\Vendor\Google\Protobuf\Internal\GPBUtil;

/**
 * The input content for the `ImportProductSets` method.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.ImportProductSetsInputConfig</code>
 */
class ImportProductSetsInputConfig extends \MediaCloud\Vendor\Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \MediaCloud\Vendor\Google\Cloud\Vision\V1\ImportProductSetsGcsSource $gcs_source
     *           The Google Cloud Storage location for a csv file which preserves a list
     *           of ImportProductSetRequests in each line.
     * }
     */
    public function __construct($data = NULL) { \MediaCloud\Vendor\GPBMetadata\Google\Cloud\Vision\V1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The Google Cloud Storage location for a csv file which preserves a list
     * of ImportProductSetRequests in each line.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImportProductSetsGcsSource gcs_source = 1;</code>
     * @return \MediaCloud\Vendor\Google\Cloud\Vision\V1\ImportProductSetsGcsSource|null
     */
    public function getGcsSource()
    {
        return $this->readOneof(1);
    }

    public function hasGcsSource()
    {
        return $this->hasOneof(1);
    }

    /**
     * The Google Cloud Storage location for a csv file which preserves a list
     * of ImportProductSetRequests in each line.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImportProductSetsGcsSource gcs_source = 1;</code>
     * @param \MediaCloud\Vendor\Google\Cloud\Vision\V1\ImportProductSetsGcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \MediaCloud\Vendor\Google\Cloud\Vision\V1\ImportProductSetsGcsSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

