<?php
$array =explode("/", SERVER ["REQUEST_URI"]);
if(Count(array_filter($array))==1){
    $json=array(
"detalle"=>"Sin solicitudes"
    );
    echo 
}else{
    if(Count(array_filter($array))==2){
        $json=array(
    "detalle"=>"conn solicitudes"
        );
}}
?>