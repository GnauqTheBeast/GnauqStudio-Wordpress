<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/errors/conversion_adjustment_upload_error.proto

namespace Google\Ads\GoogleAds\V14\Errors\ConversionAdjustmentUploadErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible conversion adjustment upload errors.
 *
 * Protobuf type <code>google.ads.googleads.v14.errors.ConversionAdjustmentUploadErrorEnum.ConversionAdjustmentUploadError</code>
 */
class ConversionAdjustmentUploadError
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Can't import events to a conversion action that was just created. Try
     * importing again in 6 hours.
     *
     * Generated from protobuf enum <code>TOO_RECENT_CONVERSION_ACTION = 2;</code>
     */
    const TOO_RECENT_CONVERSION_ACTION = 2;
    /**
     * Make sure you specify an active conversion action that can be adjusted.
     *
     * Generated from protobuf enum <code>INVALID_CONVERSION_ACTION = 3;</code>
     */
    const INVALID_CONVERSION_ACTION = 3;
    /**
     * The conversion was already retracted. This adjustment was not processed.
     *
     * Generated from protobuf enum <code>CONVERSION_ALREADY_RETRACTED = 4;</code>
     */
    const CONVERSION_ALREADY_RETRACTED = 4;
    /**
     * The conversion for this conversion action and conversion identifier can't
     * be found. Make sure your conversion identifiers are associated with the
     * correct conversion action and try again.
     *
     * Generated from protobuf enum <code>CONVERSION_NOT_FOUND = 5;</code>
     */
    const CONVERSION_NOT_FOUND = 5;
    /**
     * Adjustment can't be made to a conversion that occurred more than 54 days
     * ago.
     *
     * Generated from protobuf enum <code>CONVERSION_EXPIRED = 6;</code>
     */
    const CONVERSION_EXPIRED = 6;
    /**
     * Adjustment has an `adjustment_date_time` that occurred before the
     * associated conversion. Make sure your `adjustment_date_time` is correct
     * and try again.
     *
     * Generated from protobuf enum <code>ADJUSTMENT_PRECEDES_CONVERSION = 7;</code>
     */
    const ADJUSTMENT_PRECEDES_CONVERSION = 7;
    /**
     * More recent adjustment `adjustment_date_time` has already been reported
     * for the associated conversion.  Make sure your adjustment
     * `adjustment_date_time` is correct and try again.
     *
     * Generated from protobuf enum <code>MORE_RECENT_RESTATEMENT_FOUND = 8;</code>
     */
    const MORE_RECENT_RESTATEMENT_FOUND = 8;
    /**
     * Adjustment can't be recorded because the conversion occurred too
     * recently. Try adjusting a conversion that occurred at least 24 hours ago.
     *
     * Generated from protobuf enum <code>TOO_RECENT_CONVERSION = 9;</code>
     */
    const TOO_RECENT_CONVERSION = 9;
    /**
     * Can't make an adjustment to a conversion that is set up to use the
     * default value. Check your conversion action value setting and try again.
     *
     * Generated from protobuf enum <code>CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE = 10;</code>
     */
    const CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE = 10;
    /**
     * Try uploading fewer than 2001 adjustments in a single API request.
     *
     * Generated from protobuf enum <code>TOO_MANY_ADJUSTMENTS_IN_REQUEST = 11;</code>
     */
    const TOO_MANY_ADJUSTMENTS_IN_REQUEST = 11;
    /**
     * The conversion has already been adjusted the maximum number of times.
     * Make sure you're only making necessary adjustment to existing conversion.
     *
     * Generated from protobuf enum <code>TOO_MANY_ADJUSTMENTS = 12;</code>
     */
    const TOO_MANY_ADJUSTMENTS = 12;
    /**
     * The conversion has prior a restatement with the same
     * `adjustment_date_time`. Make sure your adjustment has the correct and
     * unique `adjustment_date_time` and try again.
     *
     * Generated from protobuf enum <code>RESTATEMENT_ALREADY_EXISTS = 13;</code>
     */
    const RESTATEMENT_ALREADY_EXISTS = 13;
    /**
     * Imported adjustment has a duplicate conversion adjustment with same
     * `adjustment_date_time`. Make sure your adjustment has the correct
     * `adjustment_date_time` and try again.
     *
     * Generated from protobuf enum <code>DUPLICATE_ADJUSTMENT_IN_REQUEST = 14;</code>
     */
    const DUPLICATE_ADJUSTMENT_IN_REQUEST = 14;
    /**
     * Make sure you agree to the customer data processing terms in conversion
     * settings and try again.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS = 15;</code>
     */
    const CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS = 15;
    /**
     * Can't use enhanced conversions with the specified conversion action.
     *
     * Generated from protobuf enum <code>CONVERSION_ACTION_NOT_ELIGIBLE_FOR_ENHANCEMENT = 16;</code>
     */
    const CONVERSION_ACTION_NOT_ELIGIBLE_FOR_ENHANCEMENT = 16;
    /**
     * Make sure you hash user provided data using SHA-256 and ensure you are
     * normalizing according to the guidelines.
     *
     * Generated from protobuf enum <code>INVALID_USER_IDENTIFIER = 17;</code>
     */
    const INVALID_USER_IDENTIFIER = 17;
    /**
     * Use user provided data such as emails or phone numbers hashed using
     * SHA-256 and try again.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_USER_IDENTIFIER = 18;</code>
     */
    const UNSUPPORTED_USER_IDENTIFIER = 18;
    /**
     * Cannot set both gclid_date_time_pair and order_id. Use only 1 type and
     * try again.
     *
     * Generated from protobuf enum <code>GCLID_DATE_TIME_PAIR_AND_ORDER_ID_BOTH_SET = 20;</code>
     */
    const GCLID_DATE_TIME_PAIR_AND_ORDER_ID_BOTH_SET = 20;
    /**
     * Conversion already has enhancements with the same Order ID and conversion
     * action. Make sure your data is correctly configured and try again.
     *
     * Generated from protobuf enum <code>CONVERSION_ALREADY_ENHANCED = 21;</code>
     */
    const CONVERSION_ALREADY_ENHANCED = 21;
    /**
     * Multiple enhancements have the same conversion action and Order ID.  Make
     * sure your data is correctly configured and try again.
     *
     * Generated from protobuf enum <code>DUPLICATE_ENHANCEMENT_IN_REQUEST = 22;</code>
     */
    const DUPLICATE_ENHANCEMENT_IN_REQUEST = 22;
    /**
     * Enhanced conversions can't be used for this account because of Google
     * customer data policies. Contact your Google representative.
     *
     * Generated from protobuf enum <code>CUSTOMER_DATA_POLICY_PROHIBITS_ENHANCEMENT = 23;</code>
     */
    const CUSTOMER_DATA_POLICY_PROHIBITS_ENHANCEMENT = 23;
    /**
     * Adjustment for website conversion requires Order ID (ie, transaction ID).
     * Make sure your website tags capture Order IDs and you send the same Order
     * IDs with your adjustment.
     *
     * Generated from protobuf enum <code>MISSING_ORDER_ID_FOR_WEBPAGE = 24;</code>
     */
    const MISSING_ORDER_ID_FOR_WEBPAGE = 24;
    /**
     * Can't use adjustment with Order IDs containing personally-identifiable
     * information (PII).
     *
     * Generated from protobuf enum <code>ORDER_ID_CONTAINS_PII = 25;</code>
     */
    const ORDER_ID_CONTAINS_PII = 25;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::TOO_RECENT_CONVERSION_ACTION => 'TOO_RECENT_CONVERSION_ACTION',
        self::INVALID_CONVERSION_ACTION => 'INVALID_CONVERSION_ACTION',
        self::CONVERSION_ALREADY_RETRACTED => 'CONVERSION_ALREADY_RETRACTED',
        self::CONVERSION_NOT_FOUND => 'CONVERSION_NOT_FOUND',
        self::CONVERSION_EXPIRED => 'CONVERSION_EXPIRED',
        self::ADJUSTMENT_PRECEDES_CONVERSION => 'ADJUSTMENT_PRECEDES_CONVERSION',
        self::MORE_RECENT_RESTATEMENT_FOUND => 'MORE_RECENT_RESTATEMENT_FOUND',
        self::TOO_RECENT_CONVERSION => 'TOO_RECENT_CONVERSION',
        self::CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE => 'CANNOT_RESTATE_CONVERSION_ACTION_THAT_ALWAYS_USES_DEFAULT_CONVERSION_VALUE',
        self::TOO_MANY_ADJUSTMENTS_IN_REQUEST => 'TOO_MANY_ADJUSTMENTS_IN_REQUEST',
        self::TOO_MANY_ADJUSTMENTS => 'TOO_MANY_ADJUSTMENTS',
        self::RESTATEMENT_ALREADY_EXISTS => 'RESTATEMENT_ALREADY_EXISTS',
        self::DUPLICATE_ADJUSTMENT_IN_REQUEST => 'DUPLICATE_ADJUSTMENT_IN_REQUEST',
        self::CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS => 'CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS',
        self::CONVERSION_ACTION_NOT_ELIGIBLE_FOR_ENHANCEMENT => 'CONVERSION_ACTION_NOT_ELIGIBLE_FOR_ENHANCEMENT',
        self::INVALID_USER_IDENTIFIER => 'INVALID_USER_IDENTIFIER',
        self::UNSUPPORTED_USER_IDENTIFIER => 'UNSUPPORTED_USER_IDENTIFIER',
        self::GCLID_DATE_TIME_PAIR_AND_ORDER_ID_BOTH_SET => 'GCLID_DATE_TIME_PAIR_AND_ORDER_ID_BOTH_SET',
        self::CONVERSION_ALREADY_ENHANCED => 'CONVERSION_ALREADY_ENHANCED',
        self::DUPLICATE_ENHANCEMENT_IN_REQUEST => 'DUPLICATE_ENHANCEMENT_IN_REQUEST',
        self::CUSTOMER_DATA_POLICY_PROHIBITS_ENHANCEMENT => 'CUSTOMER_DATA_POLICY_PROHIBITS_ENHANCEMENT',
        self::MISSING_ORDER_ID_FOR_WEBPAGE => 'MISSING_ORDER_ID_FOR_WEBPAGE',
        self::ORDER_ID_CONTAINS_PII => 'ORDER_ID_CONTAINS_PII',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConversionAdjustmentUploadError::class, \Google\Ads\GoogleAds\V14\Errors\ConversionAdjustmentUploadErrorEnum_ConversionAdjustmentUploadError::class);

