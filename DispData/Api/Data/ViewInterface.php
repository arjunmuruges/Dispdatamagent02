<?php
namespace Arjun\DispData\Api\Data;

interface ViewInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID            = 'entity_id';
    const NAME          = 'name';
    const CUSTOMERID    = 'externalcorp_external_id';
   
    public function getName();
    public function getId();
    public function getCustomerId();

    
    public function setName($name);
    public function setId($entity_id);
    public function setCustomerId($externalcorp_external_id);

}