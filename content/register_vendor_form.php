
<div class="contact-form-container">

<form name="contact-form" class = "contact-form" action="content/post_vendor.php" method="post" id="contact-form">

<div class="row">

<h3>&nbsp;&nbsp;&nbsp;Proveedor</h3><br>


<div class="column width-6">
<label for="Country">Pais(*)</label>
<input type="text" class="form-element" name="country" placeholder="Pais" required>
</div>


<div class="column width-6">
<label for="Razon Social">Razon Social(*)</label>
<input type="text" class="form-element" name="company_legalname" placeholder="Legal Name" required>
</div>


<div class="column width-6">
<label for="Giro">Giro(*)</label>
<input type="text" class="form-element" name="company_industry" placeholder="Industry" required>
</div>


<div class="column width-6">
<label for="name">Nombre Fantasia</label>
<input name="text" class="form-element" name="company_name" placeholder="" >
</div>


<div class="column width-6">
<label for="Address">Direccion Legal(*)</label>
<input type="text" class="form-element" name="company_address" placeholder="address" required>
</div>



<div class="column width-6">
<label for="City">Ciudad (*)</label>
<input type="text" class="form-element" name="company_city" placeholder="City" required>
</div>


<div class="column width-6">
<label for="Website">Sitio Web</label>
<input type="text" class="form-element" name="company_website" placeholder="http://tusitio.com">
</div>


</div>
<div class="row">
<h3>&nbsp;&nbsp;&nbsp;Datos Usuario</h3>

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



<div class="column width-6">
<label for="Position">Cargo</label>
<input type="text" class="form-element" name="user_position" placeholder="">
</div>



<button type="submit" class="form-submit large button rounded bkg-blue-light bkg-hover-navy color-white color-hover-white" name="Enviar" value="Submit" id="submit_form">
    Enviar
</button>

</div>
</form>

<div class="form-response"></div>

</div>
