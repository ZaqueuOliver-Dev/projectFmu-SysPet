<?php
// conecta com o banco de dados  
$mysqli = new mysqli("localhost:3306","root","","syspet");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

 // echo var_dump($_POST); 
// recebe o valor passado do formulario name="usuario" e name="senha"
 $usuario = $_POST["usuario"]; 
 $senha   = $_POST["senha"]; 

//monta sql para o banco de dados 
$sql = "SELECT * FROM cad_user where usuario = '".$usuario."' and senha = '".$senha."'";


$valido=false; 

$result = $mysqli -> query($sql); 

if ($result) {
  if ($row = $result -> fetch_row()) {
    print_r($row);
    echo "<br><br>";
    $valido=true;
  }

  $result -> free_result();
}

$mysqli -> close();


if ($valido==true)
  {
	//echo 'usuario valido!'; 
	header('Location: cadListaUser.php');
  }
else
	{
		echo 'ERRO: usuario invalido!';
	//header('Location: index.php?login=erro');
 	}	

 
?>
