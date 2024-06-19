<?php
declare(strict_types=1);

namespace BlueMedia\PaywayList\ValueObject\PaywayListResponse;

use JMS\Serializer\Annotation\Type;

final class Gateway
{
    /**
     * @var int
     * @Type("int")
     */
    private int $gatewayID;

    /**
     * @var string
     * @Type("string")
     */
    private string $gatewayName;

    /**
     * @var string
     * @Type("string")
     */
    private string $gatewayType;

    /**
     * @var string
     * @Type("string")
     */
    private string $bankName;

    /**
     * @var string
     * @Type("string")
     */
    private string $iconURL;

    /**
     * @var string
     * @Type("string")
     */
    private string $statusDate;

    /**
     * @return int
     */
    public function getGatewayID(): int
    {
        return $this->gatewayID;
    }

    /**
     * @return string
     */
    public function getGatewayName(): string
    {
        return $this->gatewayName;
    }

    /**
     * @return string
     */
    public function getGatewayType(): string
    {
        return $this->gatewayType;
    }

    /**
     * @return string
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }

    /**
     * @return string
     */
    public function getIconURL(): string
    {
        return $this->iconURL;
    }

    /**
     * @return string
     */
    public function getStatusDate(): string
    {
        return $this->statusDate;
    }
}
