<?php

namespace Arjun\DispData\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class View extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('customer_grid_flat', 'entity_id');
    }
}