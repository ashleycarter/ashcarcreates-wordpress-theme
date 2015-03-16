<?php get_header(); ?>

<div class="container">
	<div class="fourteen columns offset-by-two">
		<div class="twelve columns hi-there">
			<p class="intro-paragraph desktop">
				My name is <span style="color:rgb(0,170,120);">Ashley Carter </span>
				and I create beautiful things for 
				the web and beyond.
			</p>
		</div>
	</div>
</div>


<div class="full-width background">
	<div class="sixteen-columns">
		<div class="ribbon-banner">
			<p>Featured Project</p>
		</div>

		<ul class="slide">
			<?php
				$args = array(
					'post_type' => 'work',
					'posts_per_page' => 1
				);

				$the_query = new WP_Query ( $args );
			?>
			<?php if ( have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li><!--featured image-->
			<div class="feature-image">	

				<img src="<?php the_field('homepage_slider_image'); ?>">
					
				<div class="sixteen columns alpha">
					<a href="<?php the_permalink(); ?>" class="btn">
						<p>View Project</p>
					</a>
				</div>
			</div>
			</li>
			<?php endwhile; endif; ?>
		</ul>
	</div>
</div>

<div class="full-width header">
	<div class="container">
		<div class="specialties sixteen columns">
			<div>
				<p class="special-intro">I am all about</p>
			</div>

			<div class="sixteen columns alpha">
			<!-- LOGO AND BRANDING DESIGN -->
				<div class="special one-third column alpha">
					<img class="special-img-color" src="<?php bloginfo('template_directory');?>/images/special1-color.png">
					<h4>branding design</h4>						
					<p>Give a lasting first impression. Branding is about more than just a logo and I can offer you the full package.</p>
				</div>

				<!-- LAYOUT AND PRINT DESIGN -->
				<div class="special one-third column">	
					<img class="special-img-color desaturate" src="<?php bloginfo('template_directory');?>/images/special5-color.png">
					<h4>ux + ui design</h4>
					<p>Beautiful web and mobile experiences and interface design, from conception and wireframing to design and development.</p>
				</div>

				<!-- FRONT END WEB DEVELOPMENT -->
				<div class="special one-third column omega">
					<img class= "special-img-color desaturate" src="<?php bloginfo('template_directory');?>/images/special3-color.png">
					<h4>front-end web development</h4>
					<p>I create hand-crafted, responsive websites with the user's experience in mind first. Clean and simple.</p>
				</div>
			</div><!-- end fourteen columns -->
			
			<div class="sixteen columns alpha"><br>
				<a href="about/" class="btn">
					<p>More about me!</p>
				</a>
			</div>
		</div>

		</div><!-- end sixteen columns -->
	</div> <!-- end container -->
</div> <!-- end header class -->


<?php get_footer(); ?>
