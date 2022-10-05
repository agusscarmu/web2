<!DOCTYPE html>
    <html lang="en">

    <head>
        <base href="{VIEW_URL}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <title>Consultorio</title>
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
        <h1 class="revealUp3"> Inspeccionar a {$pacientes[0]->nombre} </h1>
    </div>
    <div class="revealUp tablaspacientes shadow-lg p-3 bg-body rounded mb-6">
    <form action="buscar" class="input-group mb-3" method="GET">
      <input type="text" class="form-control" name="name" placeholder="Buscar paciente" aria-label="Username" aria-describedby="basic-addon1">
      <button type="submit" class="input-group-prepend input-group-text"><img class="" src="./images/icone-loupe-noir.png" height="20" width="20"></button>
    </form>
    <table class="table">
    <thead class="table-light">
            <tr class="contenedor">
                <th class="nombre" scope="col">Nombre</th>
                <th class="edad" scope="col">Edad</th>
                <th class="dni" scope="col">DNI</th>
                <th class="motivo" scope="col">Motivo de consulta</th>
                <th class="obrasocial" scope="col">Obra social</th>
                <th class="extra" scope="col">Tipo de obra social</th>
            </tr>
        </thead>
    {foreach from=$pacientes item=$paciente}
        <table class="table vertical-align: middle">
        
        <tbody class="tablapaciente">
        <tr class="contenedor">
          <th class="nombre">{$paciente->nombre}</th>
          <td class="edad">{$paciente->edad}</td>
          <td class="dni">{$paciente->dni}</td>
          <td class="motivo">{$paciente->motivo}</td>
          <td class="obrasocial">{$paciente->nombre2}</td>
          <td class="extra">{$paciente->tipo}</td>
        </tr>
        </tbody>
      </table>
        
    {/foreach}
    </div>
    {include file="footer.tpl"}
    