<?php

namespace MyParcelCom\Sdk\Resources\Proxy;

use DateTime;
use MyParcelCom\Sdk\Resources\Interfaces\AddressInterface;
use MyParcelCom\Sdk\Resources\Interfaces\RegionInterface;
use MyParcelCom\Sdk\Resources\Interfaces\ResourceInterface;
use MyParcelCom\Sdk\Resources\Interfaces\ResourceProxyInterface;
use MyParcelCom\Sdk\Resources\Interfaces\ShopInterface;
use MyParcelCom\Sdk\Resources\Traits\JsonSerializable;
use MyParcelCom\Sdk\Resources\Traits\ProxiesResource;

class ShopProxy implements ShopInterface, ResourceProxyInterface
{
    use JsonSerializable;
    use ProxiesResource;

    /** @var string */
    private $id;
    /** @var string */
    private $type = ResourceInterface::TYPE_SHOP;

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
     * @param $name
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
     * @param AddressInterface $billingAddress
     * @return $this
     */
    public function setBillingAddress(AddressInterface $billingAddress)
    {
        $this->getResource()->setBillingAddress($billingAddress);

        return $this;
    }

    /**
     * @return AddressInterface
     */
    public function getBillingAddress()
    {
        return $this->getResource()->getBillingAddress();
    }

    /**
     * @param AddressInterface $returnAddress
     * @return $this
     */
    public function setReturnAddress(AddressInterface $returnAddress)
    {
        $this->getResource()->setReturnAddress($returnAddress);

        return $this;
    }

    /**
     * @return AddressInterface
     */
    public function getReturnAddress()
    {
        return $this->getResource()->getReturnAddress();
    }

    /**
     * @param RegionInterface $region
     * @return $this
     */
    public function setRegion(RegionInterface $region)
    {
        $this->getResource()->setRegion($region);

        return $this;
    }

    /**
     * @return RegionInterface
     */
    public function getRegion()
    {
        return $this->getResource()->getRegion();
    }

    /**
     * @param int|DateTime $time
     * @return $this
     */
    public function setCreatedAt($time)
    {
        $this->getResource()->setCreatedAt($time);

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->getResource()->getCreatedAt();
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
