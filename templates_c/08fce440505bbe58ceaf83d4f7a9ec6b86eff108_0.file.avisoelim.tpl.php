<?php
/* Smarty version 4.2.1, created on 2022-10-15 17:10:25
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/avisoelim.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634acd616300b5_77254320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08fce440505bbe58ceaf83d4f7a9ec6b86eff108' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/avisoelim.tpl',
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
function content_634acd616300b5_77254320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="css/styleAviso.css">

<div class="revealUp tableroaviso shadow-lg p-3 bg-body rounded mb-6">
<h3>¿Desea eliminar <?php echo $_smarty_tpl->tpl_vars['obra']->value[0]->nombre;?>
?</h3>
<h5>Una vez eliminada la obra social se eliminaran todos los pacientes que esten afiliados a la misma</h5>
<a href='adminseguros' type='button' class='revealUp3 btnvolver btn ml-auto btn-primary'>Volver</a>
<a href='eliminar/<?php echo $_smarty_tpl->tpl_vars['obra']->value[0]->ID;?>
' type='button' class='revealUp3 btnborrar btn ml-auto btn-danger'>Borrar</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
