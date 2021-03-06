<div class="section-head">
	<h1><?php _e( 'Detalles de la Consulta', APP_TD ); ?></h1>
</div>

<form id="create-project-form" class="custom main" enctype="multipart/form-data" method="post" action="<?php echo esc_url( $form_action ); ?>">

	<fieldset>
		<legend><?php _e( 'Información esencial', APP_TD ); ?></legend>
		<div class="row">
			<div class="large-12 columns">
				<label for="post_title"><?php _e( '¿Que necesitas?', APP_TD ); ?></label>
				<input name="post_title" tabindex="1" type="text" placeholder="<?php echo esc_attr__( 'Ej. Necesito abogado para licitación', APP_TD ); ?>" value="<?php echo esc_attr( $project->post_title ); ?>" class="required" />
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<label for="post_content"><?php _e( 'Detalles de la consulta', APP_TD ); ?></label>
				<textarea name="post_content" tabindex="2" placeholder="<?php echo esc_attr__( 'Escribe una descripción detallada de lo que necesitas', APP_TD ); ?>" class="required"><?php echo esc_textarea( $project->post_content ); ?></textarea>
			</div>
		</div>
	</fieldset>

	<fieldset>
		<legend><?php _e( 'Categorias y habilidades', APP_TD ); ?></legend>
		<div class="row">
			<div class="large-6 columns category-dropdown">
				<div class="row">
					<div class="large-12 columns">
						<label for="category"><?php echo __( 'Categoria', APP_TD ); ?></label>
							<?php
								$args = array(
									'id' => 'category',
									'name' => '_'.HRB_PROJECTS_CATEGORY.'[]',
									'taxonomy' => HRB_PROJECTS_CATEGORY,
									'hide_empty' => false,
									'hierarchical' => true,
									'depth' => 1,
									'selected' => $project->categories,
									'class' => 'category-dropdown required' . ( $categories_locked ? ' locked' : '' ) ,
									'show_option_all' => __( '-Seleccionar Categoria-', APP_TD ),
									'tab_index' => 3
								);
								wp_dropdown_categories( $args );
							?>

							<?php if ( $categories_locked ): ?>
									<input name="<?php echo '_'.HRB_PROJECTS_CATEGORY.'[]'; ?>" type="hidden" value="<?php echo esc_attr( $project->categories ); ?>">
							<?php endif; ?>
					</div>
				</div>
			</div>
			
		</div>

		<div class="row">
			<div class="large-12 columns">
			<?php if ( hrb_charge_listings() ): ?>
				<p class="important-note"><?php echo __( '<strong>Note:</strong> Categories are locked after purchase', APP_TD ); ?></p>
			<?php endif; ?>
			</div>
		</div>

		<?php if ( hrb_get_allowed_skills_count() ): ?>

			<div class="row">
				<div class="large-12 columns">
					<div class="row">
						<div class="large-12 columns">
							<label for="skills"><?php echo __( 'Habilidades', APP_TD ); ?></label>
							<?php
								$args = array(
									'id' => 'skills',
									'name' => '_'.HRB_PROJECTS_SKILLS.'[]',
									'taxonomy' => HRB_PROJECTS_SKILLS,
									'hide_empty' => false,
									'hierarchical' => true,
									'selected' => $project->skills,
									'walker' => new HRB_OptGroup_Category_Walker,
									'depth' => 5,
									'echo' => false,
									'tab_index' => 5
								);
								$dropdown = wp_dropdown_categories( $args );

								// make this a multiple dropdown
								echo str_replace( '<select ', '<select multiple="multiple"', $dropdown );
							?>
						</div>
					</div>
				</div>
			</div>

		<?php endif; ?>

		<?php /*

		<div class="row">
			<div class="large-12 columns">
				<div class="row">
					<div class="large-12 columns">
						<label for="tags"><?php echo __( 'Tags', APP_TD ); ?></label>
						<span class="tags-tags"></span>
						<input id="tags" name="<?php echo esc_attr( HRB_PROJECTS_TAG ); ?>" tabindex="6" type="text" class="tm-input tm-tag" placeholder="<?php echo esc_attr__( 'Add some tags for this project. e.g: mobile, web (comma separated)', APP_TD ); ?>" value="<?php echo esc_attr( $project->tags ); ?>">
					</div>
				</div>
			</div>
		</div>

		*/	?>


	</fieldset>

	<?php do_action( 'hrb_project_custom_fields', $project ); ?>

	

    <?php if ( ! hrb_charge_listings() ): ?>

        <fieldset>
            <legend><?php _e( 'Duración', APP_TD ); ?></legend>
            <div class="row">
                <div class="large-8 columns">
                    <div class="row collapse">
                        <div class="large-6 columns">
                            <span class="prefix"><?php echo __( 'Publicar esta consulta por', APP_TD ); ?></span>
                        </div>
                        <div class="large-3 columns">
                            <input id="duration" name="duration" tabindex="14" type="text" <?php echo ( ! $hrb_options->project_duration_editable ? 'readonly' : '' ); ?> class="required" placeholder="<?php echo esc_attr__( 'e.g: 30', APP_TD ); ?>" value="<?php echo esc_attr( $project->_hrb_duration ? $project->_hrb_duration : $hrb_options->project_duration ); ?>" />
                        </div>
                        <div class="large-3 columns">
                            <span class="postfix"><?php echo __( 'Días', APP_TD ); ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php if ( $hrb_options->project_duration ): ?>
            <div class="row">
                <div class="large-8 columns">
                    <div class="row">
                        <div class="large-8 columns">
                            <label><?php echo sprintf( __( 'Máximo permitido: %1$d %2$s', APP_TD ), $hrb_options->project_duration, ( ! $hrb_options->project_duration_editable ? __( '(not editable)', APP_TD ) : '' ) ); ?></label>
                        </div>
                    </div>
            </div>
            <?php endif; ?>
        </fieldset>

    <?php endif; ?>

	<fieldset id="optional-fields">
		<legend><?php _e( 'Tipo de trabajo', APP_TD ); ?></legend>

		<?php if ( ! $hrb_options->local_users ): ?>

			<div class="row">
				<div class="large-12 columns">
					<div class="row collapse">
						<div class="large-2 small-4 columns">
							<span class="prefix"><?php _e( 'Locación', APP_TD ); ?></span>
						</div>
						<div class="large-3 small-4 columns location-type">
							<select id="location_type" name="location_type" tabindex="16">
								<?php if ( ! $hrb_options->location_types || 'remote' == $hrb_options->location_types ): ?>
									<option value="remote" <?php selected( $project->_hrb_location_type, 'remote' ); ?>><?php echo __( 'A distancia', APP_TD ); ?></option>
								<?php endif; ?>
								<?php if ( ! $hrb_options->location_types || 'local' == $hrb_options->location_types ): ?>
									<option value="local" <?php selected( $project->_hrb_location_type, 'local' ); ?>><?php echo __( 'Presencial', APP_TD ); ?></option>
								<?php endif; ?>
							</select>
						</div>
						<div class="large-7 columns custom-location">
							<input type="text" id="location" name="location" tabindex="17" data-geo="formatted_address" placeholder="<?php echo esc_attr__( 'Ej. Bogotá', APP_TD ); ?>" class="required" value="<?php echo esc_attr( $project->_hrb_location ); ?>" />
							<?php
								foreach ( hrb_get_geocomplete_attributes() as $location_att ) :
									$meta_key = "_hrb_location_{$location_att}";
							?>
									<input type="hidden" id="<?php echo esc_attr( $meta_key ); ?>" name="<?php echo esc_attr( $meta_key ); ?>" data-geo="<?php echo esc_attr( $location_att ); ?>" value="<?php echo esc_attr( $project->$meta_key ); ?>" />
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>

		<?php endif; ?>

		<div class="row">
			<div class="large-12 columns">
				<?php hrb_media_manager( $project->ID, array( 'id' => '_app_media', 'title' => __( 'Archivos (Opcional)', APP_TD ) ) );  ?>
			</div>
		</div>

	</fieldset>

	<?php do_action( 'hrb_project_form', $project ); ?>

	<fieldset>
		<?php do_action( 'hrb_project_form_fields', $project ); ?>

		<?php wp_nonce_field('hrb_post_project'); ?>

		<?php
			hrb_hidden_input_fields(
				array(
					'ID'	=> esc_attr( $project->ID ),
					'action'=> esc_attr( $action ),
				)
			);
		?>

		<input tabindex="20" type="submit" class="button" value="<?php echo esc_attr( $bt_step_text ); ?>" />
	</fieldset>
</form>
