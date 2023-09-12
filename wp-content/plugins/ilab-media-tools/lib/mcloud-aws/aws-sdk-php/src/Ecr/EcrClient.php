<?php

namespace MediaCloud\Vendor\Aws\Ecr;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon EC2 Container Registry** service.
 *
 * @method \MediaCloud\Vendor\Aws\Result batchCheckLayerAvailability(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchCheckLayerAvailabilityAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchDeleteImage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDeleteImageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetImage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetImageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchGetRepositoryScanningConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchGetRepositoryScanningConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result completeLayerUpload(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise completeLayerUploadAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPullThroughCacheRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPullThroughCacheRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createRepository(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createRepositoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteLifecyclePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteLifecyclePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePullThroughCacheRule(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePullThroughCacheRuleAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRegistryPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRegistryPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRepository(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRepositoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteRepositoryPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteRepositoryPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeImageReplicationStatus(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeImageReplicationStatusAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeImageScanFindings(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeImageScanFindingsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeImages(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describePullThroughCacheRules(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describePullThroughCacheRulesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRegistry(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRegistryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeRepositories(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeRepositoriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAuthorizationToken(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAuthorizationTokenAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getDownloadUrlForLayer(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getDownloadUrlForLayerAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLifecyclePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLifecyclePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getLifecyclePolicyPreview(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getLifecyclePolicyPreviewAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRegistryPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRegistryPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRegistryScanningConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRegistryScanningConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getRepositoryPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getRepositoryPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result initiateLayerUpload(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise initiateLayerUploadAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listImages(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listImagesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putImage(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putImageAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putImageScanningConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putImageScanningConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putImageTagMutability(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putImageTagMutabilityAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putLifecyclePolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putLifecyclePolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putRegistryPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putRegistryPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putRegistryScanningConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putRegistryScanningConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putReplicationConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putReplicationConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result setRepositoryPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise setRepositoryPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startImageScan(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startImageScanAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result startLifecyclePolicyPreview(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise startLifecyclePolicyPreviewAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result uploadLayerPart(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise uploadLayerPartAsync(array $args = [])
 */
class EcrClient extends AwsClient {}