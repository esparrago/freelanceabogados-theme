<h2><i class="icon i-project"></i><?php echo __( 'Consultas', APP_TD  ); ?></h2>

<div class="row content-projects">
	<div class="large-12 columns">

		<div class="section-container auto section-tabs project-trunk" data-section>

			<section class="<?php echo esc_attr( 'projects' == hrb_get_dashboard_page() ? 'active' : '' ); ?>">

				<?php 
				/*
				<p class="title" data-section-title=""><a href="#projects"><?php echo __( 'Mis consultas', APP_TD ); ?></a></p>
				*/
				?>

				<div class="content" data-section-content>

					<?php appthemes_load_template( 'dashboard-projects-section-projects.php', array( 'projects_no_filters' => $projects_no_filters, 'projects' => $projects ) ); ?>

				</div>

			</section>

			<?php  
			/*
			<section class="<?php echo esc_attr( 'favorites' == hrb_get_dashboard_page() ? 'active' : '' ); ?>">

				<p class="title" data-section-title=""><a href="#favorites"><?php echo __( 'Favoritos', APP_TD ); ?></a></p>

				<div class="content" data-section-content>

					<?php appthemes_load_template( 'dashboard-projects-section-favorites.php', array( 'projects' => $favorites ) ); ?>

				</div>

			</section>
			*/
			?>


			<?php do_action( 'hrb_dashboard_projects_tabs' ); ?>

		</div>

	</div>
</div>
