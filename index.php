﻿	<!DOCTYPE html>
	<html lang="pt-br">
		<head>
			<title>Oficina Vintage</title>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link type="text/javascript" href="jquery/jquery.min.js">  
			<link rel="stylesheet" type="text/css" href="css/stylesheet2.0.css">
			<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<script src="jquery/jquery-1.12.3.js"></script>
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<script src="script/pagescript.js"></script>
		</head>
	<!-- ====================================== -->
	<!-- ====================================== -->
	<!-- ====================================== -->
	<!-- ====================================== -->
	<body>
	  	<div class="container-fluid" id="generalContainer">
	  		<header class="row">
	  			<img src="img/back.jpeg">
			  	<div class="row">
					<div class="col-md-8">
						  <!--NavBar-->
						<nav class="navbar navbar-default navbar-fixed-top">
							<div class="container-fluid">
						  		<div class="navbar-header" style="bor">
						   			<a class="navbar-brand" href="index.php"><span>Oficina Vintage</span></a>
						  		</div>
							   	<ul class="nav navbar-nav" id="searchlogin"> 
								   <li id="search">
								   		<form class="navbar-form navbar-left" role="search">
											<div class="form-group">
									  			<input type="text" class="form-control" placeholder="Search">
											</div>
								  		</form>
									</li> 
						      		<li>
						      			<button id="submit" type="submit" class="btn btn-default">Submit</button>
						       		</li>
						       		<li>
									<button id="loginButton" type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Login</button>
								   	</li>
									
								</ul>

					  		</div>
						</nav><!--NavBar-->
					</div><!--coluna-->
				</div><!--row navbar-->
				<div class="row">
				<!--=================================================-->
				<!--titulo-->
				<!-- espaçamento-->
				<div class="col-md-1"></div>
				<!-- logo -->
				<div class="col-md-3">
					<div><img id="logo" src="img/vintage.jpg"></div>
				</div>
					<!-- nome -->
				<div class="col-md-5"><h1 class="nome">Oficina</h1>
					<h2 class="nome">
						<span id="e">V</span>
						<span id="esquina">intage</span>
					</h2>
					<div class="slogan"><p><span class="slogan">Diferente pra você, normal pra mim.</span></p></div>
			    </div>
				  <!--titulo-->
				<!-- Modal -->
		  		<div class="modal fade" id="myModal" role="dialog">
		    		<div class="modal-dialog">
		      		<!-- Modal content-->
		      			<div class="modal-content">
		        			<div class="modal-header">
		          				<button type="button" class="close" data-dismiss="modal">&times;</button>
		          				<h4 class="modal-title">Entre no Loja da Esquina
		          				</h4>
		        			</div>
		        			<div class="modal-body">
		          				<div class="row">
		            				<div class="col-md-1" id="forms-login">
		             					<div class="form-group">
		               						<label for="usr">Name:</label>
		               						<input type="text" class="form-control"id="usr">
		            					</div>
		             					<div class="form-group" id="form-body">
		                					<label for="pwd">Password:</label>
		                					<input type="password" class="form-control" id="pwd">
		              					</div>
		             				</div>
		              			<div class="col-md-1" id="ask_cadastro">
		                			<p>Ainda não é cadastrado?<br>
		                  			Cadastre-se agora mesmo!
		                			</p>
		                			<a href="Cadastro.php"><button  type="cadastro" id="cadastro" class="btn btn-default">Cadastro</button></a>
		              			</div>
		          			</div><!--end row-->
		        		</div><!--modalbody-->
		         		<!--modal footer-->
		        	<div class="modal-footer">
		         		 <button type="button" class="btn btn-default" id="loginButton">Login</button>
			       	</div>
			   	</div><!--end myModal-->  
	 		</header>
<!--=================================================================-->

<!--=================================================================-->

<!--=================================================================-->

