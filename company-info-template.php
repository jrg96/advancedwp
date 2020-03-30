<?php
	/*
	 * Template Name: Company Info Template
	 */
?>

<?php get_header(); ?>
		<div class="container content">
			<div class="main block">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<article class="page">
							<h2><?php the_title(); ?></h2>
							
							<p class="phone">8888-8888</p>
							
							<?php the_content(); ?>
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