<?php get_header(); ?>

<div class="full width">
	<div class="container">
		<div class="twelve columns offset-by-two">

		<h2 style="color: gray; text-align: center;">
			Category: <?php single_cat_title(); ?>
		</h2> <br >

		<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

			<?php get_template_part('content', 'post'); ?>

		<?php endwhile; else: ?>

			<div class="no-posts">
				<p>Woops! Nothing to see here!</p>
				<p><a href="/">Click here to return to the homepage.</a></p>
			</div>
					
		<?php endif; ?>
			
		</div><!-- end fourteen columns -->
	</div><!-- end container -->
</div> <!--full width -->

<?php get_footer(); ?>