<?php
/* Smarty version 4.2.1, created on 2022-10-15 17:10:49
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/searchPaciente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634acd7933e7e4_86745690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '946e9b4b51908798ad5c93fbefa59ae119667cb2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/searchPaciente.tpl',
      1 => 1665765388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634acd7933e7e4_86745690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
   
    <div>
    <?php if ($_smarty_tpl->tpl_vars['pacientes']->value) {?>
        <h1 class="revealUp3"> Lista de pacientes con obra social: <?php echo $_smarty_tpl->tpl_vars['pacientes']->value[0]->nombre2;?>
 </h1>
    <?php } else { ?>
        <h1 class="revealUp3"> No hay ningun paciente registrado con dicha obra social </h1>
    <?php }?>
        
    </div>
    <div class="revealUp tablaspacientes shadow-lg p-3 bg-body rounded mb-6">
    <table class="table">
    <thead class="table-light">
            <tr class="contenedor">
                <th class="nombre" scope="col">Nombre</th>
                <th class="edad" scope="col">Edad</th>
                <th class="dni" scope="col">DNI</th>
                <th class="motivo" scope="col">Motivo de consulta</th>
                <th class="obrasocial" scope="col">Obra social</th>
                <th class="acciones" scope="col"></th>
            </tr>
        </thead>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pacientes']->value, 'paciente');
$_smarty_tpl->tpl_vars['paciente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paciente']->value) {
$_smarty_tpl->tpl_vars['paciente']->do_else = false;
?>
        <table class="table vertical-align: middle">
        
        <tbody class="tablapaciente">
        <tr class="contenedor">
          <th class="nombre"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->nombre;?>
</th>
          <td class="edad"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->edad;?>
</td>
          <td class="dni"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->dni;?>
</td>
          <td class="motivo"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->motivo;?>
</td>
          <td class="obrasocial"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->nombre2;?>
</td>
          <td class="acciones"><a href="ver/<?php echo $_smarty_tpl->tpl_vars['paciente']->value->id;?>
" type="button" class="btn btn-outline-primary">Ver paciente</a></td>
        </tr>
        </tbody>
      </table>
        
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
}
