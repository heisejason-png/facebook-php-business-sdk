<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\BusinessFields;
use FacebookAds\Object\Values\AdNetworkAnalyticsSyncQueryResultAggregationPeriodValues;
use FacebookAds\Object\Values\AdNetworkAnalyticsSyncQueryResultBreakdownsValues;
use FacebookAds\Object\Values\AdNetworkAnalyticsSyncQueryResultMetricsValues;
use FacebookAds\Object\Values\AdNetworkAnalyticsSyncQueryResultOrderingColumnValues;
use FacebookAds\Object\Values\AdNetworkAnalyticsSyncQueryResultOrderingTypeValues;
use FacebookAds\Object\Values\AdStudyTypeValues;
use FacebookAds\Object\Values\AdVideoContainerTypeValues;
use FacebookAds\Object\Values\AdVideoContentCategoryValues;
use FacebookAds\Object\Values\AdVideoFormattingValues;
use FacebookAds\Object\Values\AdVideoOriginalProjectionTypeValues;
use FacebookAds\Object\Values\AdVideoSwapModeValues;
use FacebookAds\Object\Values\AdVideoUnpublishedContentTypeValues;
use FacebookAds\Object\Values\AdVideoUploadPhaseValues;
use FacebookAds\Object\Values\AdVideoValidationAdPlacementsValues;
use FacebookAds\Object\Values\AdsDatasetSortByValues;
use FacebookAds\Object\Values\AdsPixelSortByValues;
use FacebookAds\Object\Values\BusinessActionSourceValues;
use FacebookAds\Object\Values\BusinessAssetSharingAgreementRequestStatusValues;
use FacebookAds\Object\Values\BusinessBusinessVerticalValues;
use FacebookAds\Object\Values\BusinessImageValidationAdPlacementsValues;
use FacebookAds\Object\Values\BusinessPagePermittedTasksValues;
use FacebookAds\Object\Values\BusinessPermittedTasksValues;
use FacebookAds\Object\Values\BusinessSubverticalV2Values;
use FacebookAds\Object\Values\BusinessSurveyBusinessTypeValues;
use FacebookAds\Object\Values\BusinessTimezoneIdValues;
use FacebookAds\Object\Values\BusinessTwoFactorTypeValues;
use FacebookAds\Object\Values\BusinessUserInvitedUserTypeValues;
use FacebookAds\Object\Values\BusinessUserRoleValues;
use FacebookAds\Object\Values\BusinessUserTasksValues;
use FacebookAds\Object\Values\BusinessVerificationStatusValues;
use FacebookAds\Object\Values\BusinessVerticalV2Values;
use FacebookAds\Object\Values\BusinessVerticalValues;
use FacebookAds\Object\Values\CPASCollaborationRequestRequesterAgencyOrBrandValues;
use FacebookAds\Object\Values\CustomConversionActionSourceTypeValues;
use FacebookAds\Object\Values\CustomConversionCustomEventTypeValues;
use FacebookAds\Object\Values\ManagedPartnerBusinessPartitionTypeValues;
use FacebookAds\Object\Values\ManagedPartnerBusinessSurveyBusinessTypeValues;
use FacebookAds\Object\Values\ManagedPartnerBusinessTimezoneIdValues;
use FacebookAds\Object\Values\ManagedPartnerBusinessVerticalValues;
use FacebookAds\Object\Values\OmegaCustomerTrxTypeValues;
use FacebookAds\Object\Values\ProductCatalogAdditionalVerticalOptionValues;
use FacebookAds\Object\Values\ProductCatalogVerticalValues;
use FacebookAds\Object\Values\ProfilePictureSourceTypeValues;
use FacebookAds\Object\Values\SystemUserRoleValues;
use FacebookAds\Object\Values\WhatsAppBusinessPreVerifiedPhoneNumberCodeVerificationStatusValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Business extends AbstractCrudObject {

  /**
   * @return BusinessFields
   */
  public static function getFieldsEnum() {
    return BusinessFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['VerificationStatus'] = BusinessVerificationStatusValues::getInstance()->getValues();
    $ref_enums['TwoFactorType'] = BusinessTwoFactorTypeValues::getInstance()->getValues();
    $ref_enums['Vertical'] = BusinessVerticalValues::getInstance()->getValues();
    $ref_enums['PermittedTasks'] = BusinessPermittedTasksValues::getInstance()->getValues();
    $ref_enums['SurveyBusinessType'] = BusinessSurveyBusinessTypeValues::getInstance()->getValues();
    $ref_enums['TimezoneId'] = BusinessTimezoneIdValues::getInstance()->getValues();
    $ref_enums['PagePermittedTasks'] = BusinessPagePermittedTasksValues::getInstance()->getValues();
    $ref_enums['BusinessVertical'] = BusinessBusinessVerticalValues::getInstance()->getValues();
    $ref_enums['SubverticalV2'] = BusinessSubverticalV2Values::getInstance()->getValues();
    $ref_enums['VerticalV2'] = BusinessVerticalV2Values::getInstance()->getValues();
    $ref_enums['ActionSource'] = BusinessActionSourceValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function createAccessToken(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id' => 'string',
      'fbe_external_business_id' => 'string',
      'scope' => 'list<Permission>',
      'system_user_name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/access_token',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdAccountInfos(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account_id' => 'string',
      'parent_advertiser_id' => 'string',
      'user_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ad_account_infos',
      new ALMAdAccountInfo(),
      'EDGE',
      ALMAdAccountInfo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adaccount_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/ad_accounts',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdReviewRequest(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account_ids' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/ad_review_requests',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdStudies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ad_studies',
      new AdStudy(),
      'EDGE',
      AdStudy::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdStudy(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'cells' => 'list<Object>',
      'client_business' => 'string',
      'confidence_level' => 'float',
      'cooldown_start_time' => 'int',
      'description' => 'string',
      'end_time' => 'int',
      'name' => 'string',
      'objectives' => 'list<Object>',
      'observation_end_time' => 'int',
      'start_time' => 'int',
      'type' => 'type_enum',
      'viewers' => 'list<int>',
    );
    $enums = array(
      'type_enum' => AdStudyTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/ad_studies',
      new AdStudy(),
      'EDGE',
      AdStudy::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account_created_from_bm_flag' => 'bool',
      'currency' => 'string',
      'end_advertiser' => 'Object',
      'funding_id' => 'string',
      'invoice' => 'bool',
      'invoice_group_id' => 'string',
      'invoicing_emails' => 'list<string>',
      'io' => 'bool',
      'media_agency' => 'string',
      'name' => 'string',
      'partner' => 'string',
      'po_number' => 'string',
      'timezone_id' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adaccount',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAddPhoneNumber(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'phone_number' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/add_phone_numbers',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdNetworkApplication(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adnetwork_applications',
      new Application(),
      'EDGE',
      Application::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdNetworkAnalytics(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'aggregation_period' => 'aggregation_period_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'filters' => 'list<map>',
      'limit' => 'unsigned int',
      'metrics' => 'list<metrics_enum>',
      'ordering_column' => 'ordering_column_enum',
      'ordering_type' => 'ordering_type_enum',
      'should_include_until' => 'bool',
      'since' => 'datetime',
      'until' => 'datetime',
    );
    $enums = array(
      'aggregation_period_enum' => AdNetworkAnalyticsSyncQueryResultAggregationPeriodValues::getInstance()->getValues(),
      'breakdowns_enum' => AdNetworkAnalyticsSyncQueryResultBreakdownsValues::getInstance()->getValues(),
      'metrics_enum' => AdNetworkAnalyticsSyncQueryResultMetricsValues::getInstance()->getValues(),
      'ordering_column_enum' => AdNetworkAnalyticsSyncQueryResultOrderingColumnValues::getInstance()->getValues(),
      'ordering_type_enum' => AdNetworkAnalyticsSyncQueryResultOrderingTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adnetworkanalytics',
      new AdNetworkAnalyticsSyncQueryResult(),
      'EDGE',
      AdNetworkAnalyticsSyncQueryResult::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdNetworkAnalytic(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'aggregation_period' => 'aggregation_period_enum',
      'breakdowns' => 'list<breakdowns_enum>',
      'filters' => 'list<Object>',
      'limit' => 'int',
      'metrics' => 'list<metrics_enum>',
      'ordering_column' => 'ordering_column_enum',
      'ordering_type' => 'ordering_type_enum',
      'since' => 'datetime',
      'until' => 'datetime',
    );
    $enums = array(
      'aggregation_period_enum' => AdNetworkAnalyticsSyncQueryResultAggregationPeriodValues::getInstance()->getValues(),
      'breakdowns_enum' => AdNetworkAnalyticsSyncQueryResultBreakdownsValues::getInstance()->getValues(),
      'metrics_enum' => AdNetworkAnalyticsSyncQueryResultMetricsValues::getInstance()->getValues(),
      'ordering_column_enum' => AdNetworkAnalyticsSyncQueryResultOrderingColumnValues::getInstance()->getValues(),
      'ordering_type_enum' => AdNetworkAnalyticsSyncQueryResultOrderingTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adnetworkanalytics',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdNetworkAnalyticsResults(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'query_ids' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adnetworkanalytics_results',
      new AdNetworkAnalyticsAsyncQueryResult(),
      'EDGE',
      AdNetworkAnalyticsAsyncQueryResult::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdsDataset(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'id_filter' => 'string',
      'name_filter' => 'string',
      'sort_by' => 'sort_by_enum',
    );
    $enums = array(
      'sort_by_enum' => AdsDatasetSortByValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ads_dataset',
      new AdsDataset(),
      'EDGE',
      AdsDataset::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdsDataSet(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account_id' => 'string',
      'app_id' => 'string',
      'is_crm' => 'bool',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/ads_dataset',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdsReportingMmmReports(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filtering' => 'list<map>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ads_reporting_mmm_reports',
      new AdsReportBuilderMMMReport(),
      'EDGE',
      AdsReportBuilderMMMReport::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdsReportingMmmSchedulers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/ads_reporting_mmm_schedulers',
      new AdsReportBuilderMMMReportScheduler(),
      'EDGE',
      AdsReportBuilderMMMReportScheduler::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAdsPixels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'id_filter' => 'string',
      'name_filter' => 'string',
      'sort_by' => 'sort_by_enum',
    );
    $enums = array(
      'sort_by_enum' => AdsPixelSortByValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/adspixels',
      new AdsPixel(),
      'EDGE',
      AdsPixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createAdsPixel(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'is_crm' => 'bool',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/adspixels',
      new AdsPixel(),
      'EDGE',
      AdsPixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/agencies',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAgencies(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/agencies',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getAnPlacements(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/an_placements',
      new AdPlacement(),
      'EDGE',
      AdPlacement::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBlockListDraft(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'publisher_urls_file' => 'file',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/block_list_drafts',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBmReviewRequest(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business_manager_ids' => 'list<string>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/bm_review_requests',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinessAssetGroups(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/business_asset_groups',
      new BusinessAssetGroup(),
      'EDGE',
      BusinessAssetGroup::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinessInvoices(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'end_date' => 'string',
      'invoice_id' => 'string',
      'issue_end_date' => 'string',
      'issue_start_date' => 'string',
      'root_id' => 'unsigned int',
      'start_date' => 'string',
      'type' => 'type_enum',
    );
    $enums = array(
      'type_enum' => OmegaCustomerTrxTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/business_invoices',
      new OmegaCustomerTrx(),
      'EDGE',
      OmegaCustomerTrx::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinessUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/business_users',
      new BusinessUser(),
      'EDGE',
      BusinessUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createBusinessUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'email' => 'string',
      'invited_user_type' => 'list<invited_user_type_enum>',
      'role' => 'role_enum',
      'tasks' => 'list<tasks_enum>',
    );
    $enums = array(
      'invited_user_type_enum' => BusinessUserInvitedUserTypeValues::getInstance()->getValues(),
      'role_enum' => BusinessUserRoleValues::getInstance()->getValues(),
      'tasks_enum' => BusinessUserTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/business_users',
      new BusinessUser(),
      'EDGE',
      BusinessUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getBusinessProjects(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/businessprojects',
      new BusinessProject(),
      'EDGE',
      BusinessProject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createClaimCustomConversion(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'custom_conversion_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/claim_custom_conversions',
      new CustomConversion(),
      'EDGE',
      CustomConversion::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getClientAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'search_query' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/client_ad_accounts',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getClientApps(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/client_apps',
      new Application(),
      'EDGE',
      Application::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createClientApp(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/client_apps',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getClientOffsiteSignalContainerBusinessObjects(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/client_offsite_signal_container_business_objects',
      new OffsiteSignalContainerBusinessObject(),
      'EDGE',
      OffsiteSignalContainerBusinessObject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getClientPages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/client_pages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createClientPage(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'page_id' => 'int',
      'permitted_tasks' => 'list<permitted_tasks_enum>',
    );
    $enums = array(
      'permitted_tasks_enum' => BusinessPermittedTasksValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/client_pages',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getClientPixels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/client_pixels',
      new AdsPixel(),
      'EDGE',
      AdsPixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getClientProductCatalogs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/client_product_catalogs',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getClientWhatsAppBusinessAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/client_whatsapp_business_accounts',
      new WhatsAppBusinessAccount(),
      'EDGE',
      WhatsAppBusinessAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteClients(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'business' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/clients',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getClients(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/clients',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCollaborativeAdsCollaborationRequests(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'status' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/collaborative_ads_collaboration_requests',
      new CPASCollaborationRequest(),
      'EDGE',
      CPASCollaborationRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCollaborativeAdsCollaborationRequest(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'brands' => 'list<string>',
      'contact_email' => 'string',
      'contact_first_name' => 'string',
      'contact_last_name' => 'string',
      'phone_number' => 'string',
      'receiver_business' => 'string',
      'requester_agency_or_brand' => 'requester_agency_or_brand_enum',
      'sender_client_business' => 'string',
    );
    $enums = array(
      'requester_agency_or_brand_enum' => CPASCollaborationRequestRequesterAgencyOrBrandValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/collaborative_ads_collaboration_requests',
      new CPASCollaborationRequest(),
      'EDGE',
      CPASCollaborationRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCollaborativeAdsSuggestedPartners(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/collaborative_ads_suggested_partners',
      new CPASAdvertiserPartnershipRecommendation(),
      'EDGE',
      CPASAdvertiserPartnershipRecommendation::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCommerceMerchantSettings(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/commerce_merchant_settings',
      new CommerceMerchantSettings(),
      'EDGE',
      CommerceMerchantSettings::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCpasBusinessSetupConfig(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/cpas_business_setup_config',
      new CPASBusinessSetupConfig(),
      'EDGE',
      CPASBusinessSetupConfig::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCpasBusinessSetupConfig(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'accepted_collab_ads_tos' => 'bool',
      'ad_accounts' => 'list<string>',
      'business_capabilities_status' => 'map',
      'capabilities_compliance_status' => 'map',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/cpas_business_setup_config',
      new CPASBusinessSetupConfig(),
      'EDGE',
      CPASBusinessSetupConfig::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCpasMerchantConfig(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/cpas_merchant_config',
      new CPASMerchantConfig(),
      'EDGE',
      CPASMerchantConfig::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCreativeFolder(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'description' => 'string',
      'name' => 'string',
      'parent_folder_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/creative_folders',
      new BusinessCreativeFolder(),
      'EDGE',
      BusinessCreativeFolder::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getCreditCards(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/creditcards',
      new CreditCard(),
      'EDGE',
      CreditCard::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createCustomConversion(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'action_source_type' => 'action_source_type_enum',
      'advanced_rule' => 'string',
      'custom_event_type' => 'custom_event_type_enum',
      'default_conversion_value' => 'float',
      'description' => 'string',
      'event_source_id' => 'string',
      'name' => 'string',
      'rule' => 'string',
    );
    $enums = array(
      'action_source_type_enum' => CustomConversionActionSourceTypeValues::getInstance()->getValues(),
      'custom_event_type_enum' => CustomConversionCustomEventTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/customconversions',
      new CustomConversion(),
      'EDGE',
      CustomConversion::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getEventSourceGroups(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/event_source_groups',
      new EventSourceGroup(),
      'EDGE',
      EventSourceGroup::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createEventSourceGroup(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'event_sources' => 'list<string>',
      'name' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/event_source_groups',
      new EventSourceGroup(),
      'EDGE',
      EventSourceGroup::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getExtendedCreditApplications(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'only_show_pending' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/extendedcreditapplications',
      new ExtendedCreditApplication(),
      'EDGE',
      ExtendedCreditApplication::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getExtendedCredits(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'order_by_is_owned_credential' => 'bool',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/extendedcredits',
      new ExtendedCredit(),
      'EDGE',
      ExtendedCredit::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createImage(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_placements_validation_only' => 'bool',
      'bytes' => 'string',
      'creative_folder_id' => 'string',
      'name' => 'string',
      'validation_ad_placements' => 'list<validation_ad_placements_enum>',
    );
    $enums = array(
      'validation_ad_placements_enum' => BusinessImageValidationAdPlacementsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/images',
      new BusinessImage(),
      'EDGE',
      BusinessImage::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInitiatedAudienceSharingRequests(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'recipient_id' => 'string',
      'request_status' => 'request_status_enum',
    );
    $enums = array(
      'request_status_enum' => BusinessAssetSharingAgreementRequestStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/initiated_audience_sharing_requests',
      new BusinessAssetSharingAgreement(),
      'EDGE',
      BusinessAssetSharingAgreement::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteInstagramAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'instagram_account' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/instagram_accounts',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInstagramAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/instagram_accounts',
      new IGUser(),
      'EDGE',
      IGUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getInstagramBusinessAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/instagram_business_accounts',
      new IGUser(),
      'EDGE',
      IGUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteManagedBusinesses(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'existing_client_business_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/managed_businesses',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createManagedBusiness(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'child_business_external_id' => 'string',
      'existing_client_business_id' => 'string',
      'name' => 'string',
      'sales_rep_email' => 'string',
      'survey_business_type' => 'survey_business_type_enum',
      'survey_num_assets' => 'unsigned int',
      'survey_num_people' => 'unsigned int',
      'timezone_id' => 'timezone_id_enum',
      'vertical' => 'vertical_enum',
    );
    $enums = array(
      'survey_business_type_enum' => BusinessSurveyBusinessTypeValues::getInstance()->getValues(),
      'timezone_id_enum' => BusinessTimezoneIdValues::getInstance()->getValues(),
      'vertical_enum' => BusinessVerticalValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/managed_businesses',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getManagedPartnerAdsFundingSourceDetails(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'year_quarter' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/managed_partner_ads_funding_source_details',
      new FundingSourceDetailsCoupon(),
      'EDGE',
      FundingSourceDetailsCoupon::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createManagedPartnerBusinessSetup(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'active_ad_account_id' => 'string',
      'active_page_id' => 'int',
      'partner_facebook_page_url' => 'string',
      'partner_registration_countries' => 'list<string>',
      'seller_email_address' => 'string',
      'seller_external_website_url' => 'string',
      'template' => 'list<map>',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/managed_partner_business_setup',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteManagedPartnerBusinesses(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'child_business_external_id' => 'string',
      'child_business_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/managed_partner_businesses',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createManagedPartnerBusiness(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_account_currency' => 'string',
      'catalog_id' => 'string',
      'child_business_external_id' => 'string',
      'credit_limit' => 'unsigned int',
      'line_of_credit_id' => 'string',
      'name' => 'string',
      'no_ad_account' => 'bool',
      'page_name' => 'string',
      'page_profile_image_url' => 'string',
      'partition_type' => 'partition_type_enum',
      'partner_facebook_page_url' => 'string',
      'partner_registration_countries' => 'list<string>',
      'sales_rep_email' => 'string',
      'seller_external_website_url' => 'string',
      'seller_targeting_countries' => 'list<string>',
      'skip_partner_page_creation' => 'bool',
      'survey_business_type' => 'survey_business_type_enum',
      'survey_num_assets' => 'unsigned int',
      'survey_num_people' => 'unsigned int',
      'timezone_id' => 'timezone_id_enum',
      'vertical' => 'vertical_enum',
    );
    $enums = array(
      'partition_type_enum' => ManagedPartnerBusinessPartitionTypeValues::getInstance()->getValues(),
      'survey_business_type_enum' => ManagedPartnerBusinessSurveyBusinessTypeValues::getInstance()->getValues(),
      'timezone_id_enum' => ManagedPartnerBusinessTimezoneIdValues::getInstance()->getValues(),
      'vertical_enum' => ManagedPartnerBusinessVerticalValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/managed_partner_businesses',
      new ManagedPartnerBusiness(),
      'EDGE',
      ManagedPartnerBusiness::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createOnboardPartnersToMmLite(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'solution_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/onboard_partners_to_mm_lite',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOpenBridgeConfigurations(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/openbridge_configurations',
      new OpenBridgeConfiguration(),
      'EDGE',
      OpenBridgeConfiguration::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createOpenBridgeConfiguration(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'active' => 'bool',
      'cloud_provider' => 'string',
      'cloud_region' => 'string',
      'destination_id' => 'string',
      'endpoint' => 'string',
      'fallback_domain' => 'string',
      'first_party_domain' => 'string',
      'host_business_id' => 'unsigned int',
      'instance_id' => 'string',
      'instance_version' => 'string',
      'is_sgw_instance' => 'bool',
      'is_sgw_pixel_from_meta_pixel' => 'bool',
      'partner_name' => 'string',
      'pixel_id' => 'unsigned int',
      'sgw_account_id' => 'string',
      'sgw_instance_url' => 'string',
      'sgw_pixel_id' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/openbridge_configurations',
      new OpenBridgeConfiguration(),
      'EDGE',
      OpenBridgeConfiguration::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOwnedAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'search_query' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/owned_ad_accounts',
      new AdAccount(),
      'EDGE',
      AdAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createOwnedAdAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'adaccount_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/owned_ad_accounts',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOwnedApps(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/owned_apps',
      new Application(),
      'EDGE',
      Application::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createOwnedApp(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'app_id' => 'Object',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/owned_apps',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteOwnedBusinesses(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'client_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/owned_businesses',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOwnedBusinesses(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'child_business_external_id' => 'string',
      'client_user_id' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/owned_businesses',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createOwnedBusiness(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'child_business_external_id' => 'string',
      'name' => 'string',
      'page_permitted_tasks' => 'list<page_permitted_tasks_enum>',
      'sales_rep_email' => 'string',
      'shared_page_id' => 'string',
      'should_generate_name' => 'bool',
      'survey_business_type' => 'survey_business_type_enum',
      'survey_num_assets' => 'unsigned int',
      'survey_num_people' => 'unsigned int',
      'timezone_id' => 'timezone_id_enum',
      'vertical' => 'vertical_enum',
    );
    $enums = array(
      'page_permitted_tasks_enum' => BusinessPagePermittedTasksValues::getInstance()->getValues(),
      'survey_business_type_enum' => BusinessSurveyBusinessTypeValues::getInstance()->getValues(),
      'timezone_id_enum' => BusinessTimezoneIdValues::getInstance()->getValues(),
      'vertical_enum' => BusinessVerticalValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/owned_businesses',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOwnedInstagramAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/owned_instagram_accounts',
      new IGUser(),
      'EDGE',
      IGUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOwnedOffsiteSignalContainerBusinessObjects(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/owned_offsite_signal_container_business_objects',
      new OffsiteSignalContainerBusinessObject(),
      'EDGE',
      OffsiteSignalContainerBusinessObject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOwnedPages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/owned_pages',
      new Page(),
      'EDGE',
      Page::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createOwnedPage(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'code' => 'string',
      'entry_point' => 'string',
      'page_id' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/owned_pages',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOwnedPixels(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/owned_pixels',
      new AdsPixel(),
      'EDGE',
      AdsPixel::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOwnedProductCatalogs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/owned_product_catalogs',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createOwnedProductCatalog(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'additional_vertical_option' => 'additional_vertical_option_enum',
      'business_metadata' => 'map',
      'catalog_segment_filter' => 'Object',
      'catalog_segment_product_set_id' => 'string',
      'da_display_settings' => 'Object',
      'destination_catalog_settings' => 'map',
      'flight_catalog_settings' => 'map',
      'name' => 'string',
      'parent_catalog_id' => 'string',
      'partner_integration' => 'map',
      'store_catalog_settings' => 'map',
      'vertical' => 'vertical_enum',
    );
    $enums = array(
      'additional_vertical_option_enum' => ProductCatalogAdditionalVerticalOptionValues::getInstance()->getValues(),
      'vertical_enum' => ProductCatalogVerticalValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/owned_product_catalogs',
      new ProductCatalog(),
      'EDGE',
      ProductCatalog::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getOwnedWhatsAppBusinessAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/owned_whatsapp_business_accounts',
      new WhatsAppBusinessAccount(),
      'EDGE',
      WhatsAppBusinessAccount::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deletePages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'page_id' => 'int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/pages',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPartnerAccountLinking(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/partner_account_linking',
      new PartnerAccountLinking(),
      'EDGE',
      PartnerAccountLinking::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPartnerPremiumOption(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'catalog_segment_id' => 'string',
      'enable_basket_insight' => 'bool',
      'enable_extended_audience_retargeting' => 'bool',
      'partner_business_id' => 'string',
      'retailer_custom_audience_config' => 'map',
      'vendor_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/partner_premium_options',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPassbackAttributionMetadataConfigs(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/passback_attribution_metadata_configs',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPendingClientAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/pending_client_ad_accounts',
      new BusinessAdAccountRequest(),
      'EDGE',
      BusinessAdAccountRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPendingClientApps(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/pending_client_apps',
      new BusinessApplicationRequest(),
      'EDGE',
      BusinessApplicationRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPendingClientPages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/pending_client_pages',
      new BusinessPageRequest(),
      'EDGE',
      BusinessPageRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPendingOwnedAdAccounts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/pending_owned_ad_accounts',
      new BusinessAdAccountRequest(),
      'EDGE',
      BusinessAdAccountRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPendingOwnedPages(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/pending_owned_pages',
      new BusinessPageRequest(),
      'EDGE',
      BusinessPageRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPendingSharedOffsiteSignalContainerBusinessObjects(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/pending_shared_offsite_signal_container_business_objects',
      new OffsiteSignalContainerBusinessObject(),
      'EDGE',
      OffsiteSignalContainerBusinessObject::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPendingUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'email' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/pending_users',
      new BusinessRoleRequest(),
      'EDGE',
      BusinessRoleRequest::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPicture(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'height' => 'int',
      'redirect' => 'bool',
      'type' => 'type_enum',
      'width' => 'int',
    );
    $enums = array(
      'type_enum' => ProfilePictureSourceTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/picture',
      new ProfilePictureSource(),
      'EDGE',
      ProfilePictureSource::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createPixelTo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/pixel_tos',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getPreVerifiedNumbers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'code_verification_status' => 'code_verification_status_enum',
      'phone_number' => 'string',
    );
    $enums = array(
      'code_verification_status_enum' => WhatsAppBusinessPreVerifiedPhoneNumberCodeVerificationStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/preverified_numbers',
      new WhatsAppBusinessPreVerifiedPhoneNumber(),
      'EDGE',
      WhatsAppBusinessPreVerifiedPhoneNumber::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReceivedAudienceSharingRequests(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'initiator_id' => 'string',
      'request_status' => 'request_status_enum',
    );
    $enums = array(
      'request_status_enum' => BusinessAssetSharingAgreementRequestStatusValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/received_audience_sharing_requests',
      new BusinessAssetSharingAgreement(),
      'EDGE',
      BusinessAssetSharingAgreement::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getResellerGuidances(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reseller_guidances',
      new ResellerGuidance(),
      'EDGE',
      ResellerGuidance::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelfCertifiedWhatsAppBusinessSubmissions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'end_business_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/self_certified_whatsapp_business_submissions',
      new WhatsAppBusinessPartnerClientVerificationSubmission(),
      'EDGE',
      WhatsAppBusinessPartnerClientVerificationSubmission::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSelfCertifyWhatsAppBusiness(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'average_monthly_revenue_spend_with_partner' => 'map',
      'business_documents' => 'list<file>',
      'business_vertical' => 'business_vertical_enum',
      'end_business_address' => 'map',
      'end_business_id' => 'string',
      'end_business_legal_name' => 'string',
      'end_business_trade_names' => 'list<string>',
      'end_business_website' => 'string',
      'num_billing_cycles_with_partner' => 'unsigned int',
    );
    $enums = array(
      'business_vertical_enum' => BusinessBusinessVerticalValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/self_certify_whatsapp_business',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSetupManagedPartnerAdAccount(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'credit_line_id' => 'string',
      'marketplace_business_id' => 'string',
      'subvertical_v2' => 'subvertical_v2_enum',
      'vendor_id' => 'string',
      'vertical_v2' => 'vertical_v2_enum',
    );
    $enums = array(
      'subvertical_v2_enum' => BusinessSubverticalV2Values::getInstance()->getValues(),
      'vertical_v2_enum' => BusinessVerticalV2Values::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/setup_managed_partner_adaccounts',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteSharePreVerifiedNumbers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'partner_business_id' => 'string',
      'preverified_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/share_preverified_numbers',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSharePreVerifiedNumber(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'partner_business_id' => 'string',
      'preverified_id' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/share_preverified_numbers',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSystemUserAccessToken(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'asset' => 'list<unsigned int>',
      'fetch_only' => 'bool',
      'scope' => 'list<Permission>',
      'set_token_expires_in_60_days' => 'bool',
      'system_user_id' => 'unsigned int',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/system_user_access_tokens',
      new Business(),
      'EDGE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSystemUsers(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/system_users',
      new SystemUser(),
      'EDGE',
      SystemUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createSystemUser(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'name' => 'string',
      'role' => 'role_enum',
      'system_user_id' => 'int',
    );
    $enums = array(
      'role_enum' => SystemUserRoleValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/system_users',
      new SystemUser(),
      'EDGE',
      SystemUser::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getThirdPartyMeasurementReportDataset(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/third_party_measurement_report_dataset',
      new ThirdPartyMeasurementReportDataset(),
      'EDGE',
      ThirdPartyMeasurementReportDataset::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createVideo(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'ad_placements_validation_only' => 'bool',
      'application_id' => 'string',
      'asked_fun_fact_prompt_id' => 'unsigned int',
      'audio_story_wave_animation_handle' => 'string',
      'chunk_session_id' => 'string',
      'composer_entry_picker' => 'string',
      'composer_entry_point' => 'string',
      'composer_entry_time' => 'unsigned int',
      'composer_session_events_log' => 'string',
      'composer_session_id' => 'string',
      'composer_source_surface' => 'string',
      'composer_type' => 'string',
      'container_type' => 'container_type_enum',
      'content_category' => 'content_category_enum',
      'creative_folder_id' => 'string',
      'creative_tools' => 'string',
      'description' => 'string',
      'embeddable' => 'bool',
      'end_offset' => 'unsigned int',
      'fbuploader_video_file_chunk' => 'string',
      'file_size' => 'unsigned int',
      'file_url' => 'string',
      'fisheye_video_cropped' => 'bool',
      'formatting' => 'formatting_enum',
      'fov' => 'unsigned int',
      'front_z_rotation' => 'float',
      'fun_fact_prompt_id' => 'string',
      'fun_fact_toastee_id' => 'unsigned int',
      'guide' => 'list<list<unsigned int>>',
      'guide_enabled' => 'bool',
      'initial_heading' => 'unsigned int',
      'initial_pitch' => 'unsigned int',
      'instant_game_entry_point_data' => 'string',
      'is_boost_intended' => 'bool',
      'is_group_linking_post' => 'bool',
      'is_partnership_ad' => 'bool',
      'is_voice_clip' => 'bool',
      'location_source_id' => 'string',
      'og_action_type_id' => 'string',
      'og_icon_id' => 'string',
      'og_object_id' => 'string',
      'og_phrase' => 'string',
      'og_suggestion_mechanism' => 'string',
      'original_fov' => 'unsigned int',
      'original_projection_type' => 'original_projection_type_enum',
      'partnership_ad_ad_code' => 'string',
      'publish_event_id' => 'unsigned int',
      'referenced_sticker_id' => 'string',
      'replace_video_id' => 'string',
      'slideshow_spec' => 'map',
      'source' => 'string',
      'source_instagram_media_id' => 'string',
      'spherical' => 'bool',
      'start_offset' => 'unsigned int',
      'swap_mode' => 'swap_mode_enum',
      'text_format_metadata' => 'string',
      'thumb' => 'file',
      'time_since_original_post' => 'unsigned int',
      'title' => 'string',
      'transcode_setting_properties' => 'string',
      'unpublished_content_type' => 'unpublished_content_type_enum',
      'upload_phase' => 'upload_phase_enum',
      'upload_session_id' => 'string',
      'upload_setting_properties' => 'string',
      'validation_ad_placements' => 'list<validation_ad_placements_enum>',
      'video_file_chunk' => 'string',
      'video_id_original' => 'string',
      'video_start_time_ms' => 'unsigned int',
      'waterfall_id' => 'string',
    );
    $enums = array(
      'container_type_enum' => AdVideoContainerTypeValues::getInstance()->getValues(),
      'content_category_enum' => AdVideoContentCategoryValues::getInstance()->getValues(),
      'formatting_enum' => AdVideoFormattingValues::getInstance()->getValues(),
      'original_projection_type_enum' => AdVideoOriginalProjectionTypeValues::getInstance()->getValues(),
      'swap_mode_enum' => AdVideoSwapModeValues::getInstance()->getValues(),
      'unpublished_content_type_enum' => AdVideoUnpublishedContentTypeValues::getInstance()->getValues(),
      'upload_phase_enum' => AdVideoUploadPhaseValues::getInstance()->getValues(),
      'validation_ad_placements_enum' => AdVideoValidationAdPlacementsValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/videos',
      new AdVideo(),
      'EDGE',
      AdVideo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new Business(),
      'NODE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'entry_point' => 'string',
      'name' => 'string',
      'primary_page' => 'string',
      'timezone_id' => 'unsigned int',
      'two_factor_type' => 'two_factor_type_enum',
      'vertical' => 'vertical_enum',
    );
    $enums = array(
      'two_factor_type_enum' => BusinessTwoFactorTypeValues::getInstance()->getValues(),
      'vertical_enum' => BusinessVerticalValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new Business(),
      'NODE',
      Business::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
