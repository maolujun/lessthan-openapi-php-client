<?php
/**
 * ApiLogisticsSendVo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 电商开放平台接口说明--深圳小于科技
 *
 * 小于电商平台开放接口是指每家企业可以拥有一套独立的密钥信息（AppId 与 AppSecret），通过这套密钥信息来调用电商平台公布出来的企业相关的开放接口，比如店铺、商品、订单等数据接口。您可以在 【开放平台】 - 【控制台】 - 【应用管理】 中进行管理，请务必妥善保管。
 *
 * The version of the OpenAPI document: 1.8.0
 * Contact: 393341261@qq.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\com.lessthan.openapi.model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ApiLogisticsSendVo Class Doc Comment
 *
 * @category Class
 * @description 线下发货
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiLogisticsSendVo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiLogisticsSendVo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_id' => 'string',
        'app_secret' => 'string',
        'platform_shop_id' => 'string',
        'order_no' => 'string',
        'tracking_number' => 'string',
        'company' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'app_id' => null,
        'app_secret' => null,
        'platform_shop_id' => null,
        'order_no' => null,
        'tracking_number' => null,
        'company' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'app_id' => false,
		'app_secret' => false,
		'platform_shop_id' => false,
		'order_no' => false,
		'tracking_number' => false,
		'company' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'app_id' => 'appId',
        'app_secret' => 'appSecret',
        'platform_shop_id' => 'platformShopId',
        'order_no' => 'orderNo',
        'tracking_number' => 'trackingNumber',
        'company' => 'company'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_id' => 'setAppId',
        'app_secret' => 'setAppSecret',
        'platform_shop_id' => 'setPlatformShopId',
        'order_no' => 'setOrderNo',
        'tracking_number' => 'setTrackingNumber',
        'company' => 'setCompany'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_id' => 'getAppId',
        'app_secret' => 'getAppSecret',
        'platform_shop_id' => 'getPlatformShopId',
        'order_no' => 'getOrderNo',
        'tracking_number' => 'getTrackingNumber',
        'company' => 'getCompany'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('app_id', $data ?? [], null);
        $this->setIfExists('app_secret', $data ?? [], null);
        $this->setIfExists('platform_shop_id', $data ?? [], null);
        $this->setIfExists('order_no', $data ?? [], null);
        $this->setIfExists('tracking_number', $data ?? [], null);
        $this->setIfExists('company', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['app_id'] === null) {
            $invalidProperties[] = "'app_id' can't be null";
        }
        if ($this->container['app_secret'] === null) {
            $invalidProperties[] = "'app_secret' can't be null";
        }
        if ($this->container['platform_shop_id'] === null) {
            $invalidProperties[] = "'platform_shop_id' can't be null";
        }
        if ($this->container['order_no'] === null) {
            $invalidProperties[] = "'order_no' can't be null";
        }
        if ($this->container['tracking_number'] === null) {
            $invalidProperties[] = "'tracking_number' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id 应用AppId
     *
     * @return self
     */
    public function setAppId($app_id)
    {
        if (is_null($app_id)) {
            throw new \InvalidArgumentException('non-nullable app_id cannot be null');
        }
        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets app_secret
     *
     * @return string
     */
    public function getAppSecret()
    {
        return $this->container['app_secret'];
    }

    /**
     * Sets app_secret
     *
     * @param string $app_secret 应用AppSecret
     *
     * @return self
     */
    public function setAppSecret($app_secret)
    {
        if (is_null($app_secret)) {
            throw new \InvalidArgumentException('non-nullable app_secret cannot be null');
        }
        $this->container['app_secret'] = $app_secret;

        return $this;
    }

    /**
     * Gets platform_shop_id
     *
     * @return string
     */
    public function getPlatformShopId()
    {
        return $this->container['platform_shop_id'];
    }

    /**
     * Sets platform_shop_id
     *
     * @param string $platform_shop_id 【API-店铺ID】
     *
     * @return self
     */
    public function setPlatformShopId($platform_shop_id)
    {
        if (is_null($platform_shop_id)) {
            throw new \InvalidArgumentException('non-nullable platform_shop_id cannot be null');
        }
        $this->container['platform_shop_id'] = $platform_shop_id;

        return $this;
    }

    /**
     * Gets order_no
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param string $order_no 订单编号 京东/拼多多：多订单合并发货时，逗号隔开，如（277752568390,277752568391）
     *
     * @return self
     */
    public function setOrderNo($order_no)
    {
        if (is_null($order_no)) {
            throw new \InvalidArgumentException('non-nullable order_no cannot be null');
        }
        $this->container['order_no'] = $order_no;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number 快递单号 京东：多运单号时，逗号隔开，如（777149924935953,777149924935954）
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number)
    {
        if (is_null($tracking_number)) {
            throw new \InvalidArgumentException('non-nullable tracking_number cannot be null');
        }
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company 快递公司名称，见【字典数据】
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        $this->container['company'] = $company;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

