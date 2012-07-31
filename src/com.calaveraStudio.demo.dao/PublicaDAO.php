<?php
include '../com.calaveraStudio.demo.dao/Connection.php';
include '../com.calaveraStudio.demo.conf/DBConfig.php';
include '../com.calaveraStudio.demo.to/TOPublicacion.php';

/**
 * 
 */
class PublicaDAO{
	private $cnn;
    private $conf;
	function __construct() {
	   $this->conf = new DBConfig();
       $this->cnn = new Connection($this->conf->getUsuarioPostgres(), $this->conf->getPasswdPostgres(), $this->conf->getHostPostgres(), $this->conf->getPuertoPostgres(), $this->conf->getBasePostgres());
	}
    
    public function setNewPublicacion(TOPublicacion $to){
        $this->cnn->openPersistentPgConnection();
        $insert = "insert into tbl_publicacion(tittulo, path, descripcion, activo,imagen) values({$to->getTitulo()}, ";
        $insert .= "'/web/img/publicaciones', {$to->getDescripcion()}, {$to->getPublicar()}, {$to->getImgName()}";
        $status = pg_exec($this->cnn->getPgConnection(), $insert);
    }
    
    public function getPublicacionesActivas(){
        $arrayName = array();
        $query = "select tittulo, path, descripcion, activo,imagen
            from tbl_publicacion
            where tbl_publicacion = true
            order by id_publicacion DESC";
        $result = pg_query($this->cnn->getPgConnection(), $query);
        while ($row = pg_fetch_assoc($result)) {
            $arrayName[] = $row;
        }
        return $arrayName;
    }
    
    public function getPublicacionesNoActivas(){
        $arrayName = array();
        $query = "select tittulo, path, descripcion, activo,imagen
            from tbl_publicacion
            where tbl_publicacion = False
            order by id_publicacion DESC";
        $result = pg_query($this->cnn->getPgConnection(), $query);
        while ($row = pg_fetch_assoc($result)) {
            $arrayName[] = $row;
        }
        return $arrayName;
    }
}

?>