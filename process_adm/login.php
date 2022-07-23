<?php
include("../conexion.php");
$cn=Conectionbd();
$email = $_POST['email'];
$pass = $_POST['pass'];
$verificandousuario = mysqli_query($cn,"SELECT email FROM usuarios WHERE email='$email' AND pass='$pass'");
if(mysqli_num_rows($verificandousuario)>0){
    echo 1;
}else{
    echo 2;
}
?>