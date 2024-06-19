<?php
declare(strict_types=1);

namespace BlueMedia\Confirmation\ValueObject;

use BlueMedia\Hash\HashableInterface;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\AccessorOrder;
use BlueMedia\Serializer\SerializableInterface;
use BlueMedia\Common\ValueObject\AbstractValueObject;

/**
 * @AccessorOrder("custom",
 *     custom = {
 *      "serviceID",
 *      "orderID",
 *      "hash"
 * })
 */
class Confirmation extends AbstractValueObject implements SerializableInterface, HashableInterface
{
    /**
     * @var string
     * @Type("string")
     */
    private string $ServiceID;

    /**
     * @var string
     * @Type("string")
     */
    private string $OrderID;

    /**
     * Transaction hash.
     *
     * @var string
     * @Type("string")
     */
    private string $Hash;

    /**
     * @return string
     */
    public function getServiceID(): string
    {
        return $this->ServiceID;
    }

    /**
     * @return string
     */
    public function getOrderID(): string
    {
        return $this->OrderID;
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
        return $this->Hash;
    }

    public function isHashPresent(): bool
    {
        return $this->Hash !== null;
    }
}
