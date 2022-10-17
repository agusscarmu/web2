<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:20:55
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/Administracion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dab17756ef0_08975634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dd712a31f0da88dae04188d83f77080259e44ff' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/Administracion.tpl',
      1 => 1665948144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dab17756ef0_08975634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="d-flex justify-content-center ml-5 mr-5">

    <div class="revealUp card shadow-lg ml-5 mr-auto p-3 mb-5 bg-body rounded h-25 d-inline-block mh-100" style="width: 500px">
    <img src="./images/paciente.jpeg" class="card-img-top" height="300" width="200">
  
    <div class="card-body">
      <h5 class="card-title">Administrar listado de pacientes</h5>
      <p class="card-text">Agregar, modificar o eliminar datos de los pacientes registrados</p>
      <a href="adminpacientes" class="btn btn-primary">Administrar pacientes</a>
    </div>
    </div>

    <div class="revealUp2 card shadow-lg mr-5 ml-auto p-3 ml-5 mb-5 bg-body rounded h-25 d-inline-block mh-100" style="width: 500px">
    <img src="./images/obrasocial.jpeg" class="card-img-top" height="300" width="200">

    <div class="card-body">
      <h5 class="card-title">Administrar listado de obras sociales</h5>
      <p class="card-text">Agregar, modificar o eliminar datos de las obras sociales registradas</p>
      <a href="adminseguros" class="btn btn-primary">Administrar obras sociales</a>
    </div>
    </div>
</div>
<div class="">
<h1 class="revealUp3">El sistema cuenta con un registro de: <?php echo $_smarty_tpl->tpl_vars['countpx']->value;?>
 pacientes y <?php echo $_smarty_tpl->tpl_vars['countos']->value;?>
 obras sociales</h1>
</div>
  

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
