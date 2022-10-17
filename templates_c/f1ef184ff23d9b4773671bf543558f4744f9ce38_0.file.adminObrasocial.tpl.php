<?php
/* Smarty version 4.2.1, created on 2022-10-15 17:10:16
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/adminObrasocial.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634acd58802950_17422301',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1ef184ff23d9b4773671bf543558f4744f9ce38' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/adminObrasocial.tpl',
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
function content_634acd58802950_17422301 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <a type="button" href="administracion" class="revealUp3 btn ml-5 btn-outline-light">Volver</a>
<div>
  <h1 class="revealUp2">Administrar Obras sociales</h1>
</div>


<div class="revealUp contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="agregaros" method="POST">
    <label for="basic-url" class="form-label">Datos de la obra social:</label>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Nombre</span>
      <input type="text" class="form-control" name="name" placeholder="Nombre de la obra social" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Tipo</span>
      <input type="text" class="form-control" name="tipo" placeholder="Tipo de obra social" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">Domicilio</span>
      <input type="text" class="form-control" name="domicilio" placeholder="Domicilio legal" id="basic-url" aria-describedby="basic-addon3">
    </div>
    
    <div class="input-group">
      <span class="input-group-text">Telefono</span>
      <input type="text" class="form-control" name="telefono" placeholder="Numero de telefono" aria-label="With textarea"></input>
    </div>
        <button type="submit" class="botonagregar btn btn-primary">Agregar obra social</button>
    </form>

</div>

<div class="conteo">
<?php ob_start();
echo $_smarty_tpl->tpl_vars['count']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 1) {?>
    <h1 class="revealUp3">El sistema cuenta con <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 obras sociales registradas</h1>
<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['count']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 1) {?>
    <h1 class="revealUp3">El sistema cuenta con <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 obra social registrada</h1>
<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['count']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 0) {?>
    <h1 class="revealUp3">El sistema no cuenta con obras sociales registradas</h1>
<?php }?>
</div>
</tr></tr>
<h2>Datos de obra social:</h2>
<table class="table vertical-align: middle">
<thead class="table-light">
        <tr class="contenedor text-center">
            <th class="nombre" scope="col">Nombre</th>
            <th class="tipo" scope="col">Tipo</th>
            <th class="domicilio" scope="col">Domicilio</th>
            <th class="telefono" scope="col">Telefono</th>
            <th class="acciones" scope="col">Editar</th>
             <th class="acciones" scope="col">Eliminar</th>
            

        </tr>
    </thead>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obras']->value, 'obra');
$_smarty_tpl->tpl_vars['obra']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['obra']->value) {
$_smarty_tpl->tpl_vars['obra']->do_else = false;
?>
    
      <table class="table vertical-align: middle">
      
      <tbody class="tablapaciente">
      <tr class="contenedor text-center">
        <th class="nombre"><?php echo $_smarty_tpl->tpl_vars['obra']->value->nombre;?>
</th>
        <td class="tipo"><?php echo $_smarty_tpl->tpl_vars['obra']->value->tipo;?>
</td>
        <th class="domicilio"><?php echo $_smarty_tpl->tpl_vars['obra']->value->domicilio;?>
</th>
        <td class="telefono"><?php echo $_smarty_tpl->tpl_vars['obra']->value->telefono;?>
</td>
        <td class="extra2"><a href='editar/<?php echo $_smarty_tpl->tpl_vars['obra']->value->ID;?>
' type='button' class='btn btn-primary'>Modificar</a></td>
        <td class="extra"><a href='aviso/<?php echo $_smarty_tpl->tpl_vars['obra']->value->ID;?>
' type='button' class='btn ml-auto btn-danger'>Borrar</a></td>

    
      </tr>
      </tbody>
    </table>
      
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
