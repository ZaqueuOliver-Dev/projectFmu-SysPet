<?php
// abre conexao com o banco 
require_once 'conectMysql.php';

$id = $_GET["id"];
echo "id aaaaaaaa = " . $id;

$sql = "delete from cad_parc where id_parc = " . $id;

$mysqli->query($sql);

$mysqli->close();

header('Location: listaParceiros.php');
