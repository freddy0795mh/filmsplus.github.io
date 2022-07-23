<?php
include("conexion.php");

function list_typesuscription(){
    $cn = Conectionbd();
    $datos = array();
    $cmdplans = mysqli_query($cn,"SELECT idTipo,precio,tiempo FROM tipo_suscripcion");
    if(mysqli_num_rows($cmdplans)>0){
        while($data=mysqli_fetch_array($cmdplans,MYSQL_ASSOC)){
            $datos[]=$data;
        }
    }
    return $datos;
}

unset($datos);

?>