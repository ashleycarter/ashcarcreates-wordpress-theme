<?php get_header(); ?>

<div class="full width">
	<div class="container">
		<h2 class="title">
			Made With Love
		</h2>

		<div class="fourteen columns alpha offset-by-two">
			<div class="twelve columns">

			<h3 style="text-align: center; margin-bottom:1.5em;">
				<?php the_title(); ?>
			</h3>
			
			<div class="project">
				<img src="<?php the_field('main_project_image' ); ?>"> 
				<br>
				<?php the_field('project_images'); ?>
			<br ><br >
			</div>

			<div class="four columns alpha" style="text-align:left;">
				<h5 style="text-align:left;"><?php the_field( 'project_type' ); ?></h5>
			
				<span class="desktop"><br ></span>
				
				<span class="desktop">
					<a href="work/">
						<p><span class="arrow-left"></span> &nbsp;
							<em>Back to Portfolio</em>
						</p>
					</a>
				</span>
			</div>
			
			<div class="eight columns omega">
			<?php the_field( 'full_description' ); ?>
			</div>
			
			<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

			<?php endwhile; else: ?>

				<div class="no-posts">
					<p>Woops! Nothing to see here!</p>
				</div>
					
			<?php endif; ?>

			</div><!-- end offset -->
		</div><!-- end fourteen columns -->
	</div><!-- end container -->
</div><!-- end full width -->

<?php get_footer(); ?>