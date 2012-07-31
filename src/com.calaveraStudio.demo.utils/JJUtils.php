<?php
include '../com.calaveraStudio.demo.to/TOPublicacion.php';
include '../com.calaveraStudio.demo.lib/JSON.php';

/**
 * 
 */
class JJUtils{
	
	function __construct() {
		
	}
    
    public function jsonToPublica($obj){
        $bean = new TOPublicacion();
        $arrayName = array();
        
        $arrayName = $this->jsonToArray($obj);
        $bean->setTitulo($arrayName->titulo);
        $bean->setDescripcion($arrayName->desc);
        $bean->setPublicar($arrayName->publica);
        $bean->setImgName($arrayName->imgName);
        return $bean;
    }
    
    private function jsonToArray($obj){
        $json = new Services_JSON();
        $arrayName = array();
        $arrayName = $json->decode($obj);
        return $arrayName;
    }
}

?>