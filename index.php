
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
   <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
	
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
                               <div class="img-intro">
                                 <img class="web" src="<?php bloginfo('stylesheet_directory'); ?>/images/home_info-01.svg" alt="" width="90%">
                                 <img class="mobile" src="<?php bloginfo('stylesheet_directory'); ?>/images/home_mob_info.svg" alt="">
                               </div>
   	                        <h1>FREELANCE ABOGADOS</h1>
   	                        <h3>Soluciones legales eficientes</h3>
   	                        <!--<hr class="intro-divider"> -->
   	                        <ul class="list-inline intro-social-buttons">
   	                            <li>
   	                                <a href="wp-login.php?action=register" class="btn btn-success btn-lg"> <span class="network-name">!Empieza gratis hoy!</span></a>
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
                          <img class="logo-circle" src="<?php bloginfo('stylesheet_directory'); ?>/images/fa_Logosimbolo.png">
   	                    <hr class="section-heading-spacer center-section-line">
   	                    <div class="clearfix"></div>
   	                    <h2 class="section-heading text-center">DERECHO SIN CORBATA</h2>
   	                    <p class="lead text-center">Somos una PLATAFORMA DE CROWDSOURCING Online que conecta abogados y clientes en un mismo escenario con la finalidad de proveer soluciones JURÍDICAS prácticas, sencillas y rápidas provenientes de una Creemos en soluciones legales eficientes a un precio razonable, sin nueva generación de ABOGADOS modernos, precisos, determinados e independientes. tramitología ni perdida de tiempo.</p>
   	                     <a href="wp-login.php?action=register" class="btn btn-success btn-lg btn-txt-black"> <span class="network-name">!Empieza gratis hoy!</span></a>
   	                </div>
   	            </div>

   	        </div>
   	        <!-- /.container -->

   	    </div>
   	    <!-- /.content-section-a -->

   	    <div class="content-section-b">

   	        <div class="container">

   	            <div class="row">
   	                <div class="col-lg-12 col-sm-12 wow fadeInRight  text-center">
   	                    <h2 class="section-heading text-left name-big">Abogado</h2>
   	                    <p class="lead text-left">¿Eres un abogado y estas buscando un nuevo método de trabajo?</p>
                          <img class="infografia-rol web" src="<?php bloginfo('stylesheet_directory'); ?>/images/home_info-02.svg" alt="" width="90%">
                          <img class="infografia-rol mobile" src="<?php bloginfo('stylesheet_directory'); ?>/images/home_mob_info_01.svg" alt="" width="90%">
   	                </div>
   	            </div>

   	        </div>
   	        <!-- /.container -->

   	    </div>
   	    <!-- /.content-section-b -->

   	    <div class="content-section-a">

   	        <div class="container">

                 <div class="row">
                     <div class="col-lg-12 col-sm-12 wow fadeInRight text-center">
                          <h2 class="section-heading text-left name-big">Cliente</h2>
                          <p class="lead text-left">¿Eres cliente y estas buscando soluciones legales eficiente para tí o tu negocio?</p>
                            <img class="infografia-rol web" src="<?php bloginfo('stylesheet_directory'); ?>/images/home_info-03.svg" alt="" width="90%">
                             <img class="infografia-rol mobile" src="<?php bloginfo('stylesheet_directory'); ?>/images/home_mob_info_02.svg" alt="" width="90%">
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
   	                <div class="col-lg-6 text-center">
   	                    <h2>Encuentranos tambien en:</h2>
   	                </div>
   	                <div class="col-lg-6 text-center">
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
   	                    <ul class="list-inline text-center list-black">
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
   	                    <p class="copyright text-muted small text-center">Copyright &copy; Freelance Abogados 2016. Todos los derechos reservados</p>
   	                </div>
   	            </div>
   	        </div>
   	    </footer>
   	<!-- End Html-->	
<script type="text/javascript">
   new WOW().init();
</script>
<?php endif; ?>

