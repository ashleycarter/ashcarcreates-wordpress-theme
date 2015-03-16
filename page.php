<?php get_header(); ?>

<div class="full width">
	<div class="container">

		<h2 class="title">
			<?php the_title(); ?>
		</h2>

			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>			

			<?php endwhile; else: ?>

				<div class="no-posts">
					<p>Woops! Nothing to see here!</p>
				</div>
				
			<?php endif; ?>

	</div><!-- end container -->
</div> <!--full width -->

<?php get_footer(); ?>