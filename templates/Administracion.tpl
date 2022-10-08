{include file="header.tpl"}
  <div class="d-flex justify-content-center ml-5 mr-5">

    <div class="revealUp card shadow-lg ml-5 mr-auto p-3 mb-5 bg-body rounded h-25 d-inline-block mh-100" style="width: 500px">
    <img src="./images/paciente.jpeg" class="card-img-top" height="300" width="200">
  
    <div class="card-body">
      <h5 class="card-title">Administrar listado de pacientes</h5>
      <p class="card-text">Agregar, modificar o eliminar datos de los pacientes registrados</p>
      <a href="adminpacientes" class="btn btn-primary">Administrar pacientes</a>
    </div>
    </div>

    <div class="revealUp2 card shadow-lg mr-5 ml-auto p-3 ml-5 mb-5 bg-body rounded h-25 d-inline-block mh-100" style="width: 500px">
    <img src="./images/obrasocial.jpeg" class="card-img-top" height="300" width="200">

    <div class="card-body">
      <h5 class="card-title">Administrar listado de obras sociales</h5>
      <p class="card-text">Agregar, modificar o eliminar datos de las obras sociales registradas</p>
      <a href="adminseguros" class="btn btn-primary">Administrar obras sociales</a>
    </div>
    </div>
</div>
<div class="">
<h1 class="revealUp3">El sistema cuenta con un registro de: {$countpx} pacientes y {$countos} obras sociales</h1>
</div>
  

{include file="footer.tpl"}