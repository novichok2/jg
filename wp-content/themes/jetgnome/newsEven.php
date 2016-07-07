<div class="indexNewsMainDiv" id="post-<?php the_ID(); ?>">
    <div class="indexNewsDiv2Even">	
        <?php echo get_the_post_thumbnail(); ?>	                                			
    </div>
    
    <div class="indexNewsDiv1Even">		
        <div class="indexNewsText">
            <h2 class="indexNewsH2"><?php the_title(); ?></a></h2>
            <!-- by <?php the_author() ?> -->  
            <div class="indexNewsSpan">										
                <?php the_excerpt('Читать дальше...'); ?>								
                <a href="<?php echo get_permalink(); ?>">читать далее</a>
            </div>
        </div>
        
        <div class="indexNewsNav">
            <table class="indexTableCommit">
                <tr>
                    <td class="newsCategoryEven">
                        <?php the_category(', ') ?>
                    </td>
                    <td class="newsDate"> 
                    <?php the_time('d.m.Y') ?>
                    </td>
                    <td>
                        <img src="<?php echo get_stylesheet_directory_uri()?>/images/comments-img.png"> 
                        <?php comments_popup_link('0', '1', '%'); ?>
                    </td>
                </tr>
            </table>
        </div>						
    </div>       
</div>       