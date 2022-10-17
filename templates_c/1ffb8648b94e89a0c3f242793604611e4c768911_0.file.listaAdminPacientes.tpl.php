<?php
/* Smarty version 4.2.1, created on 2022-10-02 18:05:07
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/listaAdminPacientes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6339b6b39c5f27_75031294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ffb8648b94e89a0c3f242793604611e4c768911' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/listaAdminPacientes.tpl',
      1 => 1664724830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6339b6b39c5f27_75031294 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pacientes']->value, 'paciente');
$_smarty_tpl->tpl_vars['paciente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paciente']->value) {
$_smarty_tpl->tpl_vars['paciente']->do_else = false;
?>
    
    <table class="table vertical-align: middle">
    
    <tbody class="tablapaciente2">
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
      <td><a href='borrar/<?php echo $_smarty_tpl->tpl_vars['paciente']->value->id;?>
' type='button' class='btn btn-danger'>Borrar</a></td>
      <td><a href='modificar/<?php echo $_smarty_tpl->tpl_vars['paciente']->value->id;?>
' type='button' class='btn btn-primary'>Modificar</a></td>
    </tr>
    </tbody>
  </table>
    
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
