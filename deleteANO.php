<?php

include("conexionANO.php");
$con=conectar();

if(isset($_GET['id_ano_acad'])) {
  $id_ano_acad = $_GET['id_ano_acad'];
  $query = "DELETE FROM ano_academico WHERE id_ano_acad='$id_ano_acad'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: ano_academico.php"); 
}

?>