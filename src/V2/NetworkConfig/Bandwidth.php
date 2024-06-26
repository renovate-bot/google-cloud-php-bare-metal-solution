<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/provisioning.proto

namespace Google\Cloud\BareMetalSolution\V2\NetworkConfig;

use UnexpectedValueException;

/**
 * Interconnect bandwidth.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.NetworkConfig.Bandwidth</code>
 */
class Bandwidth
{
    /**
     * Unspecified value.
     *
     * Generated from protobuf enum <code>BANDWIDTH_UNSPECIFIED = 0;</code>
     */
    const BANDWIDTH_UNSPECIFIED = 0;
    /**
     * 1 Gbps.
     *
     * Generated from protobuf enum <code>BW_1_GBPS = 1;</code>
     */
    const BW_1_GBPS = 1;
    /**
     * 2 Gbps.
     *
     * Generated from protobuf enum <code>BW_2_GBPS = 2;</code>
     */
    const BW_2_GBPS = 2;
    /**
     * 5 Gbps.
     *
     * Generated from protobuf enum <code>BW_5_GBPS = 3;</code>
     */
    const BW_5_GBPS = 3;
    /**
     * 10 Gbps.
     *
     * Generated from protobuf enum <code>BW_10_GBPS = 4;</code>
     */
    const BW_10_GBPS = 4;

    private static $valueToName = [
        self::BANDWIDTH_UNSPECIFIED => 'BANDWIDTH_UNSPECIFIED',
        self::BW_1_GBPS => 'BW_1_GBPS',
        self::BW_2_GBPS => 'BW_2_GBPS',
        self::BW_5_GBPS => 'BW_5_GBPS',
        self::BW_10_GBPS => 'BW_10_GBPS',
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


