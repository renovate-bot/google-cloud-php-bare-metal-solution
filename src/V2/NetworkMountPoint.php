<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/baremetalsolution/v2/network.proto

namespace Google\Cloud\BareMetalSolution\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Mount point for a network.
 *
 * Generated from protobuf message <code>google.cloud.baremetalsolution.v2.NetworkMountPoint</code>
 */
class NetworkMountPoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Instance to attach network to.
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $instance = '';
    /**
     * Logical interface to detach from.
     *
     * Generated from protobuf field <code>string logical_interface = 2;</code>
     */
    protected $logical_interface = '';
    /**
     * Network should be a default gateway.
     *
     * Generated from protobuf field <code>bool default_gateway = 3;</code>
     */
    protected $default_gateway = false;
    /**
     * Ip address of the server.
     *
     * Generated from protobuf field <code>string ip_address = 4;</code>
     */
    protected $ip_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Instance to attach network to.
     *     @type string $logical_interface
     *           Logical interface to detach from.
     *     @type bool $default_gateway
     *           Network should be a default gateway.
     *     @type string $ip_address
     *           Ip address of the server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Baremetalsolution\V2\Network::initOnce();
        parent::__construct($data);
    }

    /**
     * Instance to attach network to.
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Instance to attach network to.
     *
     * Generated from protobuf field <code>string instance = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Logical interface to detach from.
     *
     * Generated from protobuf field <code>string logical_interface = 2;</code>
     * @return string
     */
    public function getLogicalInterface()
    {
        return $this->logical_interface;
    }

    /**
     * Logical interface to detach from.
     *
     * Generated from protobuf field <code>string logical_interface = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLogicalInterface($var)
    {
        GPBUtil::checkString($var, True);
        $this->logical_interface = $var;

        return $this;
    }

    /**
     * Network should be a default gateway.
     *
     * Generated from protobuf field <code>bool default_gateway = 3;</code>
     * @return bool
     */
    public function getDefaultGateway()
    {
        return $this->default_gateway;
    }

    /**
     * Network should be a default gateway.
     *
     * Generated from protobuf field <code>bool default_gateway = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDefaultGateway($var)
    {
        GPBUtil::checkBool($var);
        $this->default_gateway = $var;

        return $this;
    }

    /**
     * Ip address of the server.
     *
     * Generated from protobuf field <code>string ip_address = 4;</code>
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Ip address of the server.
     *
     * Generated from protobuf field <code>string ip_address = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIpAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_address = $var;

        return $this;
    }

}

