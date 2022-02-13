<?php
session_start();
if(isset($_SESSION['guest'])){

}else{
    $_SESSION['guest'] = uniqid();
}
if(isset($_GET['session'])){
    switch ($_GET['session']) {
        case 'on':

$resume = isset($_GET['resume'])?$_GET['resume']:'dashboard';
$uid = isset($_GET['uid'])?$_GET['uid']:null;
if(isset($_GET["uid"])){
    $_SESSION["uid"] = $_GET["uid"];
}
echo "<script>";
echo "location.assign('$resume')";
echo "</script>";
            
            break;
        case 'off':
            //echo "session unset area";
            session_destroy();
echo "<script>";
echo "location.assign('login')";
echo "</script>";
            //session_unset();
            break;
        
        default:
            # code...
            break;
    }
}







