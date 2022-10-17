<?php
/* Smarty version 4.2.1, created on 2022-10-15 17:09:18
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634acd1ee682a5_15363177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45db6c219dbd84f8cc1a81b113ac74fbee41b8ba' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/formLogin.tpl',
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
function content_634acd1ee682a5_15363177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="singin">
  <h1 class="revealUp2">Iniciar sesion</h1>
</div>
<div class="revealUp login shadow-lg rounded p-3 mb-5 bg-body">
    <Form class="loginform" action="ingreso" method="POST">
      <div class="maillogin mb-5 ml5 mr5">
        <label for="exampleInputEmail1" class="form-label">Su correo electronico</label>
        <input type="email" class="form-control" name="loginmail" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="passlogin mb-5 ml5 mr5">
        <label for="exampleInputPassword1" class="form-label">Su contraseña</label>
        <input type="password" class="form-control" name="loginpass" id="exampleInputPassword1">
      </div>
      <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger ml-5 mr-5 d-flex justify-content-center">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
      <?php }?>
      <div class="text-center">
      <button type="submit" class="revealUp3 botonlogin btn btn-sm btn-primary">Iniciar sesion</button>
      </div>
</Form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
