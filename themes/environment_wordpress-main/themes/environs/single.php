<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <?php 
            while( have_posts() ):
                the_post();
                get_template_part( 'parts/content', 'single' );
              echo get_field('text_field');
              $image = get_field('image_field'); 

              ?>
            <img src="<?php echo esc_url($image['url']); ?>">

<?php
            endwhile;
            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>