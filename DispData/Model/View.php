<?php

namespace Arjun\DispData\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Arjun\DispData\Api\Data\ViewInterface;


class View extends AbstractModel implements ViewInterface, IdentityInterface
{
    
    const CACHE_TAG = 'Arjun_DispData_view';

    protected function _construct()
    {
        $this->_init('Arjun\DispData\Model\ResourceModel\View');
    }

    public function getName()
    {
        return $this->getData(self::NAME);
    }

    public function getId()
    {
        return $this->getData(self::ID);
    }

    public function getCustomerId()
    {
        return $this->getData(self::CUSTOMERID);
    }


    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    public function setId($entity_id)
    {
        return $this->setData(self::ID, $entity_id);
    }
  
    public function setCustomerId($externalcorp_external_id)
    {
        return $this->setData(self::CUSTOMERID, $externalcorp_external_id);
    }
}