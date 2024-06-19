<?php
declare(strict_types=1);

namespace BlueMedia\RegulationList\ValueObject\RegulationListResponse;

use JMS\Serializer\Annotation\Type;

final class Regulation
{
    /**
     * @var string
     * @Type("string")
     */
    private string $regulationID;

    /**
     * @var string
     * @Type("string")
     */
    private string $url;

    /**
     * @var string
     * @Type("string")
     */
    private string $type;

    /**
     * @var string
     * @Type("string")
     */
    private string $language;

    /**
     * @return string
     */
    public function getRegulationID(): string
    {
        return $this->regulationID;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
}
