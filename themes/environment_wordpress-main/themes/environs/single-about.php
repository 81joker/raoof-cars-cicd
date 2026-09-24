<?php
/* Template Name: About Us Template */
get_header();
?>
<?php 
    while( have_posts() ):
        the_post();
    // pageBanner();
    get_template_part( 'parts/content', 'breadcrumb' );
    
?>


<h1>Single About </h1>
<!-- About Start -->
 <?php get_template_part( 'parts/content', 'about-start' );?>
<!-- About End -->


<?php endwhile; ?>
<?php
get_footer();
?>
