<?php
include_once '../com.calaveraStudio.demo.lib.spyc/spyc.php';

/**
 * 
 */
class Config{
	private $properties;
	function __construct() {
		$this->properties = Spyc::YAMLLoad('../com.calaveraStudio.demo.config/Config.yaml');
	}
    
    /**
     * fonfiguraciones para paths
     */
     
     public function getBasePath(){
         return $this->properties['path']['basePath'];
     }
     
     public function getPathImg(){
         return $this->properties['path']['pathIMGPublicidad'];
     }

}
?>