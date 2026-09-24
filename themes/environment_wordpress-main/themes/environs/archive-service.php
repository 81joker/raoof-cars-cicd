<?php
/* Template Name: Service Template */
get_header();
?>
<?php
while (have_posts()) :
the_post();
?>

</div>
<!-- Services Start -->
<?php get_template_part('parts/content', 'service'); ?>
<!-- Services End -->


<?php endwhile; ?>
<?php
get_footer();
?>