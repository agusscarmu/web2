<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:20:51
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dab13a910f1_38163625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19b7b669978eb1b6bf5deddd02291783a9984275' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/header.tpl',
      1 => 1665948144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dab13a910f1_38163625 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">

    <head>
        <base href="<?php echo BASE_URL;?>
">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"><?php echo '</script'; ?>
>
        <title>Consultorio</title>
    </head>
    <body>
    <header>
    <nav class="navbar-expand-sm   navbar-light bg-light nav-pills nav-fill">
    <ul class="nav nav-pills nav-justified d-flex justify-content-between shadow-lg p-3 mb-5 bg-body rounded">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="pacientes">Pacientes</a>
  </li>
  <?php if ((!(isset($_SESSION['ID'])))) {?>
    <li class="nav-item ml-auto">
    <a class="nav-link" href="ingresar">Ingresar</a>
    </li>
  <?php } else { ?>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <?php echo $_SESSION['nombre'];?>

    </a>
    <ul class="revealDown dropdown-menu align-items">
      <li><a class="dropdown-item" href="administracion">Administracion</a></li>
      <li><a class="dropdown-item" href="logout">Cerrar sesion</a></li>
    </ul>
  </li>
  <?php }?>
</ul>
</nav>
</header>
<section><?php }
}
