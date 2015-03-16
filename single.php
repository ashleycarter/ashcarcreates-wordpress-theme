<?php get_header(); ?>
<div class="full width">
	<div class="container">
		<div class="alpha offset-by-two">
			<div class="twelve columns">

			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
				<?php get_template_part('content', 'post'); ?>

			<?php endwhile; else: ?>

				<div class="no-posts">
					<p>Woops! Nothing to see here!</p>
				</div>
					
			<?php endif; ?>

			</div><!-- end offset -->
		</div>
	</div><!-- end container -->
</div> <!--end full width -->

<?php get_footer(); ?>