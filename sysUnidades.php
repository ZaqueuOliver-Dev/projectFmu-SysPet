<?php

require_once 'conectMysql.php';

?>
<html>
<head>
	<meta charset="utf8">
	<title>Sys Pet - Unidades</title>
	<link rel="stylesheet" type="text/css" href="_css/syspet.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="_css/syspet.css"/>	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
	<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicons -->
	<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
	<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
	<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
	<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
      	padding: 10px;
      	width: 100%;
      	margin-top: 50px;
        font-size: 25pt;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 50pt;
        }
      }

    </style>




</head>
 <!-- 24/09/2020 - Terminar de verificar como posicionar os botões "Area do Pet e Area do cliente em linha" -->
<body>
		<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="sysPet.php">Sys Pet</a>
    		</div>
    	<ul class="nav navbar-nav navbar-right">
      		<li>
      			<a href="cadUser.php">
      				<span class="glyphicon glyphicon-user"></span> Cadastre-se 
      			</a>
      		</li>
    	</ul>
  		</div>
</nav>

<section class="areacabecalho">
	<head id="cabecalho">
		<section id="menu">
			<div class="cabecalhomenu">
				<nav class="navmenu">
					<ul>
							<li id="menuProdutos">
									<a href="sysPet.php" title="">
										<span class="icon"><i aria-hidden="true" class="icon-home"></i></span><span><img id="icone" src="_image/produtos_syspet.png"/>Produtos</span>
									</a>
							</li>
							<li id="menuAgenda">
									<a href="sysAgendamento.php">
										<span class="icon"><i aria-hidden="true" class="icon-agend"></i></span><span><img id="icone" src="_image/icon_agenda.png"/>Agendamento</span>
									</a>
							</li>
							<li id="menuUnidades">
									<a href="sysUnidades.php">
										<span class="icon"><i aria-hidden="true" class="icon-unid"></i></span><span><img id="icone" src="_image/unidades.png"/>Unidades</span>
									</a>
							</li>
							<li id="menuParceiros">
									<a href="listaParceirosVisitante.php">
										<span class="icon"><i aria-hidden="true" class="icon-parc"></i></span><span><img id="icone" src="_image/parceiros.png"/>Parceiros</span>
									</a>
							</li>
							<li id="menuCentAtend">
									<a href="sysCentAtendimento.php">
										<span class="icon"><i aria-hidden="true" class="icon-centrAtend"></i></span><img id="icone" src="_image/centrAtendimento.png"/>Central de Atendimento</span>
									</a>
							</li>
					</ul>
				</nav>
			</div>
		</section>
	</head>
</section>
<section id="campLateralDireito">
	<br>
	<br>
	<br>
<div class="container">
	  <a href="sysPet.php">
  		<img src="_image/voltarRosa.png" alt="Voltar" width="70" height="70">
  	  </a>
  <h2>Unidades Parceiras</h2>
  <p>Localize a unidade mais próxima de você!</p>
  		<div class="card" style="width:400px">
    		<img class="card-img-top" src="_image/unidadesLojas.png" alt="Card image" style="width:100%">
    			<div class="card-body">
      				<h4 class="card-title">Localização</h4>
      					<p class="card-text">
      						<table class="table table-dark table-hover">
      							<thead>
        							<tr>
          								<th>Nome</th>
          								<th>Endereço</th>
          								<th>Telefone</th>
        							</tr>
      							</thead>
      						<tbody>
        
        					<?php
        						require_once 'conectMysql.php';
        
        						$sql = "SELECT * FROM cad_parc";
        							if ($result = $mysqli->query($sql)) {
          							while ($row = $result->fetch_assoc()) {
            							echo "<tr><td>"
              										. $row["nome_parc"] . "<td>" 
              										. $row["rua_parc"] . "<td>"
              										. $row["telefone_parc"] . "<td>";
          								}

          								$result->free_result();

        							}
        							$mysqli->close();
        						?>
      </tbody>
    </table>



      					</p>
      						<a href="https://www.google.com/search?tbm=lcl&sxsrf=ALeKk00QJrmzO7zbFj2jdl96fjyKQlHrxA%3A1603648161990&ei=obqVX5SFPJ-v5OUP_eCI0AE&q=avenida+paulista%2C+777&oq=avenida+paulista%2C+777&gs_l=psy-ab.3..0l6j38l4.2410552.2414900.0.2415187.21.18.0.3.3.0.239.2402.0j12j3.15.0....0...1c.1.64.psy-ab..4.17.2186...46j35i39k1j0i67k1j0i433k1j46i433i131k1j46i433k1j46i433i67k1j0i433i131k1.0.zuYWK2CoxD8#rlfi=hd:;si:16107995561909876140;mv:[[-23.56662562268097,-46.65047754565205],[-23.566985577319024,-46.650870254347936]]" class="btn btn-primary">Ver</a>
    			</div>
  		</div><br>
</div>


</section>
</body>
</html>