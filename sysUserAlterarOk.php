<?php
// abre conexao com o banco 
require_once 'conectMysql.php';

$id              = $_POST["id"];
$nome            = $_POST["nome"];
$email           = $_POST["email"];
$conf_email      = $_POST["conf_email"];
$usuario         = $_POST["usuario"];
$senha           = $_POST["senha"];
$conf_senha      = $_POST["conf_senha"];
$dt_nasc         = $_POST["dt_nasc"];
$sexo            = $_POST["sexo"];
$user_rua        = $_POST["user_rua"];
$user_numero     = $_POST["user_numero"]; 
$user_comp       = $_POST["user_comp"]; 
$user_bairro     = $_POST["user_bairro"]; 
$user_cidade     = $_POST["user_cidade"]; 
$user_tel        = $_POST["user_tel"];
$user_cel        = $_POST["user_cel"];

$sql = "UPDATE cad_user SET nome         = '"  . $nome        .   "'  , 
                            email        = '"  . $email       .   "'  , 
                            conf_email   = '"  . $conf_email   .   "'  , 
                            usuario      = '"  . $usuario       .   "'  , 
                            senha        = '"  . $senha       .   "'  , 
                            conf_senha   = '"  . $conf_senha   .   "'  , 
                            dt_nasc      = '"  . $dt_nasc        .   "'  , 
                            sexo         = '"  . $sexo        .   "'  , 
                            user_rua     = '"  . $user_rua         .   "'  , 
                            user_numero  = '"  . $user_numero      .   "'  , 
                            user_comp    = '"  . $user_comp .   "'  , 
                            user_bairro  = '"  . $user_bairro      .   "'  , 
                            user_cidade  = '"  . $user_cidade      .   "'  , 
                            user_tel     = '"  . $user_tel    .   "'  , 
                            user_cel     = '"  . $user_cel     .   "' 
WHERE id = " . $id; 


$mysqli->query($sql);
$mysqli->close();

echo 'Dados alterados com sucesso!';

header('Location: cadListaUser.php');