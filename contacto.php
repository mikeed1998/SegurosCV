<?php
    require('includes/layout.php');
?>

<?=$headGNRL;?>
<?=$header;?>


<section class="formulario-contacto_contacto">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col fs-1 text-center">
                ¿Tienes dudas?
            </div>
        </div>
        <div class="row">
            <div class="col fs-3 text-center">
                Envianos un mensaje
            </div>
        </div>
        <div class="row">
            <div class="col-6 py-3 mx-auto">
                <form action="">
                    <div class="form-group row py-2">
                            <div class="col-4">
                            <label for="nombre_c">Nombre</label>
                            <input type="text" name="nombre_c" class="form-control">
                        </div>
                        <div class="col-4">
                            <label for="apellidos_c">Apellidos</label>
                            <input type="text" name="apellidos_c" class="form-control">
                        </div>
                        <div class="col-4">
                            <label for="correo_">Correo</label>
                            <input type="text" name="correo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row py-2">
                        <div class="col-12">
                            <label for="duda">Escribe tus comentarios</label>
                            <textarea name="duda" id="duda" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group row py-2">
                        <div class="col-6 mx-auto">
                            <input type="submit" value="ENVIAR MENSAJE" class="btn btn-outline w-100 border border-dark">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="mapa-home">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3732.56885662392!2d-103.35279950472113!3d20.68711244774733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1696800879621!5m2!1ses-419!2smx" class="contenedor-mapa" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?=$footerGNRL;?>