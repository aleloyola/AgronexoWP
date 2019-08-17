<?php 
	// function to get the current page name
	function PageName() {
		return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	}
	$current_page = PageName();
?>
			<!-- Header -->
			<header class="header header-absolute header-transparent header-fixed-on-mobile" data-helper-in-threshold="200" data-helper-out-threshold="500" data-sticky-threshold="200" data-bkg-threshold="100">
				<div class="header-inner">
					<div class="row nav-bar">
						<div class="column width-12 nav-bar-inner">
							<div class="logo">
								<div class="logo-inner">
									<a href="index.php"><img src="images/logoAN.png" alt="AgroNexo Logo" /></a>
									<a href="index.php"><img src="images/logoAN-dark.png" alt="AgroNexo Logo" /></a>
								</div>
							</div>
							<nav class="navigation nav-block secondary-navigation nav-right">
								<ul>
									<li class="aux-navigation hide">
										
										<a href="#" class="navigation-show side-nav-show nav-icon">
											<span class="icon-menu"></span>
										</a>
									</li>
								</ul>
							</nav>
							<nav class="navigation nav-block primary-navigation nav-left sub-menu-indicator">
								<ul>
									<li class="<?php echo $current_page == 'index.php' ? 'current':NULL ?>">
										<a href="index.php">Inicio</a> 
									</li>
									<li>
										<a href="#about" class="scroll-link">Nosotros</a>
									</li>
									<li class="contains-sub-menu">
										<a href="#how-it-works" class="scroll-link">Como trabaja</a>
										<div class="sub-menu custom-content">
											<div class="video-container">
												<iframe src="https://player.vimeo.com/video/213961896?title=0&mp;byline=0&amp;portrait=0&amp;color=717dfb" width="500" height="281"></iframe>
											</div>
											<ul>
												<li>
													<h4>Comienza</h4>
												</li>
												<li>
													<a href="index.php">Resumen</a>
												</li><!--
												<li>
													<a href="homepage-mobile-application-2.html">Sistemas de Pago</a>
												</li>-->
												<li>
													<a href="index.php#about">Nosotros</a>
												</li>
												<li>
													<a href="#">Precios</a>
												</li>
											</ul>
											<ul class="bkg-grey-ultralight">
												<li>
													<h4>Tópicos populares</h4>
												</li>
												<li>
													<a href="index.php">Crear Cuenta</a>
												</li>
												<!--<li>
													<a href="project-style-two.html">Roadmap</a>
												</li>-->
												<li>
													<a href="index.php#how-it-works">Caracteristicas</a>
												</li>
												<li>
													<a href="faq.php">Preguntas Frecuentes</a>
												</li>
											</ul>
										</div>
									</li>
									<li>
										<a href="#signup" class="scroll-link">Mantente en contacto</a>
									</li>
									<li class="<?php echo $current_page == 'pricing.php' ? 'current':NULL ?>">
										<a href="pricing.php" >Costos</a>
									</li>
									<li class="<?php echo $current_page == 'faq.php' ? 'current':NULL ?>">
										<a href="faq.php" >Ayuda</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- Header End -->
