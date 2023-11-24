<?php
/**
 * ApiSearchVo
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
 * ApiSearchVo Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiSearchVo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiSearchVo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'app_id' => 'string',
        'app_secret' => 'string',
        'page_index' => 'int',
        'page_size' => 'int',
        'platform_shop_ids' => 'string',
        'row_ids' => 'string',
        'platform_goods_ids' => 'string',
        'platform_order_ids' => 'string',
        'platform_after_sale_ids' => 'string',
        'create_start_time' => 'string',
        'create_end_time' => 'string',
        'update_start_time' => 'string',
        'update_end_time' => 'string'
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
        'page_index' => null,
        'page_size' => null,
        'platform_shop_ids' => null,
        'row_ids' => null,
        'platform_goods_ids' => null,
        'platform_order_ids' => null,
        'platform_after_sale_ids' => null,
        'create_start_time' => null,
        'create_end_time' => null,
        'update_start_time' => null,
        'update_end_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'app_id' => false,
		'app_secret' => false,
		'page_index' => false,
		'page_size' => false,
		'platform_shop_ids' => false,
		'row_ids' => false,
		'platform_goods_ids' => false,
		'platform_order_ids' => false,
		'platform_after_sale_ids' => false,
		'create_start_time' => false,
		'create_end_time' => false,
		'update_start_time' => false,
		'update_end_time' => false
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
        'page_index' => 'pageIndex',
        'page_size' => 'pageSize',
        'platform_shop_ids' => 'platformShopIds',
        'row_ids' => 'rowIds',
        'platform_goods_ids' => 'platformGoodsIds',
        'platform_order_ids' => 'platformOrderIds',
        'platform_after_sale_ids' => 'platformAfterSaleIds',
        'create_start_time' => 'createStartTime',
        'create_end_time' => 'createEndTime',
        'update_start_time' => 'updateStartTime',
        'update_end_time' => 'updateEndTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_id' => 'setAppId',
        'app_secret' => 'setAppSecret',
        'page_index' => 'setPageIndex',
        'page_size' => 'setPageSize',
        'platform_shop_ids' => 'setPlatformShopIds',
        'row_ids' => 'setRowIds',
        'platform_goods_ids' => 'setPlatformGoodsIds',
        'platform_order_ids' => 'setPlatformOrderIds',
        'platform_after_sale_ids' => 'setPlatformAfterSaleIds',
        'create_start_time' => 'setCreateStartTime',
        'create_end_time' => 'setCreateEndTime',
        'update_start_time' => 'setUpdateStartTime',
        'update_end_time' => 'setUpdateEndTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_id' => 'getAppId',
        'app_secret' => 'getAppSecret',
        'page_index' => 'getPageIndex',
        'page_size' => 'getPageSize',
        'platform_shop_ids' => 'getPlatformShopIds',
        'row_ids' => 'getRowIds',
        'platform_goods_ids' => 'getPlatformGoodsIds',
        'platform_order_ids' => 'getPlatformOrderIds',
        'platform_after_sale_ids' => 'getPlatformAfterSaleIds',
        'create_start_time' => 'getCreateStartTime',
        'create_end_time' => 'getCreateEndTime',
        'update_start_time' => 'getUpdateStartTime',
        'update_end_time' => 'getUpdateEndTime'
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
        $this->setIfExists('page_index', $data ?? [], 1);
        $this->setIfExists('page_size', $data ?? [], 20);
        $this->setIfExists('platform_shop_ids', $data ?? [], null);
        $this->setIfExists('row_ids', $data ?? [], null);
        $this->setIfExists('platform_goods_ids', $data ?? [], null);
        $this->setIfExists('platform_order_ids', $data ?? [], null);
        $this->setIfExists('platform_after_sale_ids', $data ?? [], null);
        $this->setIfExists('create_start_time', $data ?? [], null);
        $this->setIfExists('create_end_time', $data ?? [], null);
        $this->setIfExists('update_start_time', $data ?? [], null);
        $this->setIfExists('update_end_time', $data ?? [], null);
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
     * Gets page_index
     *
     * @return int|null
     */
    public function getPageIndex()
    {
        return $this->container['page_index'];
    }

    /**
     * Sets page_index
     *
     * @param int|null $page_index 页码
     *
     * @return self
     */
    public function setPageIndex($page_index)
    {
        if (is_null($page_index)) {
            throw new \InvalidArgumentException('non-nullable page_index cannot be null');
        }
        $this->container['page_index'] = $page_index;

        return $this;
    }

    /**
     * Gets page_size
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['page_size'];
    }

    /**
     * Sets page_size
     *
     * @param int|null $page_size 每页记录数，取值范围：1~50
     *
     * @return self
     */
    public function setPageSize($page_size)
    {
        if (is_null($page_size)) {
            throw new \InvalidArgumentException('non-nullable page_size cannot be null');
        }
        $this->container['page_size'] = $page_size;

        return $this;
    }

    /**
     * Gets platform_shop_ids
     *
     * @return string|null
     */
    public function getPlatformShopIds()
    {
        return $this->container['platform_shop_ids'];
    }

    /**
     * Sets platform_shop_ids
     *
     * @param string|null $platform_shop_ids 【API-店铺ID】集合 可逗号隔开
     *
     * @return self
     */
    public function setPlatformShopIds($platform_shop_ids)
    {
        if (is_null($platform_shop_ids)) {
            throw new \InvalidArgumentException('non-nullable platform_shop_ids cannot be null');
        }
        $this->container['platform_shop_ids'] = $platform_shop_ids;

        return $this;
    }

    /**
     * Gets row_ids
     *
     * @return string|null
     */
    public function getRowIds()
    {
        return $this->container['row_ids'];
    }

    /**
     * Sets row_ids
     *
     * @param string|null $row_ids row_ids
     *
     * @return self
     */
    public function setRowIds($row_ids)
    {
        if (is_null($row_ids)) {
            throw new \InvalidArgumentException('non-nullable row_ids cannot be null');
        }
        $this->container['row_ids'] = $row_ids;

        return $this;
    }

    /**
     * Gets platform_goods_ids
     *
     * @return string|null
     */
    public function getPlatformGoodsIds()
    {
        return $this->container['platform_goods_ids'];
    }

    /**
     * Sets platform_goods_ids
     *
     * @param string|null $platform_goods_ids 【API-商品ID】集合 可逗号隔开
     *
     * @return self
     */
    public function setPlatformGoodsIds($platform_goods_ids)
    {
        if (is_null($platform_goods_ids)) {
            throw new \InvalidArgumentException('non-nullable platform_goods_ids cannot be null');
        }
        $this->container['platform_goods_ids'] = $platform_goods_ids;

        return $this;
    }

    /**
     * Gets platform_order_ids
     *
     * @return string|null
     */
    public function getPlatformOrderIds()
    {
        return $this->container['platform_order_ids'];
    }

    /**
     * Sets platform_order_ids
     *
     * @param string|null $platform_order_ids 【API-订单ID】集合 可逗号隔开
     *
     * @return self
     */
    public function setPlatformOrderIds($platform_order_ids)
    {
        if (is_null($platform_order_ids)) {
            throw new \InvalidArgumentException('non-nullable platform_order_ids cannot be null');
        }
        $this->container['platform_order_ids'] = $platform_order_ids;

        return $this;
    }

    /**
     * Gets platform_after_sale_ids
     *
     * @return string|null
     */
    public function getPlatformAfterSaleIds()
    {
        return $this->container['platform_after_sale_ids'];
    }

    /**
     * Sets platform_after_sale_ids
     *
     * @param string|null $platform_after_sale_ids 【API-售后ID】集合 可逗号隔开
     *
     * @return self
     */
    public function setPlatformAfterSaleIds($platform_after_sale_ids)
    {
        if (is_null($platform_after_sale_ids)) {
            throw new \InvalidArgumentException('non-nullable platform_after_sale_ids cannot be null');
        }
        $this->container['platform_after_sale_ids'] = $platform_after_sale_ids;

        return $this;
    }

    /**
     * Gets create_start_time
     *
     * @return string|null
     */
    public function getCreateStartTime()
    {
        return $this->container['create_start_time'];
    }

    /**
     * Sets create_start_time
     *
     * @param string|null $create_start_time 创建开始时间，格式： yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setCreateStartTime($create_start_time)
    {
        if (is_null($create_start_time)) {
            throw new \InvalidArgumentException('non-nullable create_start_time cannot be null');
        }
        $this->container['create_start_time'] = $create_start_time;

        return $this;
    }

    /**
     * Gets create_end_time
     *
     * @return string|null
     */
    public function getCreateEndTime()
    {
        return $this->container['create_end_time'];
    }

    /**
     * Sets create_end_time
     *
     * @param string|null $create_end_time 创建结束时间，格式： yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setCreateEndTime($create_end_time)
    {
        if (is_null($create_end_time)) {
            throw new \InvalidArgumentException('non-nullable create_end_time cannot be null');
        }
        $this->container['create_end_time'] = $create_end_time;

        return $this;
    }

    /**
     * Gets update_start_time
     *
     * @return string|null
     */
    public function getUpdateStartTime()
    {
        return $this->container['update_start_time'];
    }

    /**
     * Sets update_start_time
     *
     * @param string|null $update_start_time 数据更新开始时间，格式： yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setUpdateStartTime($update_start_time)
    {
        if (is_null($update_start_time)) {
            throw new \InvalidArgumentException('non-nullable update_start_time cannot be null');
        }
        $this->container['update_start_time'] = $update_start_time;

        return $this;
    }

    /**
     * Gets update_end_time
     *
     * @return string|null
     */
    public function getUpdateEndTime()
    {
        return $this->container['update_end_time'];
    }

    /**
     * Sets update_end_time
     *
     * @param string|null $update_end_time 数据更新结束时间，格式： yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setUpdateEndTime($update_end_time)
    {
        if (is_null($update_end_time)) {
            throw new \InvalidArgumentException('non-nullable update_end_time cannot be null');
        }
        $this->container['update_end_time'] = $update_end_time;

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


