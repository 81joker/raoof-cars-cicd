<?php
/* Template Name: About Us Template */
get_header();
?>
<?php
while (have_posts()) :
the_post();
?>

<!-- About Start -->
<?php get_template_part('parts/content', 'about-start'); ?>
<!-- About End -->
<!-- Volunteers Start -->
<div class="container-fluid volunteer py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5">
                <div class="row g-4">
                    <?php 
                    for ($i=1; $i < 10; $i++) :
                    $image = get_field('volunteer_img'.$i);
                    if( $image ): 
                    ?>
                    <div class="col-lg-6">
                        <div class="volunteer-img">
                            <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid w-100" alt="Image">
                            <div class="volunteer-title">
                                <h5 class="mb-2 text-white"><?php echo esc_html($image['caption']); ?></h5>
                                <p class="mb-0 text-white"><?php echo esc_html($image['description']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                    endif;
                    endfor; 
                    ?>
                </div>
            </div>
            <div class="col-lg-7">
                <h5 class="text-uppercase text-primary"><?php echo esc_html(get_field('frist_title')) ?></h5>
                <h1 class="mb-4"><?php echo esc_html(get_field('second_title')) ?></h1>
                <p class="mb-4"><?php echo esc_html(get_field('volunteer_text')) ?></p>
                <?php for ($i=1; $i < 10; $i++) : ?>
                <?php if(get_field('text_dark'.$i)): ?>
                <p class="text-dark "><i class=" fa fa-check text-primary me-2"></i> <?php echo esc_html(get_field('text_dark'.$i)) ?></p>
                <?php endif ?>
                <?php  endfor; ?>
                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4 mt-4" href="#">Join With Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Volunteers End -->


<?php endwhile; ?>
<?php
get_footer();
?>