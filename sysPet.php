<?php

require_once 'conectMysql.php';

?>
<html>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sys Pet</title>

	<link rel="stylesheet" type="text/css" href="_css/syspet.css"/>	
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


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
									<a href="#" title="">
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
<aside id="lateraldireito">
	<form form method="POST" action="validaLogin.php">

		<h1>Área do Cliente</h1>
		<label for="clogin"><h3>Login: </h3></label>
		<input type="text" name="usuario" placeholder="Usuario">

		<label for="csenha"><h3>Senha: </h3></label>
		<input type="password" name="senha" placeholder="Senha">

		<input type="submit" value="Acessar">

	</form>
</aside>
</section>

<body>
<fieldset>
<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="_image/Produtos/racao-golden-para-gatos-filhotes-sabor-frango-8e8340247c26889e70f8b316d8670ab1-removebg-preview.png" class="bd-placeholder-img card-img-top" width="100%"preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"/>
            <div class="card-body">
              <p class="card-text">Ração Golden</p>
              <p class="card-text">Categoria: Gato filhote</p>
              <p class="card-text">Sabor: Frango</p>
              <p class="card-text">Peso: 1kg</p>
                <div class="btn-group">
                  <button type="submit" class="btn btn-primary">COMPRAR</button>
                </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="_image/Produtos/racao-magnus-original-para-caes-adultos-carne-15kg-removebg-preview.png" class="bd-placeholder-img card-img-top" width="100%"preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"/>
            <div class="card-body">
              <p class="card-text">Ração Magnus</p>
              <p class="card-text">Categoria: Adulto</p>
              <p class="card-text">Sabor: Arroz com Frango</p>
              <p class="card-text">Peso: 15kg</p>
                <div class="btn-group">
                  <button type="submit" class="btn btn-primary">COMPRAR</button>
                </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="_image/Produtos/Ração_Affinity_PetCare_Gran_Plus_Carne_e_Arroz_para_Gatos_Castrados_1746333_KG-removebg-preview.png" class="bd-placeholder-img card-img-top" width="100%"preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"/>
            <div class="card-body">
              <p class="card-text">Ração Gran Plus</p>
              <p class="card-text">Categoria: Adulto "Castrado"</p>
              <p class="card-text">Sabor: Arroz com Carne</p>
              <p class="card-text">Peso: 3kg</p>
                <div class="btn-group">
                  <button type="submit" class="btn btn-primary">COMPRAR</button>
                </div>
            </div>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="_image/Produtos/Ração_Affinity_PetCare_Gran_Plus_Carne_e_Arroz_para_Gatos_Castrados_1746333_KG-removebg-preview.png" class="bd-placeholder-img card-img-top" width="100%"preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"/>
            <div class="card-body">
              <p class="card-text">Ração Gran Plus</p>
              <p class="card-text">Categoria: Adulto "Castrado"</p>
              <p class="card-text">Sabor: Arroz com Carne</p>
              <p class="card-text">Peso: 3kg</p>
                <div class="btn-group">
                  <button type="submit" class="btn btn-primary">COMPRAR</button>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="_image/Produtos/racao-magnus-original-para-caes-adultos-carne-15kg-removebg-preview.png" class="bd-placeholder-img card-img-top" width="100%"preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"/>
            <div class="card-body">
              <p class="card-text">Ração Magnus</p>
              <p class="card-text">Categoria: Adulto</p>
              <p class="card-text">Sabor: Arroz com Frango</p>
              <p class="card-text">Peso: 15kg</p>
                <div class="btn-group">
                  <button type="submit" class="btn btn-primary">COMPRAR</button>
                </div>
            </div>
          </div>
        </div>




        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="_image/Produtos/racao-golden-para-gatos-filhotes-sabor-frango-8e8340247c26889e70f8b316d8670ab1-removebg-preview.png" class="bd-placeholder-img card-img-top" width="100%"preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"/>
            <div class="card-body">
              <p class="card-text">Ração Golden</p>
              <p class="card-text">Categoria: Gato filhote</p>
              <p class="card-text">Sabor: Frango</p>
              <p class="card-text">Peso: 1kg</p>
                <div class="btn-group">
                  <button type="submit" class="btn btn-primary">COMPRAR</button>
                </div>
            </div>
          </div>
        </div>




      </div>
    </div>
  </div>

</main>

</fieldset>

<footer id="rodape">
<p>Copyright&copy; 2020 - Desenvolvimento WEB<br/>
<p>Projeto de desenvolvimento HTML + PHP + MySQL
</footer>

</body>
</html>