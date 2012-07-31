<?php
include '../com.calaveraStudio.demo.action/ExecutePublicacion.php';
$action = new PublicacionAction();
if($_POST['publicar'] = TRUE){
    switch ($_POST['action']) {
        case 'publicar':
            $action->ExecutePublication($_POST['publica']);
            break;
        case 'activas':
            $activas = $action->ExecutePublicacionesActivas();
            echo $activas;
            break;
        case 'noActivas':
            $noActivas = $action->ExecutePublicacionesNoActivas();
            echo $noActivas;
            break;
        default:
            
            break;
    }
}

?>