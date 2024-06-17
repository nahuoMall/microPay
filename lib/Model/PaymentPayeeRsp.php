<?php
/**
 * PaymentPayeeRsp.
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
 * PaymentPayeeRsp Class Doc Comment.
 *
 * @category Class
 * @description 微企付收款方信息
 * @author   Tencent Business Enterprise Pay Team
 * @see     https://business.tenpay.com
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentPayeeRsp implements ModelInterface, ArrayAccess, JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'PaymentPayeeRsp';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'ent_id'                    => 'string',
        'ent_name'                  => 'string',
        'ent_acct_id'               => 'string',
        'bank_account_number_last4' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'ent_id'                    => null,
        'ent_name'                  => 'decrypted|false',
        'ent_acct_id'               => null,
        'bank_account_number_last4' => null,
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
        'ent_id'                    => 'ent_id',
        'ent_name'                  => 'ent_name',
        'ent_acct_id'               => 'ent_acct_id',
        'bank_account_number_last4' => 'bank_account_number_last4',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'ent_id'                    => 'setEntId',
        'ent_name'                  => 'setEntName',
        'ent_acct_id'               => 'setEntAcctId',
        'bank_account_number_last4' => 'setBankAccountNumberLast4',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'ent_id'                    => 'getEntId',
        'ent_name'                  => 'getEntName',
        'ent_acct_id'               => 'getEntAcctId',
        'bank_account_number_last4' => 'getBankAccountNumberLast4',
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
        $this->container['ent_id']                    = isset($data['ent_id']) ? $data['ent_id'] : null;
        $this->container['ent_name']                  = isset($data['ent_name']) ? $data['ent_name'] : null;
        $this->container['ent_acct_id']               = isset($data['ent_acct_id']) ? $data['ent_acct_id'] : null;
        $this->container['bank_account_number_last4'] = isset($data['bank_account_number_last4']) ? $data['bank_account_number_last4'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['ent_id']) {
            $invalidProperties[] = "'ent_id' can't be null";
        }
        if ((mb_strlen($this->container['ent_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be smaller than or equal to 20.";
        }

        if ((mb_strlen($this->container['ent_id']) < 10)) {
            $invalidProperties[] = "invalid value for 'ent_id', the character length must be bigger than or equal to 10.";
        }

        if (null === $this->container['ent_name']) {
            $invalidProperties[] = "'ent_name' can't be null";
        }
        if ((mb_strlen($this->container['ent_name']) > 128)) {
            $invalidProperties[] = "invalid value for 'ent_name', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['ent_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_name', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['ent_acct_id']) {
            $invalidProperties[] = "'ent_acct_id' can't be null";
        }
        if ((mb_strlen($this->container['ent_acct_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'ent_acct_id', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['ent_acct_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'ent_acct_id', the character length must be bigger than or equal to 1.";
        }

        if (null === $this->container['bank_account_number_last4']) {
            $invalidProperties[] = "'bank_account_number_last4' can't be null";
        }
        if ((mb_strlen($this->container['bank_account_number_last4']) > 4)) {
            $invalidProperties[] = "invalid value for 'bank_account_number_last4', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['bank_account_number_last4']) < 4)) {
            $invalidProperties[] = "invalid value for 'bank_account_number_last4', the character length must be bigger than or equal to 4.";
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
     * Gets ent_id.
     *
     * @return string
     */
    public function getEntId()
    {
        return $this->container['ent_id'];
    }

    /**
     * Sets ent_id.
     *
     * @param string $ent_id 收款商户Id
     *
     * @return self
     */
    public function setEntId($ent_id)
    {
        $this->container['ent_id'] = $ent_id;

        return $this;
    }

    /**
     * Gets ent_name.
     *
     * @return string
     */
    public function getEntName()
    {
        return $this->container['ent_name'];
    }

    /**
     * Sets ent_name.
     *
     * @param string $ent_name 收款商户名称
     *
     * @return self
     */
    public function setEntName($ent_name)
    {
        $this->container['ent_name'] = $ent_name;

        return $this;
    }

    /**
     * Gets ent_acct_id.
     *
     * @return string
     */
    public function getEntAcctId()
    {
        return $this->container['ent_acct_id'];
    }

    /**
     * Sets ent_acct_id.
     *
     * @param string $ent_acct_id 企业账户Id
     *
     * @return self
     */
    public function setEntAcctId($ent_acct_id)
    {
        $this->container['ent_acct_id'] = $ent_acct_id;

        return $this;
    }

    /**
     * Gets bank_account_number_last4.
     *
     * @return string
     */
    public function getBankAccountNumberLast4()
    {
        return $this->container['bank_account_number_last4'];
    }

    /**
     * Sets bank_account_number_last4.
     *
     * @param string $bank_account_number_last4 商户卡后四位
     *
     * @return self
     */
    public function setBankAccountNumberLast4($bank_account_number_last4)
    {
        $this->container['bank_account_number_last4'] = $bank_account_number_last4;

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
