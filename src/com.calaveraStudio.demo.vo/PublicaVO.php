<?php
include '../com.calaveraStudio.demo.dao/PublicaDAO.php';
include '../com.calaveraStudio.demo.to/TOPublicacion.php';

/**
 * 
 */
class PublicaVO{
	
	function __construct() {
		
	}
    
    public function procesaPublicacion(TOPublicacion $to){
        $dao = new PublicaDAO();
        $dao->setNewPublicación($to);
    }
    
    public function procesaPublicacionesActivas(){
        $dao = new PublicaDAO();
        return $dao->getPublicacionesActivas();
    }
    
    public function procesaPublicacionesNoActivas(){
        $dao = new PublicaDAO();
        return $dao->getPublicacionesNoActivas();
    }
}

?>