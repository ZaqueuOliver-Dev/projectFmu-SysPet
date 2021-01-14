<?php
// abre conexao com o banco 
require_once 'conectMysql.php';

$id = $_GET["id"];
echo "id aaaaaaaa = " . $id;

$sql = "delete from cad_user where id = " . $id;

$mysqli->query($sql);

$mysqli->close();

header('Location: cadListaUser.php');
