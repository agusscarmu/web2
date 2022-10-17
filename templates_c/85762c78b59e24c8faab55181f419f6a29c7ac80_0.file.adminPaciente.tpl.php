<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:20:57
  from '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/adminPaciente.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dab1933b9d8_19545677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85762c78b59e24c8faab55181f419f6a29c7ac80' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Web2/Web-main/templates/adminPaciente.tpl',
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
function content_634dab1933b9d8_19545677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <a type="button" href="administracion" class="revealUp3 btn ml-5 btn-outline-light">Volver</a>
<div>
  <h1 class="revealUp2">Administrar Pacientes</h1>
</div>

<div class="revealUp contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="agregarpx" method="POST" enctype="multipart/form-data">
    <label for="basic-url" class="form-label">Datos del paciente:</label>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">Paciente</span>
      <input type="text" class="form-control" name="name" placeholder="Nombre y Apellido" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    
    <div class="input-group mb-3">
    <span class="input-group-text">Edad</span>
      <input type="number" class="form-control" name="edad" placeholder="Edad" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">DNI</span>
      <input type="number" class="form-control" name="dni" placeholder="D.N.I." id="basic-url" aria-describedby="basic-addon3">
    </div>
    
    <div class="input-group mb-3">
      <span class="input-group-text">Obra social</span>
            <select name="obrasocial" class="form-control" aria-label="Recipient's username">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['osocial']->value, 'obras');
$_smarty_tpl->tpl_vars['obras']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['obras']->value) {
$_smarty_tpl->tpl_vars['obras']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['obras']->value->ID;?>
"><?php echo $_smarty_tpl->tpl_vars['obras']->value->nombre;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
      
    </div>

    <div class="input-group mb-3">
      <span class="input-group-text">Motivo de consulta</span>
      <textarea class="form-control" name="motivo" placeholder="Ingrese motivo de consulta" aria-label="With textarea"></textarea>
    </div>
   
    <div class="input-group mb-3">
    <span class="input-group-text mb-2">Estudio de imagen
    <input class="ml-3" type="file" name="imagen" id="image-input"></span>
    </div>

    
        <button type="submit" class="botonagregar btn btn-primary">Agregar paciente</button>
    </form>

</div>
<div class="conteo">
<?php ob_start();
echo $_smarty_tpl->tpl_vars['count']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 > 1) {?>
    <h1 class="revealUp3">El sistema cuenta con <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 pacientes ingresados</h1>
<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['count']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == 1) {?>
    <h1 class="revealUp3">El sistema cuenta con <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 paciente ingresado</h1>
<?php }
ob_start();
echo $_smarty_tpl->tpl_vars['count']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == 0) {?>
    <h1 class="revealUp3">El sistema no cuenta con pacientes ingresados</h1>
<?php }?>
    
</div>
</tr></tr>
<h2>Datos de pacientes:</h2>
<table class="table">
<thead class="table-light">
        <tr class="contenedor text-center">
            <th class="nombre" scope="col">Nombre</th>
            <th class="edad" scope="col">Edad</th>
            <th class="dni" scope="col">DNI</th>
            <th class="motivo" scope="col">Motivo de consulta</th>
            <th class="obrasocial" scope="col">Obra social</th>
            <th class="extra" scope="col">Acciones</th>

        </tr>
    </thead>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pacientes']->value, 'paciente');
$_smarty_tpl->tpl_vars['paciente']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['paciente']->value) {
$_smarty_tpl->tpl_vars['paciente']->do_else = false;
?>
    
      <table class="table vertical-align: middle">
      
      <tbody class="tablapaciente2">
      <tr class="contenedor text-center">
        <th class="nombre"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->nombre;?>
</th>
        <td class="edad"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->edad;?>
</td>
        <td class="dni"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->dni;?>
</td>
        <td class="motivo"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->motivo;?>
</td>
        <?php ob_start();
echo $_smarty_tpl->tpl_vars['paciente']->value->nombre2;
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4 == '') {?>
        <td class="obrasocial">Sin obra social</td>   
        <?php } else { ?>
        <td class="obrasocial"><?php echo $_smarty_tpl->tpl_vars['paciente']->value->nombre2;?>
</td>     
        <?php }?>
        <td class="extra"><a href='borrar/<?php echo $_smarty_tpl->tpl_vars['paciente']->value->id;?>
' type='button' class='btn ml-auto btn-danger'>Borrar</a> <a href='modificar/<?php echo $_smarty_tpl->tpl_vars['paciente']->value->id;?>
' type='button' class='btn btn-primary'>Modificar</a></td>
    
      </tr>
      </tbody>
    </table>
      
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
