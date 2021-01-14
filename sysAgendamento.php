<?php

require_once 'conectMysql.php';

?>
<html>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Sys Pet - Central de Atendimento</title>

	<link rel="stylesheet" type="text/css" href="_css/syspet.css"/>
	<link rel="stylesheet" type="text/css" href="_css/sysAgendamento.css"/>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<link href="/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




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
									<a href="listaParceiros.php">
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

<br>
<br>
<fieldset>
<a href="sysPet.php">
  	<img src="_image/voltarRosa.png" alt="Voltar" width="70" height="70">
</a>
<fieldset id="agenda"><h1>AGENDAMENTO</h1>

				<div class="container">
            	<form action="cadAge_bd.php" method="post" />

                <aside id="User">
                <p>
                	<label for="Nome">Nome:                         </label> <input type="text" name="nome"     id="nome"      size="20" maxlength="36" placeholder="Nome Completo"/>
                </p>
                
                <p>
                	<label for="Email">E-mail:                      </label> <input type="text" name="email"    id="email"     size="20" maxlength="36" placeholder="E-mail"/>
                </p>

                <p>
                	<label for="NomePet">Nome do Pet:                 </label> <input type="text" name="nomepet"    id="nomepet"     size="20" maxlength="36" placeholder="Nome do seu Pet"/>
                </p>

                <p>
                	<label for="Pet">Animal:                      </label> <input type="text" name="pet"    id="pet"     size="20" maxlength="36" placeholder="Seu Pet"/>
                </p>

                <p>
                	<label for="Raca">Raça:                        </label> <input type="text" name="raca"    id="raca"     size="20" maxlength="36" placeholder="Raça"/>
                </p>

                <p>
                	<label for="Porte">Porte:                       </label> <input type="text" name="porte"    id="porte"     size="20" maxlength="36" placeholder="Porte"/>
                </p>

                <p>
                	<label for="Telefone">Telefone Residencial:      </label> <input type="text" name="telefone" id="telefone"  size="20" maxlength="36" placeholder="Tel Residencial com DDD"/> 
                </p>
                
                <p>
                	<label for="Celular">Telefone Celular:           </label> <input type="text" name="celular" id="celular"   size="20" maxlength="36" placeholder="Tel Celular com DDD e digítos"/>
                </p>

                <p>
                	<label for="Obs">Observações:                  </label> <input type="text" name="obs"    id="obs"     size="20" maxlength="36" placeholder="Deixe uma observação"/>
                </p>
                

                <p><label for="agendamento">

                	<h1>Serviço</h1>
                	<select name="opcoes" id="tipo" name="tipo">
                            <option value="banho">Banho             </option>
                            <option value="tosa">Tosa               </option>
                            <option value="banhoTosa">Banho + Tosa  </option>
                            <option value="vacinacao">Vacinação     </option>
                    </select>
                </p><br>
                <p><label for="Date">Data de agendamento: </label><br><br>
				 <input type="date" name="data" required/></p><br>
               

  				<button type="submit" class="btn btn-primary">Agendar</button>
    			<button type="reset" class="btn btn-primary">Limpar</button>
				<a href="sysPet.php">Voltar</a>
</div>
</fieldset>

</fieldset>

<footer id="rodape">
<p>Copyright&copy; 2020 - Desenvolvimento WEB<br/>
<p>Projeto de desenvolvimento HTML + PHP + MySQL
</footer>


</body>
</html>
