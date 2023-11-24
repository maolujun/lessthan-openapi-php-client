<?php
/**
 * ApiShopVo
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
 * ApiShopVo Class Doc Comment
 *
 * @category Class
 * @description 店铺
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiShopVo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiShopVo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'platform_shop_id' => 'string',
        'third_platform' => 'string',
        'platform_shop_no' => 'string',
        'shop_name' => 'string',
        'shop_logo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'platform_shop_id' => null,
        'third_platform' => null,
        'platform_shop_no' => null,
        'shop_name' => null,
        'shop_logo' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'platform_shop_id' => false,
		'third_platform' => false,
		'platform_shop_no' => false,
		'shop_name' => false,
		'shop_logo' => false
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
        'platform_shop_id' => 'platformShopId',
        'third_platform' => 'thirdPlatform',
        'platform_shop_no' => 'platformShopNo',
        'shop_name' => 'shopName',
        'shop_logo' => 'shopLogo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'platform_shop_id' => 'setPlatformShopId',
        'third_platform' => 'setThirdPlatform',
        'platform_shop_no' => 'setPlatformShopNo',
        'shop_name' => 'setShopName',
        'shop_logo' => 'setShopLogo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'platform_shop_id' => 'getPlatformShopId',
        'third_platform' => 'getThirdPlatform',
        'platform_shop_no' => 'getPlatformShopNo',
        'shop_name' => 'getShopName',
        'shop_logo' => 'getShopLogo'
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
        $this->setIfExists('platform_shop_id', $data ?? [], null);
        $this->setIfExists('third_platform', $data ?? [], null);
        $this->setIfExists('platform_shop_no', $data ?? [], null);
        $this->setIfExists('shop_name', $data ?? [], null);
        $this->setIfExists('shop_logo', $data ?? [], null);
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
     * Gets platform_shop_id
     *
     * @return string|null
     */
    public function getPlatformShopId()
    {
        return $this->container['platform_shop_id'];
    }

    /**
     * Sets platform_shop_id
     *
     * @param string|null $platform_shop_id 店铺ID，唯一值
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
     * Gets third_platform
     *
     * @return string|null
     */
    public function getThirdPlatform()
    {
        return $this->container['third_platform'];
    }

    /**
     * Sets third_platform
     *
     * @param string|null $third_platform 对接平台，见【字典数据】
     *
     * @return self
     */
    public function setThirdPlatform($third_platform)
    {
        if (is_null($third_platform)) {
            throw new \InvalidArgumentException('non-nullable third_platform cannot be null');
        }
        $this->container['third_platform'] = $third_platform;

        return $this;
    }

    /**
     * Gets platform_shop_no
     *
     * @return string|null
     */
    public function getPlatformShopNo()
    {
        return $this->container['platform_shop_no'];
    }

    /**
     * Sets platform_shop_no
     *
     * @param string|null $platform_shop_no 平台店铺ID
     *
     * @return self
     */
    public function setPlatformShopNo($platform_shop_no)
    {
        if (is_null($platform_shop_no)) {
            throw new \InvalidArgumentException('non-nullable platform_shop_no cannot be null');
        }
        $this->container['platform_shop_no'] = $platform_shop_no;

        return $this;
    }

    /**
     * Gets shop_name
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shop_name'];
    }

    /**
     * Sets shop_name
     *
     * @param string|null $shop_name 店铺名称
     *
     * @return self
     */
    public function setShopName($shop_name)
    {
        if (is_null($shop_name)) {
            throw new \InvalidArgumentException('non-nullable shop_name cannot be null');
        }
        $this->container['shop_name'] = $shop_name;

        return $this;
    }

    /**
     * Gets shop_logo
     *
     * @return string|null
     */
    public function getShopLogo()
    {
        return $this->container['shop_logo'];
    }

    /**
     * Sets shop_logo
     *
     * @param string|null $shop_logo 店铺LOGO
     *
     * @return self
     */
    public function setShopLogo($shop_logo)
    {
        if (is_null($shop_logo)) {
            throw new \InvalidArgumentException('non-nullable shop_logo cannot be null');
        }
        $this->container['shop_logo'] = $shop_logo;

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

