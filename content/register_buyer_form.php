

<form name="contact-form" action="content/post_buyer.php" method="post" id="contact-form">

<div class="form-group">
<label for="Country">Country</label>
<input type="text" class="form-control" name="country" placeholder="country" required>
</div>


<div class="form-group">
<label for="Razon Social">Razon Social</label>
<input type="text" class="form-control" name="company_legalname" placeholder="Legal Name" required>
</div>


<div class="form-group">
<label for="Giro">Giro</label>
<input type="text" class="form-control" name="company_industry" placeholder="Industry" required>
</div>


<div class="form-group">
<label for="name">Nombre Fantasia</label>
<input name="text" class="form-control" name="company_name" placeholder="name" required>
</div>


<div class="form-group">
<label for="Address">Direccion Legal(*)</label>
<input type="text" class="form-control" name="company_address" placeholder="address" required>
</div>



<div class="form-group">
<label for="City">Ciudad</label>
<input type="text" class="form-control" name="company_city" placeholder="City" required>
</div>


<div class="form-group">
<label for="Website">Sitio Web</label>
<input type="text" class="form-control" name="company_website" placeholder="Website">
</div>

Datos Usuario

<div class="form-group">
<label for="Username">Nombre</label>
<input type="text" class="form-control" name="user_name" placeholder="username" required>
</div>



<div class="form-group">
<label for="Email">Email</label>
<input type="text" class="form-control" name="user_email" placeholder="email" required>
</div>



<div class="form-group">
<label for="Phone">Telefono</label>
<input type="text" class="form-control" name="user_phone" placeholder="phone" required>
</div>



<div class="form-group">
<label for="Position">Cargo</label>
<input type="text" class="form-control" name="user_position" placeholder="Position" required>
</div>






<button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
<img src="img/loading.gif" id="loading-img">
</form>