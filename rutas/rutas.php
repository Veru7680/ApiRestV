<?php
$array =explode("/", SERVER ["REQUEST_URI"]);
if(count(array_filter($array))==1){
    $json=array(
"detalle"=>"Sin solicitudes"
    );
    echo json_encode($json,true);
}else{
    if(Count(array_filter($array))==2){
        $json=array(
    "detalle"=>"Cuales son las solicitudes"
        );
        echo json_encode($json,true);
}}
?>