<?php

//conexion bd mysql
$conexion = mysqli_connect("localhost","root","","timark");

//verificar si se ejecuto el metodo POST
if(isset($_POST['enviar'])){

    //Obtener parametros del formulario y limpiar espacios en blanco con trim 
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);

    //operador ternario: verificar estado checkbox
    $accPlataforma = isset($_POST['accesoPlataforma']) ? 1 : 0;
    // $accPlataforma = trim($_POST['accesoPlataforma']);
    $cliContrato = trim($_POST['clienteContrato']);
    $anioIngr = trim($_POST['anioIngreso']);
    // $fechaNac = trim($_POST['fechaNacimiento']);
    $comentarios = trim($_POST['comentarios']);


    //convertir a mayusculas con multibyte para evitar perdida de caracteres español
    $nombre = mb_strtoupper($nombre, 'UTF-8');
    $apellido = mb_strtoupper($apellido, 'UTF-8');
    $email = mb_strtoupper($email, 'UTF-8');
    $telefono = mb_strtoupper($telefono, 'UTF-8');

    //Sentencia insertar a la tabla perfil
    $consulta = "insert into perfil(nombreContacto, apellidoContacto, emailContacto, telefonoContacto, accesoPlataforma, contrato, anioIngreso, Comentario) 
    VALUES('$nombre','$apellido', '$email', '$telefono', '$accPlataforma', '$cliContrato', '$anioIngr', '$comentarios')";

    //ingreso datos a la BD
    $resultado = mysqli_query($conexion, $consulta);

    //verificar si la insercion a BD fue correcta y mostrar un mensaje
    if($resultado){
        ?>
        <h1>Registro completado con existo</h1>
        <?php
    }else{
        ?>
        <h1>Ocurrio un error</h1>
        <?php
    }

}else{
    // echo("metodo post no se ejecuto :(");
}


?>