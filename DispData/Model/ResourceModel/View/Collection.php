<?php
namespace Arjun\DispData\Model\ResourceModel\View;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
   
    protected function _construct()
    {
        $this->_init(\Arjun\DispData\Model\View::class, \Arjun\DispData\Model\ResourceModel\View::class);
    }
}