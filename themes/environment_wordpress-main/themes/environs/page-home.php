<?php get_header(); ?>
<?php include('hero.php') ?>

<!-- About Start -->
<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'about',
    'order' => 'ASC',
);
$postlist = new WP_Query($args);
if ($postlist->have_posts()) :
    while ($postlist->have_posts()) : $postlist->the_post();?>
<?php get_template_part('parts/content', 'about-start'); ?>
<?php endwhile;?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<!-- About End -->


<!-- Services Start -->
<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'service',
    'order' => 'ASC',
);
$postabout = new WP_Query($args);
if ($postabout->have_posts()) :
    while ($postabout->have_posts()) : $postabout->the_post();?>
<?php get_template_part('parts/content', 'service'); ?>
<?php endwhile;?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<!-- Services End -->


<!-- Our Work Start -->
<?php get_template_part('parts/content', 'our-work'); ?>
<!-- Our Work End -->


<!-- Donation Start -->
<?php get_template_part('parts/content', 'donation'); ?>
<!-- Donation End   -->

<?php get_footer(); ?>