<?php get_header(); ?>
<?php /*the loop*/ if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div class="section single-artigo">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 single">
					<h1><?php the_title(); ?></h1>
					<h5><?php the_content(); ?></h5><br/>
				<?php 
					 endwhile;
					 else:
				?>
				<p>Nenhum post publicado!</p>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>