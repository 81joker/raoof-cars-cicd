<?php
/* Template Name: About Us Template */
get_header();
?>
<?php 
    while( have_posts() ):
        the_post();
?>

<!-- About Start -->
 <?php get_template_part( 'parts/content', 'about-start' );?>
<!-- About End -->


<?php endwhile; ?>
<?php
get_footer();
?>
