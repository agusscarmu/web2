<?php
function showRegistrarse(){
?>
<form action="registro" method="POST">
    <label for="">Su nombre:</label><input type="text" name="name" placeholder="Apellido y Nombre">
    <label for="">Su numero de documento:</label><input type="number" name="dni" placeholder="DNI">
    <label for="">Su edad:</label><input type="number" name="edad" placeholder="Edad">
    <label for="">Su mail:</label><input type="text" name="mail" placeholder="ejemplo@mail.com">
    <label for="">Establezca una contraseña:</label><input type="password" name="pass" placeholder="Contraseña">
    <button type="submit">Registrarse</button>
</form>
<?php
}
?>