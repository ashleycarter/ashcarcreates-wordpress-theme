<?php get_header(); ?>
<style>
	h3.notes a {
		color: #888; /*gray*/
	}
</style>

<div class="full width">

		<h2 class="title">
			&nbsp;Thoughts, Musings, etc.
		</h2>

	<div class="container">

		<div class="fourteen columns alpha offset-by-two">
			<div class="twelve columns">

				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<?php get_template_part ( 'content' , 'post' ); ?>

				<?php endwhile; else: ?>

					<div class="no-posts">
						<p>Woops! Nothing to see here!</p>
					</div>

				<?php endif; ?>

			</div><!-- end offset -->
		</div><!-- end fourteen columns -->
	</div><!-- end container -->
</div> <!--full width -->

<?php get_footer(); ?>