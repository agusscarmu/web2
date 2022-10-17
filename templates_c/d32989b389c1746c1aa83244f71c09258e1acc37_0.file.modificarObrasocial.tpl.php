<?php
/* Smarty version 4.2.1, created on 2022-10-15 17:10:18
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/modificarObrasocial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634acd5a744398_45947611',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd32989b389c1746c1aa83244f71c09258e1acc37' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/modificarObrasocial.tpl',
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
function content_634acd5a744398_45947611 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
  <h1 class="revealUp2">Modificar obra social</h1>
</div>
</tr></tr>
<div class="revealUp contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="actualizaros" method="POST">
    <label for="basic-url" class="form-label">Datos de la obra social:</label>
    <div class="mb-3">
        <input type="hidden" id="disabledTextInput" name="id" value="<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->ID;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->ID;?>
">
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Nombre</span>
      <input type="text" class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->nombre;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->nombre;?>
" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Tipo</span>
      <input type="text" class="form-control" name="tipo"  value="<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->tipo;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->tipo;?>
" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">Domicilio</span>
      <input type="text" class="form-control" name="domicilio" value="<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->domicilio;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->domicilio;?>
" id="basic-url" aria-describedby="basic-addon3">
    </div>
    
    <div class="input-group">
      <span class="input-group-text">Telefono</span>
      <input type="text" class="form-control" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->telefono;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->telefono;?>
" aria-label="With textarea"></input>
    </div>
        <button type="submit" class="botonagregar btn btn-success">Actualizar obra social</button>
    </form>

</div>
<div class="ml-5 abs-center">
<a href='aviso/<?php echo $_smarty_tpl->tpl_vars['obrasocial']->value[0]->ID;?>
' type='button' class='revealUp3 btn btn-danger shadow-lg p-3 mb-5 bg-body rounded'>Borrar obra social</a>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
