<?php
declare(strict_types=1);

namespace BlueMedia\RegulationList\ValueObject\RegulationListResponse;

use JMS\Serializer\Annotation\Type;
use BlueMedia\RegulationList\ValueObject\RegulationList;
use BlueMedia\RegulationList\ValueObject\RegulationListResponse\Regulations;

final class RegulationListResponse extends RegulationList
{
    /**
     * @var Regulations
     * @Type("BlueMedia\RegulationList\ValueObject\RegulationListResponse\Regulations")
     */
    private Regulations $regulations;

    /**
     * @return Regulations
     */
    public function getRegulations(): Regulations
    {
        return $this->regulations;
    }
}
