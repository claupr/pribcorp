<?php

$connection = mysqli_connect('localhost','root','', 'cuestionarioprib');
//localhost es el servidor, root es el username, "" <- esto que esta en blanco es el password que no se ha set en el database, loginapp es como se llama el database
if(!$connection) {
    die("Database connection failed");
}
