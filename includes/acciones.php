<?php

require('conexion.php');

if(isset($_POST['correo']) && isset($_POST['password'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $password_codificada = base64_encode($password);

    $sql = "SELECT id FROM users WHERE correo = '$correo' AND pasword = '$password_codificada'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $id_usuario = mysqli_fetch_assoc($resultado)['id'];

        // session_start();

        // $_SESSION['id_usuario'] = $id_usuario;

        header("Location: ../perfil.php?id_usuario=$id_usuario");
    } else {
        echo "La contraseña es incorrecta.";
    }

    mysqli_close($conn);
}

if(isset($_POST['id_u']) && isset($_POST['token_'])) {
    $user = $_POST['id_u'];
    $token_aux = $_POST['token_'];

    $sql = "SELECT token FROM users WHERE id = '$user'";
    $resultado = mysqli_query($conn, $sql);

    $token_db = mysqli_fetch_assoc($resultado)['token'];

    if($token_aux == $token_db) {
        $sql2 = "UPDATE users SET token_verificado = '1' WHERE id = '$user'";
        $resultado2 = mysqli_query($conn, $sql2);

        header("Location: ../perfil.php?id_usuario=$user");
    } else {
        header("Location: ../perfil.php?id_usuario=$user");
    }
}

?>
