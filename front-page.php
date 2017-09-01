<?php get_header('home'); ?>

<!-- Início do Slider -->
<?php 
$sections = new WP_Query(
	array(
		'post_type' => 'slider',
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
<div class="slider">
    <ul class="slides">
    <?php if ($sections->have_posts()): ?>
		<?php while ($sections->have_posts()) : $sections->the_post(); ?>
	      <li>
	        <img alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:650px;">
	        <div class="caption center-align">
	          <h3><?php the_title(); ?></h3>
	          <h5 class="light grey-text text-lighten-3"><?php the_excerpt(); ?></h5>
	        </div>
	      </li>
		<?php endwhile; ?>
		<?php endif; ?>
	<?php wp_reset_query(); ?>
    </ul>
  </div>
  <!-- Maquete do Projeto Cometili -->
<div class="section">
	<div class="container projeto">
		<div class="row">
			<div class="col-md-12">
				<img class="imagem-projeto" src="<?php bloginfo('template_directory'); ?>/img/projeto.jpg">				
			</div>
		</div>
	</div>
</div>

<!-- Início das Publicações -->

<div class="section">
	<div class="container postagens">
			<div class="row">
			<?php 
			$sections = new WP_Query(
				array(
					'post_type' => 'artigos',
					'ignore_sticky_posts' => true,
					'showposts' => 3,
					'orderby' => array(
        				'date'          => 'DESC',
        				'comment_count' => 'DESC',
    				),
					'order' => 'ASC'
					)
			);
			?>
			<?php if ($sections->have_posts()): ?>
			<?php while ($sections->have_posts()) : $sections->the_post(); ?>
		      	<div class="col-md-4 artigo-post">
		      		<div class="capsula">
		        		<a href="<?php the_permalink(); ?>"><img alt="thumb image-artigo" class="image-artigo" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>"></a>
		      		</div>
		          	<a href="<?php the_permalink(); ?>"><h2 class="title-artigo"><?php the_title(); ?></h2></a>
		          	<?php the_excerpt(); ?>
		        </div>
				
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>	
		</div>
	</div>
</div>

<!-- Início de Parceiros -->
 <div class="section">
 	<div class="container parceiros">
 		<div class="row">	
 						<?php 
			$sections = new WP_Query(
				array(
					'post_type' => 'parceiros',
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
				<h1>Parceiros</h1>
				<div class="slider-area">
					<div class="owl-carousel owl-theme">
							<?php if ($sections->have_posts()): ?>
								<?php while ($sections->have_posts()) : $sections->the_post(); ?>
								<div class="item">
									<a href="#"><img id="imgColorida" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;"></a>
								</div>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
 		</div>
 	</div>
 </div>

 <!-- início de Clientes -->
 <div class="section">
 	<div class="container parceiros">
 		<div class="row">	
 						<?php 
			$sections = new WP_Query(
				array(
					'post_type' => 'clientes',
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
				<h1>Clientes</h1>
				<div class="slider-area">
					<div class="owl-carousel owl-theme">
							<?php if ($sections->have_posts()): ?>
								<?php while ($sections->have_posts()) : $sections->the_post(); ?>
								<div class="item">
									<a href="#"><img id="imgColorida" alt="thumb image" class="wp-post-image" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:100%; height:auto;"></a>
								</div>
								<?php endwhile; ?>
							<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
 		</div>
 	</div>
 </div>

<?php get_footer(); ?>