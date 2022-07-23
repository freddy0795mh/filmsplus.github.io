<?php

function Conectionbd(){
    $cn = mysqli_connect("localhost","root","","bdfilms");
    if($cn){
        return $cn;
    }else{
        return "Error de conexion a BD";
    }
}

?>
