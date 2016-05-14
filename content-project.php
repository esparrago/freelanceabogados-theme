<article id="project-<?php the_ID(); ?>" <?php ( is_hrb_project_featured() ? post_class( 'project featured' ) : post_class('project') ); ?>>

	<?php appthemes_before_post_title( HRB_PROJECTS_PTYPE ); ?>

	<h2 class="archive-project-title"><?php the_hrb_project_title(); ?>
		<?php the_hrb_project_addons( 0, '<span class="add-ons">', '</span>' ); ?>
	</h2>

	<?php appthemes_after_post_title( HRB_PROJECTS_PTYPE ); ?>

	<!-- project meta above desc-->
	<div class="project-meta cf">

	<div class="row collapse project-author-meta">
		<div class="large-8 small-6 columns">
			<span class="project-author-by"></i><?php the_hrb_project_author( get_the_ID(), __( '<strong>Hecho por</strong> ', APP_TD ) ); ?></span>
			<span class="num-authored"><?php the_hrb_user_success_rate( get_the_author_meta( 'ID' ), '(', ')' ); ?></span>
		</div>
		<div class="large-4 small-6 columns">
			<span class="project-num-proposals"></i><?php the_hrb_project_proposals_count(); ?></span>
		</div>
	</div>

		<div class="budget-deadline">
			<?php  
			/*
			<div class="project-budget-wrapper">
				<div class="project-budget">
					<span class="budget"><?php the_hrb_project_budget(); ?></span>
					<span class="budget-type"><?php the_hrb_project_budget_type(); ?></span>
				</div>
			</div>
			*/
			?>


			<?php $remain_days = get_the_hrb_project_remain_days(); ?>

			<?php if ( '' !== $remain_days ): ?>
				<div class="project-expires-wrapper <?php echo ( $remain_days < 0 ? 'project-expired' : '' ); ?>">
					<div class="project-expires"><?php the_hrb_project_remain_days(); ?></div>
				</div>
				<div class="project-location">
					<i class="icon i-project-location"></i>
					<?php the_hrb_project_location(); ?>
				</div>
			<?php endif; ?>
		</div>

		<div class="project-content cf">
			

			<?php appthemes_before_post_content( HRB_PROJECTS_PTYPE ); ?>

			<!-- project desc-->
			<div class="project-description">
				<div><?php the_hrb_project_excerpt(); ?></div>
				<br/><?php echo html_link( get_permalink(), __( 'Ver consulta', APP_TD ) ); ?>
				<div class="project-date"><?php the_hrb_project_posted_time_ago(); ?></div>
			</div>

			<?php appthemes_after_post_content( HRB_PROJECTS_PTYPE ); ?>

		</div>
	</div>

	<!-- project meta below desc-->
	<div class="project-meta-below-desc cf">
		<div class="project-cat"><i class="icon i-project-category"></i> <?php the_hrb_tax_terms( HRB_PROJECTS_CATEGORY ); ?></div>
		<div class="project-skills"><?php the_hrb_tax_terms( HRB_PROJECTS_SKILLS, get_the_ID(), ' ', '<span class="label">', '</span>' ); ?></div>
	</div>

	<?php if ( has_term( '', HRB_PROJECTS_TAG ) ): ?>

		<div class="project-meta-below-desc cf">
			<div class="project-tags large-12 columns">
				<i class="icon i-tags"></i> <?php the_hrb_tax_terms( HRB_PROJECTS_TAG ); ?></i>
			</div>
		</div>

	<?php endif; ?>

</article>