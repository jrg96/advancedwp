<?php if(is_archive() || is_search()): ?>
	<div class="archive-post">
		<h4>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h4>
		
		<p>
			Posted on: <?php the_date('l jS \of F Y h:i:s A'); ?> 
		</p>
	</div>
<?php else: ?>
	<article class="post">
		<h2><?php the_title(); ?></h2>
		<p class="meta">
			Posted at <?php the_date('l jS \of F Y h:i:s A'); ?> 
			by 
			<a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
			
			|
			
			Posted In
			<?php
				$categories = get_the_category();
				$separator = ', ';
				$output = '';
				
				if ($categories)
				{
					foreach($categories as $category)
					{
						$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
					}
				}
				
				echo trim($output, $separator);
			?>
		</p>
		
		<?php if(has_post_thumbnail()) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
			
		<p>
			<?php echo the_excerpt(); ?>
		</p>
		
		<a class="button" href="<?php the_permalink(); ?>">Read More</a>
	</article>
<?php endif; ?>