<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'; ?>"></script>
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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<header>
    <div class="container"> <!--main-->
        <div class="row justify-content-center align-items-center"><!--header-->
            <div class="col-3">
            	<a href="<?php echo base_url();?>" class="brand-logo">Logo</a>
            </div>
			<div class="col-9 text-center">
				<h2>Ministerio de Educación</h2>
            	<h4>Viceministerio de Ciencia y Tecnología</h4>
            </div>
        </div>
    </div>
</header>