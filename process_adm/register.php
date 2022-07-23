<?php
include("../conexion.php");
$cn=Conectionbd();
$emailuser=$_POST['emailuser'];
$pass=$_POST['pass'];
$nameuser=$_POST['nameuser'];
$apeuser=$_POST['apeuser'];
$teluser=$_POST['teluser'];
$plans=$_POST['plans'];
$carduser=$_POST['carduser'];
$datecard=$_POST['datecard'];
$cvvcard=$_POST['cvvcard'];
$insertuser = mysqli_query($cn,"INSERT INTO usuarios (pass,email) VALUES ('$emailuser','$pass')");
$iduser = $cn -> insert_id;
if($iduser != ""){
    echo $iduser;
}else{
    echo 2;
}
?>