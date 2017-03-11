<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link href="{{asset('/css/app.css')}}" rel="stylesheet">
		<title>@yield('title')</title>
		
	</head>
	<body>
		<div class="navbar-header responsive-logo">
				<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<div class="navbar-brand">
				<a href="#home"><img src="arquivos/biancalogo.jpg" alt="Bianca Arantes" title="Bianca Arantes" style="width:70%;"></a>
				</div>
			</div>
		<nav class="navbar-collapse collapse" role="navigation" id="bs-navbar-collapse" style="background-color:black;">
			<ul class="nav navbar-nav navbar-right responsive-nav main-nav-list">
				<li><a href="#home">Inicio</a></li>
				<li><a href="#sobre-mim">Sobre mim</a></li>
				<li><a href="#focus">Atuação</a></li>
				<li><a href="#aboutus">Objetivo</a></li>
				<li><a href="#cursos">Cursos</a></li>
				<li><a href="#works">Projetos</a></li>
				<!--<li><a href="#contact">Contatos</a></li>-->
			</ul>
			</nav>
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>
