

<?php get_header(); ?>
	<div class="page container_12">
		<header>
			<div class="header grid_12">
				<img src="<?php get_header_image(); ?>">
				<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
				
				<div class="tagline">
					<div class="grid_4 alpha tal">
						<h2><?php bloginfo('description'); ?></h2>
					</div>
					<div class="grid_4">
						&nbsp;
					</div>
					<div class="grid_4 omega tar">
						<?php 
							date_default_timezone_set('PST');
							echo date("l, F d, Y"); 
						?>
					</div>
					<div class="clear"></div>
    		</div>
    		
			</div>
		</header>
		
		<!-- aside -->
		<?php get_sidebar(); ?>
		<!-- /aside -->
		
		<div class="posts grid_9 pull_3">		
			<section>	
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				
				
					<!-- post -->
					<div class="row">

						<div class="post grid_4 alpha omega">
							<p>
							<?php the_time('M j, Y g:i a'); ?>
							</p>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p>
							By <?php the_author_posts_link(); ?>
							</p>
							<p><?php the_content(); ?></p>
							<p class="fr"><a class="bubble" href="<?php comments_link(); ?>"><?php comments_number('0', '1', '%'); ?><span class="bubble-point"></span></a></p>
							<p class="cats"><?php the_category(', '); ?></p>
							<div class="clear"></div>
						</div><!-- .post -->
						<div class="clear"></div>
					</div><!-- .row -->
					<!-- /post -->
					
				<?php endwhile; else: ?>
					<div class="grid_9 alpha omega">
						<!-- If there are no posts display the message below -->
						<h3>Woops...</h3>
						<p>Sorry, no posts we're found.</p>
					</div>
				<?php endif; ?> 
				<div class="clear"></div>
				

				<div class="next-prev grid_9">
					<?php posts_nav_link(); ?>
				</div>
				
			</section>
		</div>
		
		<div class="footer grid_12 tar">
			<footer>
				&copy; <?php bloginfo('name'); ?>, <?php echo date('Y'); ?>
			</footer>
		</div>
	</div>
	
	<div class="nav">
		<nav>
			<ul>
				<li><a href="<?php echo site_url(); ?>">Home</a></li>
				<?php wp_list_pages('title_li='); ?>
			</ul>
		</nav>
	</div>
	
	<div class="bottom"><div>
	
<?php get_footer(); ?>