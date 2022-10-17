<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:20:51
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/listaPacientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dab13a81ae5_82781822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b8c0e71f2aff9cc4dc0885fc9e45da886e4e313' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/listaPacientes.tpl',
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
function content_634dab13a81ae5_82781822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="conteo">
<?php ob_start();
echo $_smarty_tpl->tpl_vars['count']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 1) {?>
    <h1 class="revealUp2">Actualmente hay <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 pacientes esperando a ser atendidos</h1>
<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['count']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 1) {?>
    <h1 class="revealUp2">Actualmente hay <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 paciente esperando a ser atendido</h1>
<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['count']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 0) {?>
    <h1 class="revealUp2">Actualmente no hay pacientes esperando a ser atendidos</h1>
<?php }?>
    
</div>
<div>
    <h1 class="revealUp3"> Lista de pacientes: </h1>
</div>
<div class="revealUp tablaspacientes shadow-lg p-3 bg-body rounded mb-6">
    <div class="input-group mb-3">
            <form action="buscar" class="input-group" method="GET">
            <span class="input-group-text">Filtrar por obra social</span>
            <select name="obrasocial" class="form-control" aria-label="Recipient's username">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['osocial']->value, 'obras');
$_smarty_tpl->tpl_vars['obras']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['obras']->value) {
$_smarty_tpl->tpl_vars['obras']->do_else = false;
?> 
        
                      <option value="<?php echo $_smarty_tpl->tpl_vars['obras']->value->ID;?>
" selected><?php echo $_smarty_tpl->tpl_vars['obras']->value->nombre;?>
</option>
               

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <button type="submit" class="input-group-prepend input-group-text"><img class="" src="./images/icone-loupe-noir.png" height="20" width="20"></button>
            </form>
    </div>
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
}
}
