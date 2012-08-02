<?php
include '../com.calaveraStudio.demo.config/Config.php';


/**
 *
 */
class UploadAction {

    function __construct() {

    }

    public function executeUploadIMG($obj) {
        if (isset($obj)) {
            $conf = new Config();
            $temp_file_name = $obj['file']['name'];
            $path = $conf->getBasePath() . $conf->getPathImg();
            $part = rtrim($path, '/') . "/" . $obj['file']['name'];
            if (move_uploaded_file($temp_file_name, $part)) {
                chmod($part, 0775);
                $p = new ProcesaExcelAction();
                $msg = $p -> exelExecute($temp_file_name, $part);
                $update = '{"success" : "TRUE", "file" : "' . $part . '"}';
                echo $msg;
            } else {
                $var = '{"success" : "FALSE", "file" :"nothing"}';
                echo $var;
            }

        } else {
            $var = '{"success" : "FALSE", "file" :"nothing"}';
            echo $var;
        }
    }

}
?>