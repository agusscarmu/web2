<?php
/* Smarty version 4.2.1, created on 2022-10-17 00:46:11
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/viewPaciente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634c89b3256261_18559831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61b85115f3c791b2959d50a83c6dfe728486e73c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/viewPaciente.tpl',
      1 => 1665960363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634c89b3256261_18559831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <h1 class="revealUp2">Datos de <?php echo $_smarty_tpl->tpl_vars['pacientes']->value[0]->nombre;?>
</h1>
    <div class="revealUp modifpx contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
        
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Nombre</span>
      <span class="form-control"><?php echo $_smarty_tpl->tpl_vars['pacientes']->value[0]->nombre;?>
</span>
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Edad</span>
    <span class="form-control"><?php echo $_smarty_tpl->tpl_vars['pacientes']->value[0]->edad;?>
</span>
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">DNI</span>
      <span class="form-control"><?php echo $_smarty_tpl->tpl_vars['pacientes']->value[0]->dni;?>
</span>    
      </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">Obra social</span>
      <span class="form-control"><?php echo $_smarty_tpl->tpl_vars['pacientes']->value[0]->nombre2;?>
</span>
      <span class="input-group-text">Tipo de obra social</span>
      <span class="form-control"><?php echo $_smarty_tpl->tpl_vars['pacientes']->value[0]->tipo;?>
</span>
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Motivo de consulta</span>
      <span class="form-control"><?php echo $_smarty_tpl->tpl_vars['pacientes']->value[0]->motivo;?>
</span>
    </div>

    <div class="input-group mb-3">
    <span class="input-group-text">Estudios de imagenes</span>
    <?php if ((isset($_smarty_tpl->tpl_vars['pacientes']->value[0]->imagen))) {?>
      <img src="<?php echo $_smarty_tpl->tpl_vars['pacientes']->value[0]->imagen;?>
" class="img-fluid" alt="Responsive image"/>
    <?php } else { ?>
      <span class="form-control">No hay estudios hechos</span>
    <?php }?>

    
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
