<?php

namespace MediaCloud\Vendor\Aws\IoTSiteWise;
use MediaCloud\Vendor\Aws\AwsClient;

/**
 * This client is used to interact with the **AWS IoT SiteWise** service.
 * @method \MediaCloud\Vendor\Aws\Result associateAssets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateAssetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result associateTimeSeriesToAssetProperty(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise associateTimeSeriesToAssetPropertyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchAssociateProjectAssets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchAssociateProjectAssetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchDisassociateProjectAssets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchDisassociateProjectAssetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result batchPutAssetPropertyValue(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise batchPutAssetPropertyValueAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAccessPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAccessPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAsset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAssetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createAssetModel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createAssetModelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createDashboard(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createDashboardAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createGateway(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createGatewayAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createPortal(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createPortalAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result createProject(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise createProjectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAccessPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAccessPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAsset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAssetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteAssetModel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteAssetModelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteDashboard(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteDashboardAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteGateway(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteGatewayAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deletePortal(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deletePortalAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteProject(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteProjectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result deleteTimeSeries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise deleteTimeSeriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAccessPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAccessPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAsset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAssetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAssetModel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAssetModelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeAssetProperty(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeAssetPropertyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDashboard(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDashboardAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeDefaultEncryptionConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeDefaultEncryptionConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeGateway(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeGatewayAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeGatewayCapabilityConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeGatewayCapabilityConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeLoggingOptions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeLoggingOptionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describePortal(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describePortalAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeProject(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeProjectAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeStorageConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeStorageConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result describeTimeSeries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise describeTimeSeriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateAssets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateAssetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result disassociateTimeSeriesFromAssetProperty(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise disassociateTimeSeriesFromAssetPropertyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAssetPropertyAggregates(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAssetPropertyAggregatesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAssetPropertyValue(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAssetPropertyValueAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getAssetPropertyValueHistory(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getAssetPropertyValueHistoryAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result getInterpolatedAssetPropertyValues(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise getInterpolatedAssetPropertyValuesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAccessPolicies(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAccessPoliciesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAssetModels(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAssetModelsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAssetRelationships(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAssetRelationshipsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAssets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAssetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listAssociatedAssets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listAssociatedAssetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listDashboards(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listDashboardsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listGateways(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listGatewaysAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listPortals(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listPortalsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listProjectAssets(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listProjectAssetsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listProjects(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listProjectsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTagsForResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result listTimeSeries(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise listTimeSeriesAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putDefaultEncryptionConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putDefaultEncryptionConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putLoggingOptions(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putLoggingOptionsAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result putStorageConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise putStorageConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result tagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result untagResource(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAccessPolicy(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAccessPolicyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAsset(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAssetAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAssetModel(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAssetModelAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateAssetProperty(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateAssetPropertyAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateDashboard(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateDashboardAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateGateway(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateGatewayAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateGatewayCapabilityConfiguration(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateGatewayCapabilityConfigurationAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updatePortal(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updatePortalAsync(array $args = [])
 * @method \MediaCloud\Vendor\Aws\Result updateProject(array $args = [])
 * @method \MediaCloud\Vendor\GuzzleHttp\Promise\Promise updateProjectAsync(array $args = [])
 */
class IoTSiteWiseClient extends AwsClient {}
