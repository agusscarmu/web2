<!DOCTYPE html>
    <html lang="en">

    <head>
        <base href="{BASE_URL}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
        <title>Consultorio</title>
    </head>
    <body>
    <header>
    <nav class="navbar-expand-sm   navbar-light bg-light nav-pills nav-fill">
    <ul class="nav nav-pills nav-justified d-flex justify-content-between shadow-lg p-3 mb-5 bg-body rounded">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="pacientes">Pacientes</a>
  </li>
  {if (!isset($smarty.session.ID))}
    <li class="nav-item ml-auto">
    <a class="nav-link" href="ingresar">Ingresar</a>
    </li>
  {else}
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      Dr. {$smarty.session.nombre}
    </a>
    <ul class="revealDown dropdown-menu align-items">
      <li><a class="dropdown-item" href="administracion">Administracion</a></li>
      <li><a class="dropdown-item" href="logout">Cerrar sesion</a></li>
    </ul>
  </li>
  {/if}
</ul>
</nav>
</header>
<section>