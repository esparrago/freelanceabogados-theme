<?php
/**
 * Template Name: Projects & Freelancers Listings
 */
?>


<?php if(is_user_logged_in()) : ?>

	<div id="main" class="large-8 columns">

		<?php do_action( 'hrb_front_loops' ); ?>

	</div><!-- end #main -->

	<div id="sidebar" class="large-4 columns">

		<div class="sidebar-widget-wrap cf">
			<?php get_sidebar( app_template_base() ); ?>
		</div><!-- end .sidebar-widget-wrap -->

	</div><!-- end #sidebar -->

<?php else : ?>
	<!-- links -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>	
   	<style type="text/css">
   	.large-8.columns.top-navigation-header, .main-navigation {

   		display: none;
   	}

   	.intro-header, .banner {
    	background: url(<?php bloginfo('stylesheet_directory'); ?>/images/intro-bg.jpg) no-repeat center center;
	}
   	</style>

  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/bootstrap.min.css" media="screen">
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/font-awesome.min.css" media="screen">
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/animate.css" media="screen">
 	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/styles/landing.css" media="screen">
 	<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/bootstrap.min.js"></script>
 	<script src="<?php bloginfo('stylesheet_directory'); ?>/scripts/wow.min.js"></script>

   	<!-- End links -->

   	<!-- Html -->
   		<!-- Navigation -->
   		<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
   		    <div class="container topnav">
   		        <!-- Brand and toggle get grouped for better mobile display -->
   		        <div class="navbar-header">
   		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
   		                <span class="sr-only">Toggle navigation</span>
   		                <span class="icon-bar"></span>
   		                <span class="icon-bar"></span>
   		                <span class="icon-bar"></span>
   		            </button>
   		            <a class="navbar-brand topnav" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png"></a>
   		        </div>
   		        <!-- Collect the nav links, forms, and other content for toggling -->
   		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   		            <ul class="nav navbar-nav navbar-right">
   		                <li>
   		                    <a href="wp-login.php"> <i class="icon i-login"> </i>ingresar</a>
   		                </li>
   		                <li>
   		                   <a href="wp-login.php?action=register">			<i class="icon i-register"> </i>
			Registrarse</a>
   		                </li>
   		            </ul>
   		        </div>
   		        <!-- /.navbar-collapse -->
   		    </div>
   		    <!-- /.container -->
   		</nav>



   	    <!-- Header -->
   	    <div class="intro-header">
   	        <div class="container">

   	            <div class="row">
   	                <div class="col-lg-12">
   	                    <div class="intro-message wow fadeIn">
   	                        <h1>Soluciones legales eficientes</h1>
   	                        <h3>Contrata Abogados o encuentra trabajo como abogado</h3>
   	                        <hr class="intro-divider">
   	                        <ul class="list-inline intro-social-buttons">
   	                            <li>
   	                                <a href="wp-login.php?action=register" class="btn btn-success btn-lg"> <span class="network-name">Empieza Gratis Hoy</span></a>
   	                            </li>
   	                        </ul>
   	                    </div>
   	                </div>
   	            </div>

   	        </div>
   	        <!-- /.container -->

   	    </div>
   	    <!-- /.intro-header -->

   	    <!-- Page Content -->

   		<a  name="services"></a>
   	    <div class="content-section-a">

   	        <div class="container">
   	            <div class="row">
   	                <div class="col-lg-offset-2 col-lg-8 col-sm-12 text-center wow fadeInUp">
   	                    <hr class="section-heading-spacer center-section-line">
   	                    <div class="clearfix"></div>
   	                    <h2 class="section-heading text-center">DERECHO SIN CORBATA</h2>
   	                    <p class="lead text-center">Somos una PLATAFORMA DE CROWDSOURCING Online que conecta abogados y clientes en un mismo escenario con la finalidad de proveer soluciones JURÍDICAS prácticas, sencillas y rápidas provenientes de una Creemos en soluciones legales eficientes a un precio razonable, sin nueva generación de ABOGADOS modernos, precisos, determinados e independientes. tramitología ni perdida de tiempo.</p>
   	                    <div class="btn btn-success">Empieza Gratis Hoy</div>
   	                </div>
   	            </div>

   	        </div>
   	        <!-- /.container -->

   	    </div>
   	    <!-- /.content-section-a -->

   	    <div class="content-section-b">

   	        <div class="container">

   	            <div class="row">
   	                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 wow fadeInRight">
   	                    <hr class="section-heading-spacer">
   	                    <div class="clearfix"></div>
   	                    <h2 class="section-heading">Para Abogados</h2>
   	                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in neque a velit sodales ullamcorper ac et erat. Vestibulum at venenatis tellus. Nulla ullamcorper ligula id scelerisque posuere. Nulla pharetra mauris tellus, sit amet dapibus sapien auctor eget. Aenean ultricies nisl luctus tortor dignissim, ut semper mi scelerisque. Donec eget ex a felis pulvinar porttitor at et ligula. Nulla elementum non purus sit amet porttitor.</p>
   	                </div>
   	                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
   	                    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/abogados.png" alt="">
   	                </div>
   	            </div>

   	        </div>
   	        <!-- /.container -->

   	    </div>
   	    <!-- /.content-section-b -->

   	    <div class="content-section-a">

   	        <div class="container">

   	            <div class="row">
   	                <div class="col-lg-5 col-sm-6 wow fadeInLeft">
   	                    <hr class="section-heading-spacer">
   	                    <div class="clearfix"></div>
   	                    <h2 class="section-heading">Para Personas y Empresas</h2>
   	                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in neque a velit sodales ullamcorper ac et erat. Vestibulum at venenatis tellus. Nulla ullamcorper ligula id scelerisque posuere. Nulla pharetra mauris tellus, sit amet dapibus sapien auctor eget. Aenean ultricies nisl luctus tortor dignissim, ut semper mi scelerisque. Donec eget ex a felis pulvinar porttitor at et ligula. Nulla elementum non purus sit amet porttitor.</p>
   	                </div>
   	                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
   	                    <img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/images/clientes.png" alt="">
   	                </div>
   	            </div>

   	        </div>
   	        <!-- /.container -->

   	    </div>
   	    <!-- /.content-section-a -->

   		<a  name="contact"></a>
   	    <div class="banner">

   	        <div class="container">

   	            <div class="row">
   	                <div class="col-lg-6">
   	                    <h2>Encuentranos tambien en:</h2>
   	                </div>
   	                <div class="col-lg-6">
   	                    <ul class="list-inline banner-social-buttons">
   	                        <li>
   	                            <a href="#" class="btn btn-default btn-lg social-icons"><i class="fa fa-twitter fa-fw"></i></a>
   	                        </li>
   	                        <li>
   	                            <a href="#" class="btn btn-default btn-lg social-icons"><i class="fa fa-facebook fa-fw"></i></a>
   	                        </li>
   	                        <li>
   	                            <a href="#" class="btn btn-default btn-lg social-icons"><i class="fa fa-linkedin fa-fw"></i></a>
   	                        </li>
   	                    </ul>
   	                </div>
   	            </div>

   	        </div>
   	        <!-- /.container -->

   	    </div>
   	    <!-- /.banner -->
   	    <!-- Footer -->
   	    <footer>
   	        <div class="container">
   	            <div class="row">
   	                <div class="col-lg-12">
   	                    <ul class="list-inline">
   	                        <li>
   	   		                    <a href="wp-login.php">ingresar</a>
   	   		                </li>
   	                        <li class="footer-menu-divider">&sdot;</li>
   	                        <li>
   	                            <a href="wp-login.php?action=register">Registrarse</a>
   	                        </li>
   	                        <li class="footer-menu-divider">&sdot;</li>
   	                        <li>
   	                            <a href="#services">Como Funciona</a>
   	                        </li>
   	                        <li class="footer-menu-divider">&sdot;</li>
   	                        <li>
   	                            <a href="#contact">Terminos y condiciones</a>
   	                        </li>
   	                    </ul>
   	                    <p class="copyright text-muted small">Copyright &copy; Freelance Abogados 2016. Todos los derechos reservados</p>
   	                </div>
   	            </div>
   	        </div>
   	    </footer>
   	<!-- End Html-->	
<script type="text/javascript">
   new WOW().init();
</script>
<?php endif; ?>

