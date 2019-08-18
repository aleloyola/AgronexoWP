
<div class="register-buyer-form-container">
	<form name="register-buyer-form" class = ""  action="content/post_buyer.php" method="post" id="contact-form">

		<div class="row">

		<h3>&nbsp;&nbsp;&nbsp;Comprador</h3><br>
	<hr>
		<div class="row">	
			<div class="column width-6">
			<label for="Country">País(*)</label>
				<div class="form-select form-element">
					<select name="country" class="form-aux" data-label="Pais"  tabindex="x">
					<?php require_once('content/country_list.php') ?>
					</select>
				</div>
			</div>

		

			<div class="column width-6">
			<label for="Razon Social">Razon Social(*)</label>
			<input type="text" class="form-element" name="company_legalname" placeholder="Razón social" required>
			</div>


			<div class="column width-6">
			<label for="Giro">Giro(*)</label>
			<input type="text" class="form-element" name="company_industry" placeholder="Industria" required>
			</div>
		</div>
		<div class="row">
			<div class="column width-6">
			<label for="name">Nombre Fantasia</label>
			<input name="text" class="form-element" name="company_name" placeholder="" >
			</div>


			<div class="column width-6">
			<label for="Address">Direccion Legal(*)</label>
			<input type="text" class="form-element" name="company_address" placeholder="Dirección" required>
			</div>



			<div class="column width-6">
			<label for="City">Ciudad (*)</label>
			<input type="text" class="form-element" name="company_city" placeholder="Ciudad" required>
			</div>
		</div>
		<div class="row">
			<div class="column width-6">
			<label for="Website">Sitio Web</label>
			<input type="text" class="form-element" name="company_website" placeholder="http://tusitio.com">
			</div>
		</div>


		<hr>
		<div class="row">
		<h3>&nbsp;&nbsp;&nbsp;Datos Usuario</h3>
		</div>

		<hr>

		<div class="row">
			<div class="column width-6">
			<label for="Username">Nombre(*)</label>
			<input type="text" class="form-element" name="user_name" placeholder="" required>
			</div>



			<div class="column width-6">
			<label for="Email">Email(*)</label>
			<input type="email" class="form-element" name="user_email" placeholder="tunombre@tudominio.com" required>
			</div>



			<div class="column width-6">
			<label for="Phone">Telefono(*)</label>
			<input type="text" class="form-element" name="user_phone" placeholder="" required>
			</div>
		</div>
		<div class="row">
			<div class="column width-6">
			<label for="Position">Cargo</label>
			<input type="text" class="form-element" name="user_position" placeholder="">
			</div>
		</div>

		<div class="column width-6">
		<input type="submit" class="form-submit large button rounded bkg-blue-light bkg-hover-navy color-white color-hover-white" name="Enviar" value="Enviar" id="submit_form">
		

		</div>


		</div>
	</form>

	<div class="form-response"></div>

</div>