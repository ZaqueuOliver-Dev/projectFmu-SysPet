<?php

require_once 'conectMysql.php';

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


$sql = "INSERT  INTO cad_parc (nome_parc, 
							   email_parc,
							   login_parc, 
							   senha_parc, 
							   cnpj_parc,
							   responsavel_parc,
							   rua_parc,
							   numero_parc,
							   complemento_parc,
							   bairro_parc,
							   cidade_parc,
							   estado_parc,
							   telefone_parc,
							   celular_parc) 
		VALUES ('" . $nome_parc . "',
				'" . $email_parc . "',
				'" . $login_parc . "',
				'" . $senha_parc . "',
				'" . $cnpj_parc . "',
				'" . $responsavel_parc . "',
				'" . $rua_parc . "',
				'" . $numero_parc . "',
				'" . $complemento_parc . "',
				'" . $bairro_parc . "',
				'" . $cidade_parc . "',
				'" . $estado_parc . "',
				'" . $telefone_parc . "',
				'" . $celular_parc . "')";

$mysqli->query($sql);
// echo "New record has id: " . $mysqli -> insert_id;
$mysqli->close();

echo 'Parceiro Cadastro no Sistema';
/*header('Location: listaUsuario.php');*/