<?php get_header(); ?>

<div class="full width">
	<div class="container">
		
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
				<hr>

			<?php endwhile; else: ?>

				<div class="no-posts">
					<p>Woops! Nothing to see here!</p>
				</div>
				
			<?php endif; ?>

	</div><!-- end container -->
</div> <!--full width -->

<?php get_footer(); ?>