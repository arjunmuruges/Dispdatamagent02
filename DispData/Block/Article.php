<?php

namespace Arjun\DispData\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Arjun\DispData\Model\ResourceModel\View\CollectionFactory as ViewCollectionFactory;

class Article extends Template
{
    
    protected $_viewCollectionFactory = null;

   
    public function __construct(
        Context $context,
        ViewCollectionFactory $viewCollectionFactory,
        array $data = []
    ) {
        $this->_viewCollectionFactory  = $viewCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getCollection()
    {
        
        $viewCollection = $this->_viewCollectionFactory ->create();
        $viewCollection->addFieldToSelect('*')->load();
        return $viewCollection->getItems();
    }
}