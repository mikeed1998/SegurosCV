<?php
    require('includes/layout.php');
?>

<?=$headGNRL;?>
<?=$header;?>


<?php
    if (empty($_GET['id_usuario'])) {
        echo "El ID del usuario no está especificado.";
        exit();
    }

    $id_usuario = intval($_GET['id_usuario']);

    $sql = "SELECT token_verificado FROM users WHERE id = '$id_usuario'";
    $resultado = mysqli_query($conn, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $token_verificado = mysqli_fetch_assoc($resultado)['token_verificado'];
    } else {
        echo "El usuario no existe.";
        exit();
    }

    if($token_verificado == 0) {
        echo '
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center display-5 py-5">
                        Cuenta no verificada, ingresa el token que llego a tu correo electrónico
                    </div>
                    <div class="col-6 mx-auto text-center  py-5">
                        <form action="includes/acciones.php" method="POST">
                            <input type="hidden" name="id_u" value="'. $id_usuario .'">
                            <input type="text" class="form-control fs-5" name="token_" placeholder="Token de seguridad">
                            <input type="submit" class="btn btn-outline border border-info rounded-pill" value="Confirmar">
                        </form>
                    </div>
                </div>
            </div>
        ';
    } else {
        echo '
        <div class="container">
            <div class="row">
                <div class="col-12 text-center display-5 py-5">
                    Has ingresado a tu perfil
                </div>
            </div>
        </div>
    ';
    }
?>


<?=$footerGNRL;?>

