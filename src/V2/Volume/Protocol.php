<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/volume.proto

namespace Google\Cloud\BareMetalSolution\V2\Volume;

use UnexpectedValueException;

/**
 * Storage protocol.
 *
 * Protobuf type <code>google.cloud.baremetalsolution.v2.Volume.Protocol</code>
 */
class Protocol
{
    /**
     * Value is not specified.
     *
     * Generated from protobuf enum <code>PROTOCOL_UNSPECIFIED = 0;</code>
     */
    const PROTOCOL_UNSPECIFIED = 0;
    /**
     * Fibre Channel protocol.
     *
     * Generated from protobuf enum <code>FIBRE_CHANNEL = 1;</code>
     */
    const FIBRE_CHANNEL = 1;
    /**
     * NFS protocol means Volume is a NFS Share volume.
     * Such volumes cannot be manipulated via Volumes API.
     *
     * Generated from protobuf enum <code>NFS = 2;</code>
     */
    const NFS = 2;

    private static $valueToName = [
        self::PROTOCOL_UNSPECIFIED => 'PROTOCOL_UNSPECIFIED',
        self::FIBRE_CHANNEL => 'FIBRE_CHANNEL',
        self::NFS => 'NFS',
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


