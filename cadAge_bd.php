<?php
// abre conexao com o banco 
require_once 'conectMysql.php';

$ag_nome_cliente        = $_POST["nome"];
$ag_email_cliente       = $_POST["email"];
$ag_nome_pet            = $_POST["nomepet"];
$ag_pet                 = $_POST["pet"];
$ag_raca	            = $_POST["raca"];
$ag_porte               = $_POST["porte"];
$ag_tel                 = $_POST["telefone"];
$ag_cel                 = $_POST["celular"];
$ag_obs                 = $_POST["obs"];
$ag_tipo                = $_POST["opcoes"];
$ag_data                = $_POST["data"];

//monta sql para o banco de dados ,


$sql = "INSERT  INTO cad_agendamento (nome, 
							   		  email, 
							   		  nomepet, 
							   		  pet, 
							   		  raca, 
							   		  porte, 
							   		  telefone,
							   		  celular,
							   		  obs,
							   		  opcoes,
							   		  data) 
		
		VALUES ('" . $ag_nome_cliente . "',
				'" . $ag_email_cliente . "',
				'" . $ag_nome_pet . "',
				'" . $ag_pet . "',
				'" . $ag_raca . "',
				'" . $ag_porte . "',
				'" . $ag_tel . "',
				'" . $ag_cel . "',
				'" . $ag_obs . "',
				'" . $ag_tipo . "',
				'" . $ag_data . "'
			)";


$mysqli->query($sql);
// echo "New record has id: " . $mysqli -> insert_id;
$mysqli->close();

echo 'Agendamento Cadastro no Sistema';
/*header('Location: listaUsuario.php');*/