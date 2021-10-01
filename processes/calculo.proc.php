<?php
if(isset($_POST['submit'])){
    $cuenta=$_POST['cuenta'];
    $servicio=$_POST['servicio'];
    $personas=$_POST['personas'];
    if ($personas==is_null($personas) || 0) {
        header("Location:../index.php");
    }else{
        $formula=((float)$cuenta*$servicio)/(float)$personas;
        echo "$formula por persona";
        header("Location:../index.php?res=".$formula);
    }
}else{
    header("Location:../index.php");
};