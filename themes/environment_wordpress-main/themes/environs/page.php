<?php get_header(); ?>
<?php 
    if( have_posts() ):
        while( have_posts() ) : the_post();
     ?>

<h3 class="text-uppercase text-primary"><?php the_title() ?></h3>
                             
<?php endwhile; ?>                                
        <?php
    else: ?>
        <p>Nothing yet to be displayed!</p>
<?php endif; ?>                                
<?php get_footer(); ?>