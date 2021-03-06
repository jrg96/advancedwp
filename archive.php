<?php get_header(); ?>
		<div class="container content">
			<div class="main block">
				<h1 class="page-header">
					<?php
						if (is_category())
						{
							single_cat_title();
						}
						elseif (is_author())
						{
							the_post();
							echo 'Archives by Author: ' . get_the_author();
						}
						elseif (is_tag())
						{
							single_tag_title();
						}
						elseif (is_day())
						{
							echo 'Archives by day: ' . get_the_date();
						}
						elseif (is_month())
						{
							echo 'Archives by month: ' . get_the_date('F Y');
						}
						elseif (is_year())
						{
							echo 'Archives by year: ' . get_the_date('Y');
						}
						else
						{
							echo 'Archives';
						}
					?>
				</h1>
			
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<?php get_template_part('content', get_post_format()); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php echo wpautop('Sorry no posts were found'); ?>
				<?php endif; ?>
			</div>
			
			<div class="side">
				<?php if(is_active_sidebar('sidebar')) : ?>
					<?php dynamic_sidebar('sidebar'); ?>
				<?php endif; ?>
			</div>
		</div>
<?php get_footer(); ?>