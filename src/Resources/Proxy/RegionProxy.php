<?php

namespace MyParcelCom\Sdk\Resources\Proxy;

use MyParcelCom\Sdk\Resources\Interfaces\RegionInterface;
use MyParcelCom\Sdk\Resources\Interfaces\ResourceInterface;
use MyParcelCom\Sdk\Resources\Interfaces\ResourceProxyInterface;
use MyParcelCom\Sdk\Resources\Traits\JsonSerializable;
use MyParcelCom\Sdk\Resources\Traits\ProxiesResource;

class RegionProxy implements RegionInterface, ResourceProxyInterface
{
    use JsonSerializable;
    use ProxiesResource;

    /** @var string */
    private $id;
    /** @var string */
    private $type = ResourceInterface::TYPE_REGION;

    /**
     * Set the identifier for this file.
     *
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $countryCode
     * @return $this
     */
    public function setCountryCode($countryCode)
    {
        $this->getResource()->setCountryCode($countryCode);

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->getResource()->getCountryCode();
    }

    /**
     * @param string $regionCode
     * @return $this
     */
    public function setRegionCode($regionCode)
    {
        $this->getResource()->setRegionCode($regionCode);

        return $this;
    }

    /**
     * @return string
     */
    public function getRegionCode()
    {
        return $this->getResource()->getRegionCode();
    }

    /**
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->getResource()->setCurrency($currency);

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->getResource()->getCurrency();
    }

    /**
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->getResource()->setName($name);

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getResource()->getName();
    }

    /**
     * This function puts all object properties in an array and returns it.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        $values = get_object_vars($this);
        unset($values['resource']);
        unset($values['api']);

        return $this->arrayValuesToArray($values);
    }
}
