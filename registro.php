<?php
    require('includes/layout.php');
?>

<?=$headGNRL;?>
<?=$header;?>

<div class="container my-5">
		<div class="col-12 mt-5 d-flex justify-content-center align-items-center">
			<div class="container">
		
				<div class="col-12 bg-white d-flex flex-column flex-md-row my-5 my-md-0" style=" min-height:700px; box-shadow:1px 1px 10px rgba(0, 0, 0, 0.237); border-radius:26px;">
					<form method="POST" action="vendor/Correos/mail.php" class="col-12 col-md-7  d-flex justify-content-center align-items-center" style="background:;">
						<input type="hidden" name="tipo" value="register">
                    <div class="col-12 p-4 bg-white d-flex justify-content-center align-items-center flex-column text-center">
							<h4 class="mb-5">
                                Registrate
                            </h4>
							<div class="input_b col-12 col-md-10 col-lg-7 mb-3">
							<input type="text" class="form-control" id="registrodeusuarios" name="nombre" placeholder="Nombre(s)" style="border-radius:10px; box-shadow: none;" required autocomplete="name" autofocus required>
							</div>
							<div class="input_b col-12 col-md-10 col-lg-7 mb-3">
								<input type="text" class="form-control" id="registrodeusuarios" name="apellidos" placeholder="Apellido(s)" style="border-radius:10px;" required autocomplete="lastname" autofocus required>
								</div>
							<div class="col-12 col-md-10 col-lg-7 mb-3">
							<input type="email" class="form-control" id="email" name="correo" placeholder="Example@email.com" style="border-radius:10px;" required>
							</div>
							<div class="col-12 col-md-10 col-lg-7 mb-3 ">
							<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" style="border-radius:10px;" required autocomplete="email">
							<p id="msj_error" class="mb-0 mt-1" style="color:red; display:none;">Contraseña bastante corta</p>
							</div>
							<div class="col-12 col-md-10 col-lg-7 mb-3">
							<input type="password" class="form-control" id="password_verify" placeholder="Repite la contraseña" name="password_confirmation" style="border-radius:10px;" required autocomplete="new-password">
							<p id="msj_error2" class="mb-0 mt-1" style="color:red; display:none;">La contraseña no coincide</p>
							</div>
							<div class="col-12 col-md-10 col-lg-7 mb-3 d-flex justify-content-center align-items-center flex-column">
								<button type="submit" id="register_btn" class="col-12 btn btn-primary" style="border-radius:10px; background-color: #3378C6; border:none;" >Registrarse</button>
							</div>
							<div class="col-12 col-md-10 col-lg-7 mb-3">
								<p><a href="login.php" class="" uk-toggle>¿Ya tienes una cuenta? Ingresar</a></p>
							</div>
						</div>
					</form>
					<div class="col-12 col-md-5 d-flex justify-content-center align-items-center" style="background-color: #3378C6; border-top-right-radius: 26px; border-bottom-right-radius:26px;">
						<div class="col-12 p-4 d-flex justify-content-center align-items-center flex-column text-center">
						<img src="" class="mb-3" style="width:250px" alt="">	
						<h6 class="mb-3" style="color:white;">
                    
                                Encantado de verte
                            
                        </h6>
						<p class="mb-3 px-5" style="color:white; font-size: 12px;">
                         
                                Completa el formulario para registrarte y tener acceso a nuestra selección de artículos.
                            
                        </p>
						</div>
					</div>
				</div>
		
		
			</div>
		</div>

		<script>	$("#password").change(function() {
			var pass  = $("#password").val();
			var len   = (pass).length;
	
			if(len>6){
				$('#password').addClass("success_p");
				$('#password').removeClass("error_p");
				document.getElementById('msj_error').style.display = 'none';
			}else{
				if(len>0){
				$('#password').addClass("error_p");
				$('#password').removeClass("success_p");
				document.getElementById('msj_error').style.display = 'block';
				}else{
					$('#password').removeClass("success_p");
					$('#password').removeClass("error_p");
					document.getElementById('msj_error').style.display = 'none';
				}
				
				
			}
		});
	
		$("#password_verify").change(function() {
			var pass1  = $("#password").val();
			var pass  = $("#password_verify").val();
			var len   = (pass).length;
	
			if(len>6 && pass1 == pass){
				$('#password_verify').addClass("success_p");
				$('#password_verify').removeClass("error_p");
				document.getElementById('msj_error2').style.display = 'none';
				$('#register_btn').removeAttr('disabled');
			}else{
				if(len>0){
				$('#password_verify').addClass("error_p");
				$('#password_verify').removeClass("success_p");
				document.getElementById('msj_error2').style.display = 'block';
				}else{
					$('#password_verify').removeClass("success_p");
					$('#password_verify').removeClass("error_p");
					document.getElementById('msj_error2').style.display = 'none';
				}
				$('#register_btn').prop('disabled', true);
	
				
			}
		});
        </script>
	</div>

<?=$footerGNRL;?>













