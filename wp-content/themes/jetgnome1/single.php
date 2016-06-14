<?php get_header();?>
	<div id="main">
		<?php get_sidebar();?>
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
					<span class="comments"><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?></span><?php edit_post_link('edit this'); ?>
				</p>				
			</div>
			<?php comments_template(); ?>
			<?php endforeach; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			<p align="center"><?php posts_nav_link() ?></p>		
	</div>
	
<?php get_footer();?>