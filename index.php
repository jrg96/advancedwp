<?php get_header(); ?>
		<div class="container content">
			<div class="main block">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
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
							<p>
								<?php echo the_excerpt(); ?>
							</p>
							
							<a class="button" href="<?php the_permalink(); ?>">Read More</a>
						</article>
					<?php endwhile; ?>
				<?php else : ?>
					<?php echo wpautop('Sorry no posts were found'); ?>
				<?php endif; ?>
			</div>
			
			<div class="side">
				<div class="block">
					<h3>Sidebar Head</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat vehicula blandit. Praesent pharetra, libero nec fringilla</p>
					
					<a class="button" href="#">Read More</a>
				</div>
			</div>
		</div>
<?php get_footer(); ?>