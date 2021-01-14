<?php
// abre conexao com o banco 
require_once 'conectMysql.php';

$id_parc          = $_POST["id_parc"];
$nome_parc        = $_POST["nome_parc"];
$email_parc       = $_POST["email_parc"];
$login_parc       = $_POST["login_parc"];
$senha_parc       = $_POST["senha_parc"];
$cnpj_parc        = $_POST["cnpj_parc"];
$responsavel_parc = $_POST["responsavel_parc"];
$rua_parc         = $_POST["rua_parc"];
$numero_parc      = $_POST["numero_parc"];
$complemento_parc = $_POST["complemento_parc"];
$bairro_parc      = $_POST["bairro_parc"]; 
$cidade_parc      = $_POST["cidade_parc"]; 
$estado_parc      = $_POST["estado_parc"]; 
$telefone_parc    = $_POST["telefone_parc"]; 
$celular_parc     = $_POST["celular_parc"];

//monta sql para o banco de dados ,
/*$sql = "UPDATE  usuarios SET nome = '" . $nome . "', email = '" . $email . "',senha ='" . $senha . "' WHERE id = " . $id;*/

$sql = "UPDATE  cad_parc SET nome_parc = '" . $nome_parc  . "',email_parc        = '" . $email_parc . "', login_parc = '" . $login_parc . "', senha_parc = '" . $senha_parc . "', cnpj_parc   = '" . $cnpj_parc . "', responsavel_parc  = '" . $responsavel_parc . "', rua_parc          = '" . $rua_parc . "',numero_parc       = '" . $numero_parc . "',complemento_parc  = '" . $complemento_parc . "',bairro_parc = '" . $bairro_parc . "', cidade_parc = '" . $cidade_parc . "',estado_parc = '" . $estado_parc . "', telefone_parc = '" . $telefone_parc . "',   celular_parc = '" . $celular_parc . "' WHERE id_parc = " . $id_parc;

$mysqli->query($sql);
$mysqli->close();

header('Location: listaParceiros.php');