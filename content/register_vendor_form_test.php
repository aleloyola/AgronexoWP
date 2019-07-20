
<form name="contact-form" action="content/post_vendor.php" method="post" id="contact-form">
	<h3>&nbsp;&nbsp;&nbsp;Proveedor</h3><br>

		<label for="Country">Pais(*)</label>

				<select name="country" class="form-aux" data-label="Options" tabindex="x">
				<?php require_once('country_list.php') ?>
				</select>
		
		<label for="Razon Social">Razon Social(*)</label>
		<input type="text" name="company_legalname" placeholder="Legal Name" required>
		<label for="Giro">Giro(*)</label>
		<input type="text" name="company_industry" placeholder="Industry" required>
		<label for="name">Nombre Fantasia</label>
		<input name="text" name="company_name" placeholder="" >
		<label for="Address">Direccion Legal(*)</label>
		<input type="text" name="company_address" placeholder="address" required>


		<label for="City">Ciudad (*)</label>
		<input type="text" name="company_city" placeholder="City" required>
	

		<label for="Website">Sitio Web</label>
		<input type="text" name="company_website" placeholder="http://tusitio.com">


	<h3>&nbsp;&nbsp;&nbsp;Datos Usuario</h3>


	<label for="Username">Nombre(*)</label>
	<input type="text" name="user_name" placeholder="" required>


	<label for="Email">Email(*)</label>
	<input type="email" name="user_email" placeholder="tunombre@tudominio.com" required>


	<label for="Phone">Telefono(*)</label>
	<input type="text" name="user_phone" placeholder="" required>


	<label for="Position">Cargo</label>
	<input type="text" name="user_position" placeholder="">


		<input type="submit" class="form-submit large button rounded bkg-blue-light bkg-hover-navy color-white color-hover-white" name="Enviar" value="Enviar" id="submit_form">

		<button > 


</form>	


