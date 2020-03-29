<article class="post post-link">
	<div class="well">
		<?php
			// Strip undesirable data
			$rep = array('<p>', '</p>', '<!-- wp:paragraph -->', '<!-- /wp:paragraph -->');
		?>
		<a href="<?php echo str_replace($rep, '', get_the_content()); ?>"><?php the_title(); ?></a>
	</div>
</article>