<?php
// abre conexao com o banco 
require_once 'conectMysql.php';

$nome        = $_POST["nome"];
$email       = $_POST["email"];
$conf_email  = $_POST["confemail"];
$usuario     = $_POST["login"];
$senha       = $_POST["senha"];
$conf_senha  = $_POST["confsenha"];
$dt_nasc     = $_POST["nasc"];
$sexo        = $_POST["sexo"];
$user_rua    = $_POST["rua"];
$user_numero = $_POST["numero"];
$user_comp   = $_POST["complemento"];
$user_bairro = $_POST["bairro"];
$user_cidade = $_POST["cidade"];
$user_tel    = $_POST["telefone"];
$user_cel    = $_POST["celular"];

//monta sql para o banco de dados ,


$sql = "INSERT  INTO cad_user (nome, 
							   email, 
							   conf_email, 
							   usuario, 
							   senha, 
							   conf_senha, 
							   dt_nasc,
							   sexo,
							   user_rua,
							   user_numero,
							   user_comp,
							   user_bairro,
							   user_cidade,
							   user_tel,
							   user_cel) 
		VALUES ('" . $nome . "',
				'" . $email . "',
				'" . $conf_email . "',
				'" . $usuario . "',
				'" . $senha . "',
				'" . $conf_senha . "',
				'" . $dt_nasc . "',
				'" . $sexo . "',
				'" . $user_rua . "',
				'" . $user_numero . "',
				'" . $user_comp . "',
				'" . $user_bairro . "',
				'" . $user_cidade . "',
				'" . $user_tel . "',
				'" . $user_cel . "')";

$mysqli->query($sql);
// echo "New record has id: " . $mysqli -> insert_id;
$mysqli->close();

echo 'Usuário Cadastro no Sistema';
/*header('Location: listaUsuario.php');*/