<?php
if (isset($_GET["regId"]) && isset($_GET["message"])) {
    $regId = $_GET["regId"];
    $message = $_GET["message"];
     
    include_once './GCM.php';
     
    $gcm = new GCM();
 
    $registation_ids = array($regId);
    //$message = array("messageTyped" => $message);
 
    $result = $gcm->send_notification($registation_ids, $message);
 
    echo $result;
}
?>