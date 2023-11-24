<?php
/**
 * ApiGoodsVo
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
 * ApiGoodsVo Class Doc Comment
 *
 * @category Class
 * @description 商品
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiGoodsVo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiGoodsVo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'platform_goods_id' => 'string',
        'platform_shop_id' => 'string',
        'third_platform' => 'string',
        'platform_shop_no' => 'string',
        'platform_goods_no' => 'string',
        'goods_logo' => 'string',
        'goods_title' => 'string',
        'goods_sn' => 'string',
        'goods_detail' => 'string',
        'goods_price' => 'float',
        'goods_create_time' => 'string',
        'sale_status' => 'string',
        'sku_list' => '\OpenAPI\Client\com.lessthan.openapi.model\ApiGoodsSkuVo[]',
        'update_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'platform_goods_id' => null,
        'platform_shop_id' => null,
        'third_platform' => null,
        'platform_shop_no' => null,
        'platform_goods_no' => null,
        'goods_logo' => null,
        'goods_title' => null,
        'goods_sn' => null,
        'goods_detail' => null,
        'goods_price' => null,
        'goods_create_time' => null,
        'sale_status' => null,
        'sku_list' => null,
        'update_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'platform_goods_id' => false,
		'platform_shop_id' => false,
		'third_platform' => false,
		'platform_shop_no' => false,
		'platform_goods_no' => false,
		'goods_logo' => false,
		'goods_title' => false,
		'goods_sn' => false,
		'goods_detail' => false,
		'goods_price' => false,
		'goods_create_time' => false,
		'sale_status' => false,
		'sku_list' => false,
		'update_time' => false
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
        'platform_goods_id' => 'platformGoodsId',
        'platform_shop_id' => 'platformShopId',
        'third_platform' => 'thirdPlatform',
        'platform_shop_no' => 'platformShopNo',
        'platform_goods_no' => 'platformGoodsNo',
        'goods_logo' => 'goodsLogo',
        'goods_title' => 'goodsTitle',
        'goods_sn' => 'goodsSn',
        'goods_detail' => 'goodsDetail',
        'goods_price' => 'goodsPrice',
        'goods_create_time' => 'goodsCreateTime',
        'sale_status' => 'saleStatus',
        'sku_list' => 'skuList',
        'update_time' => 'updateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'platform_goods_id' => 'setPlatformGoodsId',
        'platform_shop_id' => 'setPlatformShopId',
        'third_platform' => 'setThirdPlatform',
        'platform_shop_no' => 'setPlatformShopNo',
        'platform_goods_no' => 'setPlatformGoodsNo',
        'goods_logo' => 'setGoodsLogo',
        'goods_title' => 'setGoodsTitle',
        'goods_sn' => 'setGoodsSn',
        'goods_detail' => 'setGoodsDetail',
        'goods_price' => 'setGoodsPrice',
        'goods_create_time' => 'setGoodsCreateTime',
        'sale_status' => 'setSaleStatus',
        'sku_list' => 'setSkuList',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'platform_goods_id' => 'getPlatformGoodsId',
        'platform_shop_id' => 'getPlatformShopId',
        'third_platform' => 'getThirdPlatform',
        'platform_shop_no' => 'getPlatformShopNo',
        'platform_goods_no' => 'getPlatformGoodsNo',
        'goods_logo' => 'getGoodsLogo',
        'goods_title' => 'getGoodsTitle',
        'goods_sn' => 'getGoodsSn',
        'goods_detail' => 'getGoodsDetail',
        'goods_price' => 'getGoodsPrice',
        'goods_create_time' => 'getGoodsCreateTime',
        'sale_status' => 'getSaleStatus',
        'sku_list' => 'getSkuList',
        'update_time' => 'getUpdateTime'
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
        $this->setIfExists('platform_goods_id', $data ?? [], null);
        $this->setIfExists('platform_shop_id', $data ?? [], null);
        $this->setIfExists('third_platform', $data ?? [], null);
        $this->setIfExists('platform_shop_no', $data ?? [], null);
        $this->setIfExists('platform_goods_no', $data ?? [], null);
        $this->setIfExists('goods_logo', $data ?? [], null);
        $this->setIfExists('goods_title', $data ?? [], null);
        $this->setIfExists('goods_sn', $data ?? [], null);
        $this->setIfExists('goods_detail', $data ?? [], null);
        $this->setIfExists('goods_price', $data ?? [], null);
        $this->setIfExists('goods_create_time', $data ?? [], null);
        $this->setIfExists('sale_status', $data ?? [], null);
        $this->setIfExists('sku_list', $data ?? [], null);
        $this->setIfExists('update_time', $data ?? [], null);
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
     * Gets platform_goods_id
     *
     * @return string|null
     */
    public function getPlatformGoodsId()
    {
        return $this->container['platform_goods_id'];
    }

    /**
     * Sets platform_goods_id
     *
     * @param string|null $platform_goods_id 商品ID，唯一值
     *
     * @return self
     */
    public function setPlatformGoodsId($platform_goods_id)
    {
        if (is_null($platform_goods_id)) {
            throw new \InvalidArgumentException('non-nullable platform_goods_id cannot be null');
        }
        $this->container['platform_goods_id'] = $platform_goods_id;

        return $this;
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
     * Gets platform_goods_no
     *
     * @return string|null
     */
    public function getPlatformGoodsNo()
    {
        return $this->container['platform_goods_no'];
    }

    /**
     * Sets platform_goods_no
     *
     * @param string|null $platform_goods_no 平台商品ID
     *
     * @return self
     */
    public function setPlatformGoodsNo($platform_goods_no)
    {
        if (is_null($platform_goods_no)) {
            throw new \InvalidArgumentException('non-nullable platform_goods_no cannot be null');
        }
        $this->container['platform_goods_no'] = $platform_goods_no;

        return $this;
    }

    /**
     * Gets goods_logo
     *
     * @return string|null
     */
    public function getGoodsLogo()
    {
        return $this->container['goods_logo'];
    }

    /**
     * Sets goods_logo
     *
     * @param string|null $goods_logo 商品图片
     *
     * @return self
     */
    public function setGoodsLogo($goods_logo)
    {
        if (is_null($goods_logo)) {
            throw new \InvalidArgumentException('non-nullable goods_logo cannot be null');
        }
        $this->container['goods_logo'] = $goods_logo;

        return $this;
    }

    /**
     * Gets goods_title
     *
     * @return string|null
     */
    public function getGoodsTitle()
    {
        return $this->container['goods_title'];
    }

    /**
     * Sets goods_title
     *
     * @param string|null $goods_title 商品标题
     *
     * @return self
     */
    public function setGoodsTitle($goods_title)
    {
        if (is_null($goods_title)) {
            throw new \InvalidArgumentException('non-nullable goods_title cannot be null');
        }
        $this->container['goods_title'] = $goods_title;

        return $this;
    }

    /**
     * Gets goods_sn
     *
     * @return string|null
     */
    public function getGoodsSn()
    {
        return $this->container['goods_sn'];
    }

    /**
     * Sets goods_sn
     *
     * @param string|null $goods_sn 商品编码
     *
     * @return self
     */
    public function setGoodsSn($goods_sn)
    {
        if (is_null($goods_sn)) {
            throw new \InvalidArgumentException('non-nullable goods_sn cannot be null');
        }
        $this->container['goods_sn'] = $goods_sn;

        return $this;
    }

    /**
     * Gets goods_detail
     *
     * @return string|null
     */
    public function getGoodsDetail()
    {
        return $this->container['goods_detail'];
    }

    /**
     * Sets goods_detail
     *
     * @param string|null $goods_detail 商品详情
     *
     * @return self
     */
    public function setGoodsDetail($goods_detail)
    {
        if (is_null($goods_detail)) {
            throw new \InvalidArgumentException('non-nullable goods_detail cannot be null');
        }
        $this->container['goods_detail'] = $goods_detail;

        return $this;
    }

    /**
     * Gets goods_price
     *
     * @return float|null
     */
    public function getGoodsPrice()
    {
        return $this->container['goods_price'];
    }

    /**
     * Sets goods_price
     *
     * @param float|null $goods_price 商品参考价，最多保留4位小数
     *
     * @return self
     */
    public function setGoodsPrice($goods_price)
    {
        if (is_null($goods_price)) {
            throw new \InvalidArgumentException('non-nullable goods_price cannot be null');
        }
        $this->container['goods_price'] = $goods_price;

        return $this;
    }

    /**
     * Gets goods_create_time
     *
     * @return string|null
     */
    public function getGoodsCreateTime()
    {
        return $this->container['goods_create_time'];
    }

    /**
     * Sets goods_create_time
     *
     * @param string|null $goods_create_time 商品创建时间，格式： yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setGoodsCreateTime($goods_create_time)
    {
        if (is_null($goods_create_time)) {
            throw new \InvalidArgumentException('non-nullable goods_create_time cannot be null');
        }
        $this->container['goods_create_time'] = $goods_create_time;

        return $this;
    }

    /**
     * Gets sale_status
     *
     * @return string|null
     */
    public function getSaleStatus()
    {
        return $this->container['sale_status'];
    }

    /**
     * Sets sale_status
     *
     * @param string|null $sale_status 上架状态，见【字典数据】
     *
     * @return self
     */
    public function setSaleStatus($sale_status)
    {
        if (is_null($sale_status)) {
            throw new \InvalidArgumentException('non-nullable sale_status cannot be null');
        }
        $this->container['sale_status'] = $sale_status;

        return $this;
    }

    /**
     * Gets sku_list
     *
     * @return \OpenAPI\Client\com.lessthan.openapi.model\ApiGoodsSkuVo[]|null
     */
    public function getSkuList()
    {
        return $this->container['sku_list'];
    }

    /**
     * Sets sku_list
     *
     * @param \OpenAPI\Client\com.lessthan.openapi.model\ApiGoodsSkuVo[]|null $sku_list 商品规格-库存价格列表
     *
     * @return self
     */
    public function setSkuList($sku_list)
    {
        if (is_null($sku_list)) {
            throw new \InvalidArgumentException('non-nullable sku_list cannot be null');
        }
        $this->container['sku_list'] = $sku_list;

        return $this;
    }

    /**
     * Gets update_time
     *
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->container['update_time'];
    }

    /**
     * Sets update_time
     *
     * @param string|null $update_time 数据更新时间，格式： yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setUpdateTime($update_time)
    {
        if (is_null($update_time)) {
            throw new \InvalidArgumentException('non-nullable update_time cannot be null');
        }
        $this->container['update_time'] = $update_time;

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

