<?php get_header();?>
	<?php get_sidebar();?>
	<section>
		<?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>
				<div class="post-content">
				<?php the_content("Continue Reading &#187;"); ?>
				<?php wp_link_pages(); ?>											
				

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
	</section>
<?php get_footer();?>