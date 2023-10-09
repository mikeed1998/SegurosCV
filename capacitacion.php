<?php
    require('includes/layout.php');
?>

<?=$headGNRL;?>
<?=$header;?>

<section class="intro-capacitacion">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-6 px-0 d-flex align-content-center justify-content-center display-1 titulo-capacitacion">
                CAPACITACIÓN
            </div>
            <div class="col-6 px-0">
                <img src="img/insurance1.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-6 px-0">
                <img src="img/insurance2.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-6 px-0">
                <div class="row">
                    <div class="col-9  mt-5 mx-auto">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum neque, pariatur ex inventore laudantium, excepturi ab facere ea sapiente porro vero dolores accusamus error vel adipisci earum necessitatibus, aperiam eius explicabo. Doloribus voluptatibus corrupti, repudiandae ad nobis tempora perferendis hic illum qui quaerat laboriosam labore quasi quos quia dolorem neque accusantium harum explicabo molestias. Facilis veniam ullam cum dolore? Sit, nostrum repellat minus temporibus quae expedita error corporis, vitae quod reprehenderit dignissimos odio consequatur quos? Odit laborum minima sapiente est tempore odio! Illum commodi iusto ratione voluptatum vel veritatis velit sunt, quam nulla illo ea iure nobis dicta facere impedit.</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore obcaecati quas laborum eligendi nemo impedit distinctio, est quibusdam corrupti quisquam. Ullam odit tempora vitae tempore! Voluptas enim asperiores ducimus necessitatibus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="intro-capacitacion">
    <div class="container py-5">
        <form action="vendor/Correos/mail.php" method="POST">
            <input type="hidden" name="tipo" value="capacitacion">
            <div class="form-group row py-2">
                <div class="col-6 fs-1 mx-auto text-center">
                    Capacitate con nosotros
                </div>
            </div>
            <div class="form-group row py-2">
                <div class="col-6 mx-auto">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control">
                </div>
            </div>
            <div class="form-group row py-2">
                <div class="col-6 mx-auto">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control">
                </div>
            </div>
            <div class="form-group row py-2">
                <div class="col-3"></div>
                <div class="col-1 mx-auto">
                    <label for="edad">Edad</label>
                    <input type="number" name="edad" class="form-control">
                </div>
                <div class="col-2">
                    <label for="fecha">Fecha de nacimiento</label>
                    <input type="date" name="fecha" class="form-control">
                </div>
                <div class="col-3">
                    <label for="correo">Correo Electrónico</label>
                    <input type="text" name="correo" class="form-control">
                </div>
                <div class="col-3"></div>
            </div>
            <div class="form-group row py-2">
                <div class="col-3"></div>
                <div class="col-2">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" name="ciudad" class="form-control">
                </div>
                <div class="col-2">
                    <label for="estado">Estado</label>
                    <input type="text" name="estado" class="form-control">
                </div>
                <div class="col-2">
                    <label for="pais">Pais</label>
                    <input type="text" name="pais" class="form-control">
                </div>
                <div class="col-3"></div>
            </div>
            <div class="form-group row py-2">
            <div class="col-3"></div>
                <div class="col-2">
                    <label for="colonia">Colonia</label>
                    <input type="text" name="colonia" class="form-control">
                </div>
                <div class="col-2">
                    <label for="codigo_postal">Código Postal</label>
                    <input type="text" name="codigo_postal" class="form-control">
                </div>
                <div class="col-2">
                    <label for="numero">Télefono de Contacto</label>
                    <input type="number" name="numero" class="form-control">
                </div>
                <div class="col-4"></div>
            </div>
            <div class="form-group row py-2">
                <div class="col-6 mx-auto">
                    <label for="domicilio">Domicilio</label>
                    <input type="text" name="domicilio" class="form-control">
                </div>
            </div>
            <div class="form-group row py-2">
                <div class="col-6 mx-auto">
                    <label for="detalles">¿Por qué quieres capacitarte con nosotros?</label>
                    <textarea name="detalles" id="detalles" class="form-control" cols="30" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row py-2">
                <div class="col-3 mx-auto">
                    <input type="submit" value="Aplicar" class="btn w-100 btn-outline border border-black rounded-pill">
                </div>
            </div>
        </form>
    </div>
</section>

<?=$footerGNRL;?>