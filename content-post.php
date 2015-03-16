<div class="two columns alpha">
	<div class="notes">
		<ul>
			<li class="the-date"><?php the_date('m.d.y'); ?></li>
			<!--<li>Written by: <em><a href="<?php bloginfo('siteurl'); ?>/about/"><?php the_author(); ?></em></a></li>
			<li>Posted in: <em><?php the_category(', '); ?></em></li>-->
		</ul>
	</div>
</div>

<div class="ten columns omega">
	<h3 class="notes single-post">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h3>

	<div class="excerpt">
		<?php if(is_single()): ?>

			<?php the_content(); ?> <br >
	</div>
</div>

<hr>
<div class="twelve columns alpha">
		<?php comments_template(); ?> <br >
</div>

		<?php else: ?>
			<?php the_excerpt(); ?>
			<p><a class="post-link" href="<?php the_permalink(); ?>"><em>Continue Reading</em> &nbsp;&nbsp;<span class="arrow-right"></span></a></p>
		<?php endif; ?>
	</div>
</div>
