<?php 
$section = "about"
?>

<?php 

/*

	Template Name: Work Page

*/

get_header(); ?>
<?php include_once( 'header.php' ); ?>

<div class="full width">
	<div class="container">
		<h2 class="title">
			Made With Love		
		</h2>
	</div>
</div>
	
	<div class="portfoliopage">
		<div id="container">
			<ul id="content">
				<?php
					$args = array(
						'post_type' => 'work'
					);

					$the_query = new WP_Query ( $args );
				?>

				<?php if ( have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
				<li>
					<a href="<?php the_permalink(); ?>">
						<img src="<?php the_field('main_project_image'); ?>">
					</a>
				</li>

				<?php endwhile; endif; ?>
			</ul>
		</div><!-- end container -->
	</div><!-- end portfolio page class -->
<?php get_footer(); ?>