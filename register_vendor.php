<!DOCTYPE html>
<html lang="zxx">
<?php
    require_once('content/head.php');
    ?>
    <body class="shop home-page">
    <?php require_once('content/sideNavMenu.php'); ?>

    <div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">
            <?php 

            require_once('content/header.php');
            /*require_once('content/intro.php');*/
            ?>


    <div id="home" class="section-block hero-2-4 window-height clear-height-on-tablet">
                    <div class="media-overlay bkg-black opacity-05"></div>
            
					<div class="row flex v-align-middle bkg-white">
						<div class="column width-12">


                        <br>

    
        <!--div class="column width-5 offset-1"-->
		<!--div class="signup-box box rounded xlarge mb-0 bkg-white shadow"-->
		<h3>Proveedor</h3><br>

		<?php
         require_once('content/register_vendor_form.php');
          ?>
				<!--/div-->
				<!--/div-->


				<!--/*require_once('content/about.php');*/
				/*require_once('content/hero5.php');*/
                /*require_once('content/custom_signup.php');*/
				/*require_once('content/logoslider.php');*/
                /*require_once('content/calltoaction.php');*/
                -->


        </div>
    </div>
                        </div>
					</div>
            <?php
            require_once('content/footer.php');
            ?>
    	</div>
	</div>
    <?php require_once('content/scripts.php'); ?>
    </body>
</html>



