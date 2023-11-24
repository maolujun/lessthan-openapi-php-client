<?php
/**
 * ApiOrderVo
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
 * ApiOrderVo Class Doc Comment
 *
 * @category Class
 * @description 订单
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiOrderVo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiOrderVo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'platform_shop_id' => 'string',
        'platform_order_id' => 'string',
        'third_platform' => 'string',
        'platform_shop_no' => 'string',
        'order_no' => 'string',
        'order_create_time' => 'string',
        'order_count' => 'int',
        'pay_amount' => 'float',
        'order_status' => 'string',
        'order_status_value' => 'string',
        'receiver' => 'string',
        'receiver_tel' => 'string',
        'receiver_addr' => 'string',
        'buyer_remark' => 'string',
        'other_info' => 'string',
        'sku_list' => '\OpenAPI\Client\com.lessthan.openapi.model\ApiOrderGoodsSkuVo[]',
        'logistics_list' => '\OpenAPI\Client\com.lessthan.openapi.model\ApiOrderLogisticsVo[]',
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
        'platform_shop_id' => null,
        'platform_order_id' => null,
        'third_platform' => null,
        'platform_shop_no' => null,
        'order_no' => null,
        'order_create_time' => null,
        'order_count' => null,
        'pay_amount' => null,
        'order_status' => null,
        'order_status_value' => null,
        'receiver' => null,
        'receiver_tel' => null,
        'receiver_addr' => null,
        'buyer_remark' => null,
        'other_info' => null,
        'sku_list' => null,
        'logistics_list' => null,
        'update_time' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'platform_shop_id' => false,
		'platform_order_id' => false,
		'third_platform' => false,
		'platform_shop_no' => false,
		'order_no' => false,
		'order_create_time' => false,
		'order_count' => false,
		'pay_amount' => false,
		'order_status' => false,
		'order_status_value' => false,
		'receiver' => false,
		'receiver_tel' => false,
		'receiver_addr' => false,
		'buyer_remark' => false,
		'other_info' => false,
		'sku_list' => false,
		'logistics_list' => false,
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
        'platform_shop_id' => 'platformShopId',
        'platform_order_id' => 'platformOrderId',
        'third_platform' => 'thirdPlatform',
        'platform_shop_no' => 'platformShopNo',
        'order_no' => 'orderNo',
        'order_create_time' => 'orderCreateTime',
        'order_count' => 'orderCount',
        'pay_amount' => 'payAmount',
        'order_status' => 'orderStatus',
        'order_status_value' => 'orderStatusValue',
        'receiver' => 'receiver',
        'receiver_tel' => 'receiverTel',
        'receiver_addr' => 'receiverAddr',
        'buyer_remark' => 'buyerRemark',
        'other_info' => 'otherInfo',
        'sku_list' => 'skuList',
        'logistics_list' => 'logisticsList',
        'update_time' => 'updateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'platform_shop_id' => 'setPlatformShopId',
        'platform_order_id' => 'setPlatformOrderId',
        'third_platform' => 'setThirdPlatform',
        'platform_shop_no' => 'setPlatformShopNo',
        'order_no' => 'setOrderNo',
        'order_create_time' => 'setOrderCreateTime',
        'order_count' => 'setOrderCount',
        'pay_amount' => 'setPayAmount',
        'order_status' => 'setOrderStatus',
        'order_status_value' => 'setOrderStatusValue',
        'receiver' => 'setReceiver',
        'receiver_tel' => 'setReceiverTel',
        'receiver_addr' => 'setReceiverAddr',
        'buyer_remark' => 'setBuyerRemark',
        'other_info' => 'setOtherInfo',
        'sku_list' => 'setSkuList',
        'logistics_list' => 'setLogisticsList',
        'update_time' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'platform_shop_id' => 'getPlatformShopId',
        'platform_order_id' => 'getPlatformOrderId',
        'third_platform' => 'getThirdPlatform',
        'platform_shop_no' => 'getPlatformShopNo',
        'order_no' => 'getOrderNo',
        'order_create_time' => 'getOrderCreateTime',
        'order_count' => 'getOrderCount',
        'pay_amount' => 'getPayAmount',
        'order_status' => 'getOrderStatus',
        'order_status_value' => 'getOrderStatusValue',
        'receiver' => 'getReceiver',
        'receiver_tel' => 'getReceiverTel',
        'receiver_addr' => 'getReceiverAddr',
        'buyer_remark' => 'getBuyerRemark',
        'other_info' => 'getOtherInfo',
        'sku_list' => 'getSkuList',
        'logistics_list' => 'getLogisticsList',
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
        $this->setIfExists('platform_shop_id', $data ?? [], null);
        $this->setIfExists('platform_order_id', $data ?? [], null);
        $this->setIfExists('third_platform', $data ?? [], null);
        $this->setIfExists('platform_shop_no', $data ?? [], null);
        $this->setIfExists('order_no', $data ?? [], null);
        $this->setIfExists('order_create_time', $data ?? [], null);
        $this->setIfExists('order_count', $data ?? [], null);
        $this->setIfExists('pay_amount', $data ?? [], null);
        $this->setIfExists('order_status', $data ?? [], null);
        $this->setIfExists('order_status_value', $data ?? [], null);
        $this->setIfExists('receiver', $data ?? [], null);
        $this->setIfExists('receiver_tel', $data ?? [], null);
        $this->setIfExists('receiver_addr', $data ?? [], null);
        $this->setIfExists('buyer_remark', $data ?? [], null);
        $this->setIfExists('other_info', $data ?? [], null);
        $this->setIfExists('sku_list', $data ?? [], null);
        $this->setIfExists('logistics_list', $data ?? [], null);
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
     * Gets platform_order_id
     *
     * @return string|null
     */
    public function getPlatformOrderId()
    {
        return $this->container['platform_order_id'];
    }

    /**
     * Sets platform_order_id
     *
     * @param string|null $platform_order_id 订单ID，唯一值
     *
     * @return self
     */
    public function setPlatformOrderId($platform_order_id)
    {
        if (is_null($platform_order_id)) {
            throw new \InvalidArgumentException('non-nullable platform_order_id cannot be null');
        }
        $this->container['platform_order_id'] = $platform_order_id;

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
     * Gets order_no
     *
     * @return string|null
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param string|null $order_no 订单编号
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
     * Gets order_create_time
     *
     * @return string|null
     */
    public function getOrderCreateTime()
    {
        return $this->container['order_create_time'];
    }

    /**
     * Sets order_create_time
     *
     * @param string|null $order_create_time 下单时间，格式： yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setOrderCreateTime($order_create_time)
    {
        if (is_null($order_create_time)) {
            throw new \InvalidArgumentException('non-nullable order_create_time cannot be null');
        }
        $this->container['order_create_time'] = $order_create_time;

        return $this;
    }

    /**
     * Gets order_count
     *
     * @return int|null
     */
    public function getOrderCount()
    {
        return $this->container['order_count'];
    }

    /**
     * Sets order_count
     *
     * @param int|null $order_count 下单数量
     *
     * @return self
     */
    public function setOrderCount($order_count)
    {
        if (is_null($order_count)) {
            throw new \InvalidArgumentException('non-nullable order_count cannot be null');
        }
        $this->container['order_count'] = $order_count;

        return $this;
    }

    /**
     * Gets pay_amount
     *
     * @return float|null
     */
    public function getPayAmount()
    {
        return $this->container['pay_amount'];
    }

    /**
     * Sets pay_amount
     *
     * @param float|null $pay_amount 支付金额，最多保留4位小数
     *
     * @return self
     */
    public function setPayAmount($pay_amount)
    {
        if (is_null($pay_amount)) {
            throw new \InvalidArgumentException('non-nullable pay_amount cannot be null');
        }
        $this->container['pay_amount'] = $pay_amount;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string|null $order_status 订单状态，如：已关闭，见【字典数据】
     *
     * @return self
     */
    public function setOrderStatus($order_status)
    {
        if (is_null($order_status)) {
            throw new \InvalidArgumentException('non-nullable order_status cannot be null');
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets order_status_value
     *
     * @return string|null
     */
    public function getOrderStatusValue()
    {
        return $this->container['order_status_value'];
    }

    /**
     * Sets order_status_value
     *
     * @param string|null $order_status_value 订单状态值，如：4，见【字典数据】
     *
     * @return self
     */
    public function setOrderStatusValue($order_status_value)
    {
        if (is_null($order_status_value)) {
            throw new \InvalidArgumentException('non-nullable order_status_value cannot be null');
        }
        $this->container['order_status_value'] = $order_status_value;

        return $this;
    }

    /**
     * Gets receiver
     *
     * @return string|null
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param string|null $receiver 收货人
     *
     * @return self
     */
    public function setReceiver($receiver)
    {
        if (is_null($receiver)) {
            throw new \InvalidArgumentException('non-nullable receiver cannot be null');
        }
        $this->container['receiver'] = $receiver;

        return $this;
    }

    /**
     * Gets receiver_tel
     *
     * @return string|null
     */
    public function getReceiverTel()
    {
        return $this->container['receiver_tel'];
    }

    /**
     * Sets receiver_tel
     *
     * @param string|null $receiver_tel 收货人电话
     *
     * @return self
     */
    public function setReceiverTel($receiver_tel)
    {
        if (is_null($receiver_tel)) {
            throw new \InvalidArgumentException('non-nullable receiver_tel cannot be null');
        }
        $this->container['receiver_tel'] = $receiver_tel;

        return $this;
    }

    /**
     * Gets receiver_addr
     *
     * @return string|null
     */
    public function getReceiverAddr()
    {
        return $this->container['receiver_addr'];
    }

    /**
     * Sets receiver_addr
     *
     * @param string|null $receiver_addr 收货人地址
     *
     * @return self
     */
    public function setReceiverAddr($receiver_addr)
    {
        if (is_null($receiver_addr)) {
            throw new \InvalidArgumentException('non-nullable receiver_addr cannot be null');
        }
        $this->container['receiver_addr'] = $receiver_addr;

        return $this;
    }

    /**
     * Gets buyer_remark
     *
     * @return string|null
     */
    public function getBuyerRemark()
    {
        return $this->container['buyer_remark'];
    }

    /**
     * Sets buyer_remark
     *
     * @param string|null $buyer_remark 买家备注
     *
     * @return self
     */
    public function setBuyerRemark($buyer_remark)
    {
        if (is_null($buyer_remark)) {
            throw new \InvalidArgumentException('non-nullable buyer_remark cannot be null');
        }
        $this->container['buyer_remark'] = $buyer_remark;

        return $this;
    }

    /**
     * Gets other_info
     *
     * @return string|null
     */
    public function getOtherInfo()
    {
        return $this->container['other_info'];
    }

    /**
     * Sets other_info
     *
     * @param string|null $other_info 其他信息JSON字符串，每个平台定制字段，见【字典数据】
     *
     * @return self
     */
    public function setOtherInfo($other_info)
    {
        if (is_null($other_info)) {
            throw new \InvalidArgumentException('non-nullable other_info cannot be null');
        }
        $this->container['other_info'] = $other_info;

        return $this;
    }

    /**
     * Gets sku_list
     *
     * @return \OpenAPI\Client\com.lessthan.openapi.model\ApiOrderGoodsSkuVo[]|null
     */
    public function getSkuList()
    {
        return $this->container['sku_list'];
    }

    /**
     * Sets sku_list
     *
     * @param \OpenAPI\Client\com.lessthan.openapi.model\ApiOrderGoodsSkuVo[]|null $sku_list 商品列表，订单的商品信息，包括一个订单多个商品
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
     * Gets logistics_list
     *
     * @return \OpenAPI\Client\com.lessthan.openapi.model\ApiOrderLogisticsVo[]|null
     */
    public function getLogisticsList()
    {
        return $this->container['logistics_list'];
    }

    /**
     * Sets logistics_list
     *
     * @param \OpenAPI\Client\com.lessthan.openapi.model\ApiOrderLogisticsVo[]|null $logistics_list 物流信息列表
     *
     * @return self
     */
    public function setLogisticsList($logistics_list)
    {
        if (is_null($logistics_list)) {
            throw new \InvalidArgumentException('non-nullable logistics_list cannot be null');
        }
        $this->container['logistics_list'] = $logistics_list;

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


