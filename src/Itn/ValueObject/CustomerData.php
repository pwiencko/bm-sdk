<?php
declare(strict_types=1);

namespace BlueMedia\Itn\ValueObject;

use BlueMedia\Common\ValueObject\AbstractValueObject;
use BlueMedia\Serializer\SerializableInterface;
use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\Type;

/**
 * @AccessorOrder("custom",
 *     custom = {
 *      "fName",
 *      "lName",
 *      "streetName",
 *      "streetHouseNo",
 *      "streetStaircaseNo",
 *      "streetPremiseNo",
 *      "postalCode",
 *      "city",
 *      "nrb",
 *      "senderData",
 * })
 */
final class CustomerData extends AbstractValueObject implements SerializableInterface
{
    /**
     * Customer firstname.
     *
     * @var string
     * @Type("string")
     */
    protected string $fName;

    /**
     * Customer lastname.
     *
     * @var string
     * @Type("string")
     */
    protected string $lName;

    /**
     * Customer street name.
     *
     * @var string
     * @Type("string")
     */
    protected string $streetName;

    /**
     * Customer house number.
     *
     * @var string
     * @Type("string")
     */
    protected string $streetHouseNo;

    /**
     * Customer staircase number.
     *
     * @var string
     * @Type("string")
     */
    protected string $streetStaircaseNo;

    /**
     * Customer premise number.
     *
     * @var string
     * @Type("string")
     */
    protected string $streetPremiseNo;

    /**
     * Customer postal code.
     *
     * @var string
     * @Type("string")
     */
    protected string $postalCode;

    /**
     * Customer city.
     *
     * @var string
     * @Type("string")
     */
    protected string $city;

    /**
     * Customer bank account number.
     *
     * @var string
     * @Type("string")
     */
    protected string $nrb;

    /**
     * Merged customer data.
     *
     * @var string
     * @Type("string")
     */
    protected string $senderData;

    /**
     * @return string
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * @return string
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @return string
     */
    public function getStreetHouseNo()
    {
        return $this->streetHouseNo;
    }

    /**
     * @return string
     */
    public function getStreetStaircaseNo()
    {
        return $this->streetStaircaseNo;
    }

    /**
     * @return string
     */
    public function getStreetPremiseNo()
    {
        return $this->streetPremiseNo;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getNrb()
    {
        return $this->nrb;
    }

    /**
     * @return string
     */
    public function getSenderData()
    {
        return $this->senderData;
    }
}
