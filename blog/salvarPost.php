<?php

include_once "../servico/Bd.php";

$titulo=$_GET["titulo"];
$corpo=$_GET["corpo"];

if (isset($_GET["id"])) { 
    $id = $_GET["id"];
    $sql = "update `blog` set titulo='$titulo', corpo='$corpo' where id='$id' ";
}else { //grava um novo
    $sql = "INSERT INTO `blog` (`id`, `titulo`, `corpo`) VALUES (NULL, '$titulo', '$corpo')";    
}

$bd = new Bd();
$contador = $bd->exec($sql);

echo "<h1>foi armazenado/atualizado $contador registro</h1>";

?>

<a href="ConsultaPost.php">Voltar</a>
