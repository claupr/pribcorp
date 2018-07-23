<?php include "db.php"; ?>

<?php 
const BR = '<br/>';
// define variables and set to empty values
$nombre_error = $email_error = $telefono_error = $apellido_error = $compania_error =  "";
$nombre = $email = $telefono= $message = $apellido = $success = $compania = "";

function createRows(){
    global $connection;
if(isset($_POST['submit'])){
$dinero = $_POST['dinero'];
$tiempo = $_POST['tiempo'];
$credito = $_POST['credito'];
$estado = $_POST['estado'];

    $query = "INSERT INTO respuestas(dinero,tiempo, credito, estado)"; 
    $query .= "VALUES('$dinero', '$tiempo', '$credito', '$estado')";     
    
    $result = mysqli_query($connection, $query);
    if(!$result){
        die('Query failed' . mysqli_error());

    } else {
        echo "Record Created";
    }
}

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nombre"])) {
        $nombre_error = "El Nombre del due&#241; es requerido";
    } else {
        $nombre = test_input($_POST["nombre"]);
        // check if nombre only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$nombre)) {
            $apellido_error = "Nada mas letras y espacios en blancos se permiten"; 
        }
    }
    if (empty($_POST["apellido"])) {
        $apellido_error = "El apelido del due&#241; es requerido";
    } else {
        $apellido = test_input($_POST["nombre"]);
        // check if nombre only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$apellido)) {
            $apellido_error = "Nada mas letras y espacios en blancos se permiten"; 
        }
    }


    if (empty($_POST["email"])) {
        $email_error = "El email es requerido.";
    } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Formato invalido de Email"; 
        }
    }

    if (empty($_POST["telefono"])) {
        $telefono_error = "El Telefono es requerido";
    } else {
        $telefono= test_input($_POST["telefono"]);
        // check if e-mail address is well-formed
        if (!preg_match("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\)\]\s-]{0,2}?\d{3}[\s-]?\d{4}$/i",$telefono)) {
            $telefono_error = "Formato de telefono Invalido"; 
        }
    }
    
    if (empty($_POST["compania"])) {
        $compania_error = "El Nombre de la compa&#241ia; es requerido";
    } else {
        $compania = test_input($_POST["compania"]);
        // check if nombre only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$compania)) {
            $compania_error = "Nada mas letras y espacios en blancos se permiten"; 
        }
    } 
    
    
    

    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }

    if ($nombre_error == '' and $email_error == '' and $telefono_error == '' and $apellido_error == '' and $compania_error == '' ){
        $message_body = '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value){
            $message_body .=  "$key: $value\n";
        }

        $to = 'csorianoa@gmail.com';
        $subject = 'Cuestionario lleno';
        if (mail($to, $subject, $message)){
            $success = "El Cuestionario ha sido llenado exitosamente, nos comunicaremos pronto con usted!";
            $nombre = $email = $telefono= $message = $apellido = $compania = '';
        }
    }

}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
