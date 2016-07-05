<?php get_header();?>
	<?php get_sidebar();?>
	<section>
        <div>
        <?php if (have_posts()) : ?>

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>				
            <h2 class="post-title">Новости  категории '<?php echo single_cat_title(); ?>'</h2>
            
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
        </div>
        <div>
            <?php } ?>
            <?php endif; ?>
            <?php if ($posts) : foreach ($posts as $post) : start_wp(); ?>
                <?php
                    if (($a % 2) == 1) {include "newsOdd.php";} 
                    else {include "newsEven.php";}                            
                    $a++;                
                ?>
                <?php comments_template(); ?>
                <?php endforeach; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
                <p align="center"><?php posts_nav_link() ?></p>
        </div>	
	</section>
<?php get_footer();?>