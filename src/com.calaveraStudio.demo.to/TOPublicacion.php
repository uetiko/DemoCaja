<?php


/**
 * 
 */
class TOPublicacion{
	private $titulo;
    private $descripcion;
    private $publicar;
    private $imgName;
	function __construct() {
		
	}
    
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    
    public function getTitulo(){
        return $this->titulo;
    }
    
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }
    
    public function getDescripcion(){
        return $this->descripcion;
    }
    
    public function setPublicar($publicar){
        $this->publicar = $publicar;
    }
    
    public function getPublicar(){
        return $this->publicar;
    }
    
    public function setImgName($imgName){
        $this->imgName = $imgName;
    }
    
    public function getImgName(){
        return $this->imgName;
    }
    
}

?>