<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/errors/list_operation_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Errors;

class ListOperationError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v12/errors/list_operation_error.protogoogle.ads.googleads.v12.errors"~
ListOperationErrorEnum"d
ListOperationError
UNSPECIFIED 
UNKNOWN
REQUIRED_FIELD_MISSING
DUPLICATE_VALUESB�
#com.google.ads.googleads.v12.errorsBListOperationErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v12/errors;errors�GAA�Google.Ads.GoogleAds.V12.Errors�Google\\Ads\\GoogleAds\\V12\\Errors�#Google::Ads::GoogleAds::V12::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

