<?php get_header(); ?>
		<div class="container content">
			<div class="main block">
				<h1 class="page-header">
					Search Results: <?php echo $_GET['s'] ?>
				</h1>
			
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
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