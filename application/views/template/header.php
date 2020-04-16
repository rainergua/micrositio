<!DOCTYPE html>
<html>
<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162797262-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-162797262-1');
		</script>
	<title>Psicología a tu servicio - Ministerio de Educación</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/valid/jquery.validate.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/funciones.js'; ?>"></script>
	<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/css/bootstrap.min.css',
	'rel' => 'stylesheet',
	'type' => 'text/css',
	);
	echo link_tag($link);?>
	<?php
	$this->load->helper('html');
	$link = array(
	'href' => 'assets/css/estilos.css',
	'rel' => 'stylesheet',
	'type' => 'text/css',
	);
	echo link_tag($link);?>
	<!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.1/css/all.css">
</head>
<body class="bg-green-1000">
<header class="bg-gray-1000">
    <div class="container my-2"> <!--main-->
        <div class="row justify-content-center align-items-center"><!--header-->
            <div class="col-12 col-sm-12 col-md-2 col-ld-2">
            	<a href="<?php echo base_url();?>" class="brand-logo">Logo</a>
            </div>
			<div class="col-12 col-sm-12 col-md-10 col-ld-10 text-center">
				<h2>Ministerio de Educación</h2>
            	<h4>Viceministerio de Ciencia y Tecnología</h4>
            </div>
        </div>
	</div>
	<!--NAVBAR-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light1000 mb-2">
  <a class="navbar-brand" href="<?php echo base_url();?>"><i class="fas fa-home"  style="font-size:24px"></i> Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!--li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">current</span></a>
      </li-->
      <li class="nav-item">
        <a class="nav-link" href="https://www.boliviasegura.gob.bo/" target= "_blank">Bolivia Segura</a>
	  </li>
      <li class="nav-item">
        <a class="nav-link" href="https://boliviaverifica.bo/" target= "_blank">Bolivia Verifica</a>
	  </li>
	  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ministerios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="https://www.minedu.gob.bo/" target= "_blank">Ministerio de Educación</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://www.minsalud.gob.bo/" target= "_blank">Ministerio de Salud</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="https://www.comunicacion.gob.bo/"  target= "_blank">Ministerio de Comunicación</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!--input class="form-control mr-sm-2" type="search" placeholder="Teléfono" aria-label="Search"-->
      <button class="btn btn-success my-2 my-sm-0" type="button" data-toggle="modal" href="#myModal"  id="myBtn"><i class="fab fa-whatsapp"  style="font-size:24px"></i>  Hacer mi consulta por WhatsApp</button>



    </form>
  </div>
</nav><!--end navbar-->

</header>