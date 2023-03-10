<?php
    $id=$_GET['id'];
    include("conexion.php");

    $sql="delete from cliente where id='".$id."'";
    $resultado=mysqli_query($conexion,$sql);

    if($ressultado){
        echo "<script languaje='JavaScript'>
            alert('Los datos fueron eliminados exitosamente');
            location.assign('../index.php');</script>";
    } else{
        echo "<script languaje='JavaScript'>
            alert('Los datos fueron NO se eliminaron');
            location.assign('index.php');</script>";
    }


?>