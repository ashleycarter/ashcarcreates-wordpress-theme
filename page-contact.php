<?php get_header(); ?>

<div class="full width">
	<div class="container">
		<div class="sixteen columns omega">
			<h2 class="title">
				Let's Chat
			</h2>
		</div>

		<div class="offset-by-one">
			<div class="fourteen columns">

				<div class="four columns alpha">
					<p class="contact-text">
						Interested in working together? 
						Or maybe you'd just like to say hello! Take a moment to fill out the form with some information about yourself and your project and I will get back to you as soon as possible. 
						Thank you!
					</p>	
				</div>

				<div class="ten columns omega">
					<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>	<br >		

					<?php endwhile; else: ?>

						<div class="no-posts">
							<p>Woops! Nothing to see here!</p>
						</div>
					
					<?php endif; ?>
				</div>
			</div>
		</div><!-- end fourteen columns -->
	</div><!-- end container -->
</div> <!--full width -->

<?php get_footer(); ?>