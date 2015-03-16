<?php get_header(); ?>
<div id="about-section">

<div class="full width">
	<div class="container">

		<h2 class="title">
			I love the Internet
		</h2>

		<div class="offset-by-one">
			<div class="about-body">
				<div class="three columns alpha">
					<div class="about-image">
						<div class="circular">
							<img src="<?php bloginfo('template_directory');?>/images/about-image.jpg">
						</div>
					</div>

						<div class="some-things">
							<h4>things i love:</em></h4>
							<ul>
								<li><a href="http://instagram.com/p/dKtG2cmtBL/">My dog, Astro.</a></li>
								<li><a href="http://instagram.com/p/dVl-8XGtC-/">My crazy sailor husband.</a></li>
								<li><a href="http://instagram.com/p/aoyG1kmtP_/">Washington, D.C.</a></li>
							</ul>
						</div> <!-- somethings -->
					</div>
				</div> <!-- about image -->


				<div class="ten columns">
					<div class="about-text">
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>			

				<?php endwhile; else: ?>

					<div class="no-posts">
						<p>Woops! Nothing to see here!</p>
					</div>
					
				<?php endif; ?>
				</div>
			</div>

			</div><!-- end offset -->
		</div><!-- end fourteen columns -->
	</div><!-- end container -->
</div> <!--full width -->

</div> <!-- end about section --> 

<?php get_footer(); ?>