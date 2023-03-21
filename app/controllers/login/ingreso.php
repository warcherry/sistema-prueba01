<?php

include('../../config.php');


/*aqui llega el usuario y el password $email y $password_user */
$email = $_POST['email'];
$password_user = $_POST['password_user'];

$contador = 0;
$sql ="SELECT * FROM tb_usuarios WHERE email = '$email' AND password_user = '$password_user';";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios=$query->fetchAll(fetch_style: PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    $contador = $contador + 1;
    $email_table = $usuario['email'];
    $nombres = $usuario['nombres'];
}

if ($contador == 0){
    echo "Datos incorrectos vuelva a intentarlo";
    session_start();
    $_SESSION['mensaje'] = "Error datos incorrectos";
    header('Location: ' . $URL . '/login');
}
else {
    echo "Datos correctos";
    session_start();
    $_SESSION['sesion_email'] = $email;
    //header(string: 'Location: '.$URL.'/index.php');   error de version arreglado con chatgpt
    header('Location: ' . $URL . '/index.php');
}


