<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
	  <title>Sistema Gestión</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_URL_CSS; ?>materialize.css" media="screen,projection" charset="utf-8">
     <link rel="stylesheet" href="<?php echo APP_URL_CSS; ?>style.css" media="screen,projection" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

 <ul id="dropdown11" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>users/add">Añadir</a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>users">Mostar</a></li>
 </ul>
 <ul id="dropdown22" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>accounts/add">Añadir</a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>accounts">Mostar</a></li>
 </ul>
 <ul id="dropdown33" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>transactions/add">Añadir</a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>transactions">Mostar</a></li>
 </ul>
 <ul id="dropdown44" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>categories/add">Añadir</a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>categories">Mostar</a></li>
 </ul>
 <ul id="dropdown1" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>users/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>users">Mostar<i class="material-icons right">dashboard</i></a></li>
 </ul>
 <ul id="dropdown2" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>accounts/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>accounts">Mostar<i class="material-icons right">dashboard</i></a></li>
 </ul>
 <ul id="dropdown3" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>transactions/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>transactions">Mostar<i class="material-icons right">dashboard</i></a></li>
 </ul>
 <ul id="dropdown4" class="dropdown-content">
   <li><a href="<?php echo APP_URL; ?>categories/add">Añadir<i class="material-icons right">add</i></a></li>
   <li class="divider"></li>
   <li><a href="<?php echo APP_URL; ?>categories">Mostar<i class="material-icons right">dashboard</i></a></li>
 </ul>
 <nav class="green ighten-5 z-depth-2" role="navigation">
   <div class="green ighten-2 nav-wrapper container green ighten-5 ">
     <a id="logo-container green ighten-5" href="#" class="brand-logo">App</a>
     <ul class="right hide-on-med-and-down">
       <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Usuarios</a></li>
       <li><a class="dropdown-button" href="#!" data-activates="dropdown2">Cuentas</a></li>
       <li><a class="dropdown-button" href="#!" data-activates="dropdown3">Transacciones</a></li>
       <li><a class="dropdown-button" href="#!" data-activates="dropdown4">Categorias</a></li>
   <li class="col l2"><a href="<?php echo APP_URL; ?>users/logout">Cierra sesión</a></li>
     </ul>
     <ul id="nav-mobile" class="side-nav">
       <li><a class="dropdown-button" href="#!" data-activates="dropdown11">Usuarios</a></li>
       <li><a class="dropdown-button" href="#!" data-activates="dropdown22">Cuentas</a></li>
       <li><a class="dropdown-button" href="#!" data-activates="dropdown33">Transacciones</a></li>
       <li><a class="dropdown-button" href="#!" data-activates="dropdown44">Categorias</a></li>
   <li><a href="<?php echo APP_URL; ?>users/logout">Cierra sesión<i class="material-icons right">vpn_key</i></a></li>
     </ul>
     <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
   </div>
 </nav>
    <div class="container">
