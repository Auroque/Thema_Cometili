<?php get_header();

	// Template Name: Conheça Mais

 ?>

  <!-- Maquete do Projeto Cometili -->
<div class="section pg-conheca">
	<div class="container projeto">
		<div class="row">
			<div class="col-md-12">
				<img class="imagem-projeto" src="<?php bloginfo('template_directory'); ?>/img/projeto.jpg">		
			</div>
		</div>
	</div>
</div>

 <!-- início de Recursos -->
 <div class="section">
 	<div class="container parceiros">
 		<div class="row">	
 			<?php 
			$sections = new WP_Query(
				array(
					'post_type' => 'recursos',
					'ignore_sticky_posts' => true,
					'showposts' => -1,
					'orderby' => array(
        				'date'          => 'DESC',
        				'comment_count' => 'DESC',
    				),
					'order' => 'ASC'
					)
			);
			?>
				<h1 id="title-recurso">Recursos</h1>
				<div class="slider-area">
					<div class="owl-carousel owl-theme">
							<?php if ($sections->have_posts()): ?>
								<?php while ($sections->have_posts()) : $sections->the_post(); ?>
								<div id="recurso-item" class="item">
									<img alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">
									<h2 id="sld-title-recurso"><?php the_title(); ?></h2>
									<?php the_excerpt(); ?>
								</div>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
 		</div>
 	</div>
 </div>
 <div class="section">
 	<div class="container parceiros">
 		<div class="row">	
 			<?php 
			$sections = new WP_Query(
				array(
					'post_type' => 'segmentos',
					'ignore_sticky_posts' => true,
					'showposts' => -1,
					'orderby' => array(
        				'date'          => 'DESC',
        				'comment_count' => 'DESC',
    				),
					'order' => 'ASC'
					)
			);
			?>
				<h1 id="title-segmentos">Segmentos</h1>
					<?php if ($sections->have_posts()): ?>
						<?php while ($sections->have_posts()) : $sections->the_post(); ?>
							<div class="col-md-3">
								<div class="img-galeria">
									<img alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;">									
								</div>
								<h2 id="subtitle-segmentos"><?php the_title(); ?></h2>
									<?php the_excerpt(); ?>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php wp_reset_query(); ?>
 		</div>
 	</div>
 </div>

 <?php get_footer(); ?>