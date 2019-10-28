<!DOCTYPE HTML>
<html lang="pt-br">
<?php 
	require "bd/conexao.php";
  // session_start();
  //   if(!isset($_SESSION['id']))
  //   header("Location: index.php");
  
  define('url_sair', 'logout.php');
  define('url_inicio', 'index.php');
?>
<head>
  <title>Saneamento Ambiental com mapa</title>

  <meta charset="UTF-8"> 
  <meta name="author" content="Milene Vieira Lopes">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
  <!-- link p menu -->
<link rel="stylesheet" media="screen" href="superfish.css">
<link rel="stylesheet" media="screen" href="superfish-vertical.css">

<!-- link to the JavaScript files (hoverIntent is optional) -->
<!-- if you use hoverIntent, use the updated r7 version (see FAQ) -->
<script src="hoverIntent.js"></script>
<script src="superfish.js"></script>

  <!-- importações js -->
  <script type="text/javascript" src="assets/js/jquery-2.1.4.js"></script>
  <script type="text/javascript" src="assets/js/table-edit.js"></script>
  <script type="text/javascript" src="assets/js/numeric-input-example.js"></script>

    <!-- importações css -->
  <link rel="stylesheet" type="text/css" href="assets/css/principal.css">
  <script type="text/javascript" src="assets/js/mask/src/jquery.mask.js"></script>
  
  <!-- icone favicon -->
  <link rel='shortcut icon' href="assets/imagens/logoLivro.ico"/> 

</head>