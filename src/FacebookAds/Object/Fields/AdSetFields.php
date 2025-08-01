<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdSetFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const ADLABELS = 'adlabels';
  const ADSET_SCHEDULE = 'adset_schedule';
  const ASSET_FEED_ID = 'asset_feed_id';
  const ATTRIBUTION_SPEC = 'attribution_spec';
  const BID_ADJUSTMENTS = 'bid_adjustments';
  const BID_AMOUNT = 'bid_amount';
  const BID_CONSTRAINTS = 'bid_constraints';
  const BID_INFO = 'bid_info';
  const BID_STRATEGY = 'bid_strategy';
  const BILLING_EVENT = 'billing_event';
  const BRAND_SAFETY_CONFIG = 'brand_safety_config';
  const BUDGET_REMAINING = 'budget_remaining';
  const CAMPAIGN = 'campaign';
  const CAMPAIGN_ACTIVE_TIME = 'campaign_active_time';
  const CAMPAIGN_ATTRIBUTION = 'campaign_attribution';
  const CAMPAIGN_ID = 'campaign_id';
  const CONFIGURED_STATUS = 'configured_status';
  const CREATED_TIME = 'created_time';
  const CREATIVE_SEQUENCE = 'creative_sequence';
  const CREATIVE_SEQUENCE_REPETITION_PATTERN = 'creative_sequence_repetition_pattern';
  const DAILY_BUDGET = 'daily_budget';
  const DAILY_MIN_SPEND_TARGET = 'daily_min_spend_target';
  const DAILY_SPEND_CAP = 'daily_spend_cap';
  const DESTINATION_TYPE = 'destination_type';
  const DSA_BENEFICIARY = 'dsa_beneficiary';
  const DSA_PAYOR = 'dsa_payor';
  const EFFECTIVE_STATUS = 'effective_status';
  const END_TIME = 'end_time';
  const EXISTING_CUSTOMER_BUDGET_PERCENTAGE = 'existing_customer_budget_percentage';
  const FREQUENCY_CONTROL_SPECS = 'frequency_control_specs';
  const FULL_FUNNEL_EXPLORATION_MODE = 'full_funnel_exploration_mode';
  const ID = 'id';
  const INSTAGRAM_USER_ID = 'instagram_user_id';
  const IS_BA_SKIP_DELAYED_ELIGIBLE = 'is_ba_skip_delayed_eligible';
  const IS_BUDGET_SCHEDULE_ENABLED = 'is_budget_schedule_enabled';
  const IS_DYNAMIC_CREATIVE = 'is_dynamic_creative';
  const IS_INCREMENTAL_ATTRIBUTION_ENABLED = 'is_incremental_attribution_enabled';
  const ISSUES_INFO = 'issues_info';
  const LEARNING_STAGE_INFO = 'learning_stage_info';
  const LIFETIME_BUDGET = 'lifetime_budget';
  const LIFETIME_IMPS = 'lifetime_imps';
  const LIFETIME_MIN_SPEND_TARGET = 'lifetime_min_spend_target';
  const LIFETIME_SPEND_CAP = 'lifetime_spend_cap';
  const MAX_BUDGET_SPEND_PERCENTAGE = 'max_budget_spend_percentage';
  const MIN_BUDGET_SPEND_PERCENTAGE = 'min_budget_spend_percentage';
  const MULTI_OPTIMIZATION_GOAL_WEIGHT = 'multi_optimization_goal_weight';
  const NAME = 'name';
  const OPTIMIZATION_GOAL = 'optimization_goal';
  const OPTIMIZATION_SUB_EVENT = 'optimization_sub_event';
  const PACING_TYPE = 'pacing_type';
  const PROMOTED_OBJECT = 'promoted_object';
  const RECOMMENDATIONS = 'recommendations';
  const RECURRING_BUDGET_SEMANTICS = 'recurring_budget_semantics';
  const REGIONAL_REGULATED_CATEGORIES = 'regional_regulated_categories';
  const REGIONAL_REGULATION_IDENTITIES = 'regional_regulation_identities';
  const REVIEW_FEEDBACK = 'review_feedback';
  const RF_PREDICTION_ID = 'rf_prediction_id';
  const SOURCE_ADSET = 'source_adset';
  const SOURCE_ADSET_ID = 'source_adset_id';
  const START_TIME = 'start_time';
  const STATUS = 'status';
  const TARGETING = 'targeting';
  const TARGETING_OPTIMIZATION_TYPES = 'targeting_optimization_types';
  const TIME_BASED_AD_ROTATION_ID_BLOCKS = 'time_based_ad_rotation_id_blocks';
  const TIME_BASED_AD_ROTATION_INTERVALS = 'time_based_ad_rotation_intervals';
  const UPDATED_TIME = 'updated_time';
  const USE_NEW_APP_CLICK = 'use_new_app_click';
  const BUDGET_SOURCE = 'budget_source';
  const BUDGET_SPLIT_SET_ID = 'budget_split_set_id';
  const CAMPAIGN_SPEC = 'campaign_spec';
  const DAILY_IMPS = 'daily_imps';
  const DATE_FORMAT = 'date_format';
  const EXECUTION_OPTIONS = 'execution_options';
  const IS_SAC_CFCA_TERMS_CERTIFIED = 'is_sac_cfca_terms_certified';
  const LINE_NUMBER = 'line_number';
  const RB_PREDICTION_ID = 'rb_prediction_id';
  const TIME_START = 'time_start';
  const TIME_STOP = 'time_stop';
  const TOPLINE_ID = 'topline_id';
  const TUNE_FOR_CATEGORY = 'tune_for_category';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'adlabels' => 'list<AdLabel>',
      'adset_schedule' => 'list<DayPart>',
      'asset_feed_id' => 'string',
      'attribution_spec' => 'list<AttributionSpec>',
      'bid_adjustments' => 'AdBidAdjustments',
      'bid_amount' => 'unsigned int',
      'bid_constraints' => 'AdCampaignBidConstraint',
      'bid_info' => 'map<string, unsigned int>',
      'bid_strategy' => 'BidStrategy',
      'billing_event' => 'BillingEvent',
      'brand_safety_config' => 'BrandSafetyCampaignConfig',
      'budget_remaining' => 'string',
      'campaign' => 'Campaign',
      'campaign_active_time' => 'string',
      'campaign_attribution' => 'string',
      'campaign_id' => 'string',
      'configured_status' => 'ConfiguredStatus',
      'created_time' => 'datetime',
      'creative_sequence' => 'list<string>',
      'creative_sequence_repetition_pattern' => 'string',
      'daily_budget' => 'string',
      'daily_min_spend_target' => 'string',
      'daily_spend_cap' => 'string',
      'destination_type' => 'string',
      'dsa_beneficiary' => 'string',
      'dsa_payor' => 'string',
      'effective_status' => 'EffectiveStatus',
      'end_time' => 'datetime',
      'existing_customer_budget_percentage' => 'unsigned int',
      'frequency_control_specs' => 'list<AdCampaignFrequencyControlSpecs>',
      'full_funnel_exploration_mode' => 'string',
      'id' => 'string',
      'instagram_user_id' => 'string',
      'is_ba_skip_delayed_eligible' => 'bool',
      'is_budget_schedule_enabled' => 'bool',
      'is_dynamic_creative' => 'bool',
      'is_incremental_attribution_enabled' => 'bool',
      'issues_info' => 'list<AdCampaignIssuesInfo>',
      'learning_stage_info' => 'AdCampaignLearningStageInfo',
      'lifetime_budget' => 'string',
      'lifetime_imps' => 'int',
      'lifetime_min_spend_target' => 'string',
      'lifetime_spend_cap' => 'string',
      'max_budget_spend_percentage' => 'string',
      'min_budget_spend_percentage' => 'string',
      'multi_optimization_goal_weight' => 'string',
      'name' => 'string',
      'optimization_goal' => 'OptimizationGoal',
      'optimization_sub_event' => 'string',
      'pacing_type' => 'list<string>',
      'promoted_object' => 'AdPromotedObject',
      'recommendations' => 'list<AdRecommendation>',
      'recurring_budget_semantics' => 'bool',
      'regional_regulated_categories' => 'list<string>',
      'regional_regulation_identities' => 'RegionalRegulationIdentities',
      'review_feedback' => 'string',
      'rf_prediction_id' => 'string',
      'source_adset' => 'AdSet',
      'source_adset_id' => 'string',
      'start_time' => 'datetime',
      'status' => 'Status',
      'targeting' => 'Targeting',
      'targeting_optimization_types' => 'list<map<string, int>>',
      'time_based_ad_rotation_id_blocks' => 'list<list<int>>',
      'time_based_ad_rotation_intervals' => 'list<unsigned int>',
      'updated_time' => 'datetime',
      'use_new_app_click' => 'bool',
      'budget_source' => 'BudgetSource',
      'budget_split_set_id' => 'string',
      'campaign_spec' => 'Object',
      'daily_imps' => 'unsigned int',
      'date_format' => 'string',
      'execution_options' => 'list<ExecutionOptions>',
      'is_sac_cfca_terms_certified' => 'bool',
      'line_number' => 'unsigned int',
      'rb_prediction_id' => 'string',
      'time_start' => 'datetime',
      'time_stop' => 'datetime',
      'topline_id' => 'string',
      'tune_for_category' => 'TuneForCategory',
    );
  }
}
