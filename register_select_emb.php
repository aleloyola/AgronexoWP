<!DOCTYPE html>
<html lang="zxx">
<?php
    require_once('content/head.php');
    ?>
    <script>

function Proveedor(){
    window.location.href = "register_vendor.php"
}


function Comprador(){
    window.location.href = "register_buyer.php"
}

    </script>

    <body class="shop home-page">

    <div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">
            <?php 

            require_once('content/header.php');
            
            ?>

            <br>
            <input type = "button" value="Proveedor" name = "Proveedor" onclick="Proveedor()"><br>
            <input type  = "button" value="Comprador" name = "Comprador" onclick ="Comprador()"><br>



            
    	</div>
	</div>
   
    </body>
</html>



