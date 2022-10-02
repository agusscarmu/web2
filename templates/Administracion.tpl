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
<div>
  <h1 class="revealUp2">Administracion</h1>
</div>

<div class="revealUp contenedoradmin shadow-lg p-3 mb-5 bg-body rounded">
    <form action="agregar" method="POST">
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
            {foreach from=$osocial item=$obras}
                <option value="{$obras->ID}">{$obras->nombre}</option>
            {/foreach}
            </select>
      
    </div>
   
    
    <div class="input-group">
      <span class="input-group-text">Motivo de consulta</span>
      <textarea class="form-control" name="motivo" placeholder="Ingrese motivo de consulta" aria-label="With textarea"></textarea>
    </div>
        <button type="submit" class="botonagregar btn btn-primary">Agregar paciente</button>
    </form>

</div>
<div class="conteo">
<h1 class="revealUp3">Gestion de datos</h1>
</div>
</tr></tr>
<h2>Datos de pacientes:</h2>
<table class="table">
<thead class="table-light">
        <tr class="contenedor">
            <th class="nombre" scope="col">Nombre</th>
            <th class="edad" scope="col">Edad</th>
            <th class="dni" scope="col">DNI</th>
            <th class="motivo" scope="col">Motivo de consulta</th>
            <th class="obrasocial" scope="col">Obra social</th>
        </tr>
    </thead>

{include file="listaAdminPacientes.tpl"}
{include file="footer.tpl"}
