<?php get_header();?>
	<div id="main">
	<?php get_footer();?>
	<?php if (have_posts()) : ?>

	<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h2 class="post-title">Archive for the '<?php echo single_cat_title(); ?>' Category</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="post-title">Archive for <?php the_time('F jS, Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="post-title">Archive for <?php the_time('F, Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="post-title">Archive for <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2 class="post-title">Search Results</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="post-title">Author Archive</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="post-title">Blog Archives</h2>

		<?php } ?>
		<?php endif; ?>
		<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>
			<div class="box">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="post-content">
				<?php the_content("Continue Reading &#187;"); ?>
				<?php wp_link_pages(); ?>											
				
				<!--
					<?php trackback_rdf(); ?>
				-->
				</div>
				<p class="bottom">
					<span class="cat"><?php the_category(' &amp;');?></span>					
					<span class="user"><?php the_author(); ?></span>
					<span class="date"><?php the_time('d M Y'); ?></span>
					<span class="comments"><?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments')); ?></span><?php edit_post_link('edit this'); ?>
				</p>				
			</div>
			<?php comments_template(); ?>
			<?php endforeach; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			<p align="center"><?php posts_nav_link() ?></p>		
	</div>
	<?php get_sidebar();?>