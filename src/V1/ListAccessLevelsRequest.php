<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_context_manager.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list all `AccessLevels` in an `AccessPolicy`.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.ListAccessLevelsRequest</code>
 */
class ListAccessLevelsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name for the access policy to list [Access Levels]
     * [google.identity.accesscontextmanager.v1.AccessLevel] from.
     * Format:
     * `accessPolicies/{policy_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Number of [Access Levels]
     * [google.identity.accesscontextmanager.v1.AccessLevel] to include in
     * the list. Default 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Next page token for the next batch of [Access Level]
     * [google.identity.accesscontextmanager.v1.AccessLevel] instances.
     * Defaults to the first page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Whether to return `BasicLevels` in the Cloud Common Expression language, as
     * `CustomLevels`, rather than as `BasicLevels`. Defaults to returning
     * `AccessLevels` in the format they were defined.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.LevelFormat access_level_format = 4;</code>
     */
    private $access_level_format = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Resource name for the access policy to list [Access Levels]
     *           [google.identity.accesscontextmanager.v1.AccessLevel] from.
     *           Format:
     *           `accessPolicies/{policy_id}`
     *     @type int $page_size
     *           Number of [Access Levels]
     *           [google.identity.accesscontextmanager.v1.AccessLevel] to include in
     *           the list. Default 100.
     *     @type string $page_token
     *           Next page token for the next batch of [Access Level]
     *           [google.identity.accesscontextmanager.v1.AccessLevel] instances.
     *           Defaults to the first page of results.
     *     @type int $access_level_format
     *           Whether to return `BasicLevels` in the Cloud Common Expression language, as
     *           `CustomLevels`, rather than as `BasicLevels`. Defaults to returning
     *           `AccessLevels` in the format they were defined.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessContextManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name for the access policy to list [Access Levels]
     * [google.identity.accesscontextmanager.v1.AccessLevel] from.
     * Format:
     * `accessPolicies/{policy_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Resource name for the access policy to list [Access Levels]
     * [google.identity.accesscontextmanager.v1.AccessLevel] from.
     * Format:
     * `accessPolicies/{policy_id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Number of [Access Levels]
     * [google.identity.accesscontextmanager.v1.AccessLevel] to include in
     * the list. Default 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of [Access Levels]
     * [google.identity.accesscontextmanager.v1.AccessLevel] to include in
     * the list. Default 100.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Next page token for the next batch of [Access Level]
     * [google.identity.accesscontextmanager.v1.AccessLevel] instances.
     * Defaults to the first page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Next page token for the next batch of [Access Level]
     * [google.identity.accesscontextmanager.v1.AccessLevel] instances.
     * Defaults to the first page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Whether to return `BasicLevels` in the Cloud Common Expression language, as
     * `CustomLevels`, rather than as `BasicLevels`. Defaults to returning
     * `AccessLevels` in the format they were defined.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.LevelFormat access_level_format = 4;</code>
     * @return int
     */
    public function getAccessLevelFormat()
    {
        return $this->access_level_format;
    }

    /**
     * Whether to return `BasicLevels` in the Cloud Common Expression language, as
     * `CustomLevels`, rather than as `BasicLevels`. Defaults to returning
     * `AccessLevels` in the format they were defined.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.LevelFormat access_level_format = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setAccessLevelFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Identity\AccessContextManager\V1\LevelFormat::class);
        $this->access_level_format = $var;

        return $this;
    }

}

