<?php

namespace EFLOWSimulacion\Client\Model;

interface ModelInterface
{
    
    public function getModelName();
    
    public static function EFLOWSimulacionTypes();
    
    public static function EFLOWSimulacionFormats();
    
    public static function attributeMap();
    
    public static function setters();
    
    public static function getters();
    
    public function listInvalidProperties();
    
    public function valid();
}
