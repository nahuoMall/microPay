<?php
/**
 * PaymentNotifyUrl.
 *
 * @category Class
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 */

/**
 * NOTE: File generated from our OpenAPI spec (https://business.tenpay.com).
 * https://business.tenpay.com
 * Do not edit the class manually.
 */

namespace Entpay\Mse\Client\Model;

use ArrayAccess;
use Entpay\Mse\Client\ObjectSerializer;
use JsonSerializable;

/**
 * PaymentNotifyUrl Class Doc Comment.
 *
 * @category Class
 * @description 支付异步回调信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentNotifyUrl implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PaymentNotifyUrl';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'server_notify_url'  => 'string',
        'front_callback_url' => '\Entpay\Mse\Client\Model\FrontCallbackUrl',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'server_notify_url'  => null,
        'front_callback_url' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'server_notify_url'  => 'server_notify_url',
        'front_callback_url' => 'front_callback_url',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'server_notify_url'  => 'setServerNotifyUrl',
        'front_callback_url' => 'setFrontCallbackUrl',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'server_notify_url'  => 'getServerNotifyUrl',
        'front_callback_url' => 'getFrontCallbackUrl',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    public $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['server_notify_url']  = isset($data['server_notify_url']) ? $data['server_notify_url'] : null;
        $this->container['front_callback_url'] = isset($data['front_callback_url']) ? $data['front_callback_url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['server_notify_url']) {
            $invalidProperties[] = "'server_notify_url' can't be null";
        }
        if ((mb_strlen($this->container['server_notify_url']) > 256)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be smaller than or equal to 256.";
        }

        if ((mb_strlen($this->container['server_notify_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'server_notify_url', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^https?:\/\/[^?]+/", $this->container['server_notify_url'])) {
            $invalidProperties[] = "invalid value for 'server_notify_url', must be conform to the pattern /^https?:\/\/[^?]+/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets server_notify_url.
     *
     * @return string
     */
    public function getServerNotifyUrl()
    {
        return $this->container['server_notify_url'];
    }

    /**
     * Sets server_notify_url.
     *
     * @param string $server_notify_url 后端支付结果通知url
     *
     * @return self
     */
    public function setServerNotifyUrl($server_notify_url)
    {
        $this->container['server_notify_url'] = $server_notify_url;

        return $this;
    }

    /**
     * Gets front_callback_url.
     *
     * @return \Entpay\Mse\Client\Model\FrontCallbackUrl|null
     */
    public function getFrontCallbackUrl()
    {
        return $this->container['front_callback_url'];
    }

    /**
     * Sets front_callback_url.
     *
     * @param \Entpay\Mse\Client\Model\FrontCallbackUrl|null $front_callback_url front_callback_url
     *
     * @return self
     */
    public function setFrontCallbackUrl($front_callback_url)
    {
        $this->container['front_callback_url'] = $front_callback_url;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object.
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
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
