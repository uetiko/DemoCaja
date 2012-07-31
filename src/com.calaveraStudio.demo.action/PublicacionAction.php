<?php
include '../com.calaveraStudio.demo.utils/JJUtils.php';
include '../com.calaveraStudio.demo.utils/PublicaVO.php';
include '../com.calaveraStudio.demo.to/TOPublicacion.php';
include '../com.calaveraStudio.demo.lib/JSON.php';
/**
 * 
 */
class PublicacionAction{
	private $json;
	function __construct() {
		$this->json = new Services_JSON();
	}
    
    public function ExecutePublication($datos){
        $jutils = new JJUtils();
        $vo = new PublicaVO();
        $bean = new TOPublicacion();
        $bean = $jutils->jsonToPublica($datos);
        $msg = $vo->procesaPublicacion($to);
        return $this->json->encode($msg);
    }
    
    public function ExecutePublicacionesActivas(){
        $vo = new PublicaVO();
        $this->json->encode($vo->procesaPublicacionesActivas());
    }
    
    public function ExecutePublicacionesNoActivas(){
        $vo = new PublicaVO();
        return $this->json->encode($vo->procesaPublicacionesNoActivas());
    }
}

?>