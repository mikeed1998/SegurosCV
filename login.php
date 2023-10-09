<?php
    require('includes/layout.php');
?>

<?=$headGNRL;?>
<?=$header;?>

<div class="container">
	<div class="row justify-content-center py-5">

		<div class="col-md-5 mb-5">
			<div class="card mb-5 py-5 px-4" style="border-radius:26px; box-shadow:1px 1px 10px rgba(0, 0, 0, 0.119); border:none;">
				<div class="row">
					<div class="col-12">
						<div class="card-body">
							<h5 class="card-title text-center">Login</h5>
							<form action="includes/acciones.php" method="POST" id="form-login">
								<div class="form-group mb-2">
									<label for="correo" class="text-md-right"></label>
									<div class="">
										<input id="email" type="email" class="form-control" name="correo" style="box-shadow: none;" value="" required autocomplete="email" autofocus>
									</div>
								</div>

								<div class="form-group">
									<label for="password" class="text-md-right"></label>
									<div class="">
										<input id="password" type="password" class="form-control" style="box-shadow: none;" name="password" required autocomplete="current-password">
										
									</div>
								</div>

								<div class="form-group row mb-0">
									<div class="d-flex justify-content-center text-center flex-column">
										<button type="submit" class="btn btn-primary col-12 my-3" style="background-color: #3378C6; color: white; border-radius: 16px; border:none;">
											Iniciar sesión
										</button>
									</div>
								</div>
							</form>

							<p class="card-text text-center text-white">
							
                                    <a href="registro.php" class="btn btn-sm btn-indigo px-4 py-1" style="background-color: #3378C6; border-radius: 16px; border:none; color: white;">
			    						Registrarse aquí
		    						</a>
                           
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<?=$footerGNRL;?>