<!--=================================================================-->
			<article class="Container">
			  	<div class="row">
					<div class="col-md-12" id="ContainerArticle">
						<!-- pills --> 
						<div class="row">
						  <!--inicio lista-->
							<ul class="nav nav-pills" id="navBar">
							  	<li id="lifirst">
							  		<a href="index.php" id="listitem">
							  			<strong>Home</strong>
							  		</a>
								</li>
				  				<li class="dropdown">
					  			<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="listitem">Comprar
					  				<span class="caret"></span>
					  			</a>
					  				<ul class="dropdown-menu">
										<li><a href="produtos.php">Geek</a></li>
										<li><a href="produtos.php">Romântico</a></li>
										<li><a href="produtos.php">Familia</a></li>
										<li><a href="produtos.php">Festas</a></li>                        
					  				</ul>
								</li>
								<li><a href="minhaloja.php" id="listitem">Vender</a></li>
							</ul>
						</div>
						<!-- pills -->
						
						<!-- Carrosel row-->
						<div class="row">
							<div class="container" id="ContainerCarrousel">
				  				<br>
							    <div id="myCarousel" class="carousel slide" data-ride="carousel">
								    <!-- Indicators -->
								    <ol class="carousel-indicators">
								      	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
									      <li data-target="#myCarousel" data-slide-to="1"></li>
									      <li data-target="#myCarousel" data-slide-to="2"></li>
									      <li data-target="#myCarousel" data-slide-to="3"></li>
								    </ol>

								    <!-- Wrapper for slides -->
								    <div class="carousel-inner" role="listbox">
							   			    <div class="item active">
									    	    <a href="produtos.php" target="_blank"><img id="carrosel"src="img/marmitas.jpg" alt="Caneca pé de cachorro" width="1167" height="497">
									    	    </a>
								      		</div>

								     		<div class="item">
								        		<a href="produtos.php"><img src="img/presente-dia-dos-namorados.jpg" alt="Chania" width="1167" height="497">
								      		</a></div>
								    
										    <div class="item">
										    	<a href="produtos.php"><img src="img/quadros-decorativos-3.jpg" alt="Flower" width="1167" height="497">
										    </a>
										        </div>

										    <div class="item">
										        <a href="produtos.php"><img src="img/porta-rolhas.jpg" alt="Flower" width="1167" height="497">
										    </a></div>
								    </div>
								     <!--carrousel inner-->

								    <!-- Left and right controls -->
								    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
								      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								      <span class="sr-only">Previous</span>
								    </a>
								    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
								      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								      <span class="sr-only">Next</span>
								    </a>
								</div> <!--my carrousel-->
										<!-- end Carrosel -->
								<hr>
								    	<!--Produtos-->
								<div class="row" id="colArticle">
									<div class="col-md-4" id="coluna4">
								    	<!--Imagem do produto-->
										<a href="produtos.php"><img class="img-thumbnail" alt="Cinque Terre" id="produto" src="img/canecacachorro.jpg"></a>
									</div>
									<div class="col-md-4" id="coluna4">
								    <!--Imagem do produto-->
								        <a href="produtos.php"><img id="produto" class="img-thumbnail" alt="Cinque Terre" src="img/canecagato.jpg"></a>
								    </div>
									<div class="col-md-4" id="coluna4">
									    <!--Imagem do produto-->
									    <a href="produtos.php"><img id="produto" class="img-thumbnail" alt="Cinque Terre" src="img/canecafoto.jpg"></a>
									</div>
								</div>
								<div class="row" id="colArticle">
									<div class="col-md-4" id="coluna4">
								    <!--Imagem do produto-->
								        <a href="produtos.php"><img id="produto" class="img-thumbnail" alt="Cinque Terre" src="img/garrafajack.jpg"></a>
								    </div>
									<div class="col-md-4" id="coluna4">
								          <!--Imagem do produto-->
								        <a href="produtos.php"><img id="produto" class="img-thumbnail" alt="Cinque Terre"produto src="img/iodalha.jpg"></a>
								    </div>
									<div class="col-md-4" id="coluna4">
								        <!--Imagem do produto-->
								        	<a href="produtos.php"><img id="produto" class="img-thumbnail" alt="Cinque Terre" src="img/interruptorpotter.jpg"></a>
								    </div>
								</div>
							</div>
							</div>
						</div><!-- end Carrosel row-->

					</div><!-- Container article-->
				</div><!--end row article-->
			</article><!-- fim container article-->
 		</div><!-- fecha container geral-->
			<footer class="container-fluid">
				<div class="row">
			  	<div class="col-md-1"></div>
			  	<div class="col-md-2">
					<p>®Jaderson Nascimento</p>
			  	</div>
			  		<div class="col-md-6" id="footerspace"></div>
			  			<div class="col-md-3">
							<p>e-mail: jadersonnascimento@outlook.com</p>
			 			 </div>
			  		<div class="col-md-1"></div>
				</div>
			</footer>
	</body>
</html>
