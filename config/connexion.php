<?php
try{
    $access=new pdo("mysql:host=localhost;dbname=SIM3D;charset=utf8","root","");
}
catch(Exception $e){
    $e->getMessage();
}


?>