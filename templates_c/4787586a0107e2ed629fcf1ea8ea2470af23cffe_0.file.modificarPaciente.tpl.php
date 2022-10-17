<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:21:10
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/modificarPaciente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dab264e6757_27508157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4787586a0107e2ed629fcf1ea8ea2470af23cffe' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/modificarPaciente.tpl',
      1 => 1665948144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634dab264e6757_27508157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div>
  <h1 class="revealUp2">Modificar paciente</h1>
</div>
<div>
<div class="revealUp modifpx contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="actualizar" method="POST" enctype="multipart/form-data">
    <label for="basic-url" class="form-label">Datos del paciente:</label>
   
    <div class="mb-3 ">
        <input type="hidden" id="disabledTextInput" name="id" value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value[0]->ID;?>
" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['paciente']->value[0]->ID;?>
">
    </div>
        
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Paciente</span>
      <input type="text" class="form-control" name="name" placeholder="Nombre y Apellido" value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value[0]->nombre;?>
" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Edad</span>
      <input type="number" class="form-control" name="edad" placeholder="Edad" aria-label="Recipient's username" value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value[0]->edad;?>
" aria-describedby="basic-addon2">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">DNI</span>
      <input type="number" class="form-control" name="dni" value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value[0]->dni;?>
"  placeholder="D.N.I." id="basic-url" aria-describedby="basic-addon3">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">Obra social</span>
      <div>
      <select name="obrasocial" class="form-control" aria-label="Recipient's username">
    
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['osocial']->value, 'obras');
$_smarty_tpl->tpl_vars['obras']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['obras']->value) {
$_smarty_tpl->tpl_vars['obras']->do_else = false;
?> 
            <?php if ($_smarty_tpl->tpl_vars['paciente']->value[0]->ID_obrasocial == $_smarty_tpl->tpl_vars['obras']->value->ID) {?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['obras']->value->ID;?>
" selected><?php echo $_smarty_tpl->tpl_vars['obras']->value->nombre;?>
</option>
            <?php } else { ?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['obras']->value->ID;?>
"><?php echo $_smarty_tpl->tpl_vars['obras']->value->nombre;?>
</option>
            <?php }?>
            
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </select>
      </div>
      
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">Motivo de consulta</span>
      <input class="form-control" name="motivo" value="<?php echo $_smarty_tpl->tpl_vars['paciente']->value[0]->motivo;?>
" placeholder="Ingrese motivo de consulta" aria-label="With textarea"></input>

    </div>
    <div class="input-group mb-3">
    <span class="input-group-text mb-2">Estudio de imagen
    <input class="ml-3" type="file" name="imagen" id="imageToUpload">    <img src=<?php echo $_smarty_tpl->tpl_vars['paciente']->value[0]->imagen;?>
 class="img-thumbnail" width=30<?php echo '%>'; ?>

    </span>
    </div>
        <button src="adminpaciente" class="botonagregar btn btn-primary">Volver</button>
        <button type="submit" class="botonagregar btn btn-success">Actualizar paciente</button>
    </form>
</div>
<div class="ml-5 abs-center">
<a href='borrar/<?php echo $_smarty_tpl->tpl_vars['paciente']->value[0]->ID;?>
' type='button' class='revealUp3 btn btn-danger shadow-lg p-3 mb-5 bg-body rounded'>Borrar paciente</a>
</div>

 </section>
 <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
 </body>
 </html><?php }
}
