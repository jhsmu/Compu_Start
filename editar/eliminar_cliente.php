<?php
    $id=$_GET['id'];
    include("conexion.php");

    $sql="delete from cliente where id='".$id."'";
    $resultado=mysqli_query($conexion,$sql);

    if($ressultado){
        echo "<script languaje='JavaScript'>
            alert('Los datos NO fueron eliminados exitosamente');
            location.assign('../inicio.php');</script>";
    } else{
        echo "<script languaje='JavaScript'>
            alert('Los datos se eliminaron');
            location.assign('../login-registro.php');</script>";
    }


?>