<!DOCTYPE html>
    <html lang="en">

    <head>
        <base href="{ADMIN_URL}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consultorio</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <header>
    </header>
    <nav class="navbar-expand-sm   navbar-light bg-light nav-pills nav-fill">

        <div class="shadow-lg p-3 mb-5 bg-body rounded">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="pacientes">Pacientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ingresar">Ingresar</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="administracion">Administracion</a>
          </li>
          </ul>
        </div>
      </nav>
  
    <section>
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