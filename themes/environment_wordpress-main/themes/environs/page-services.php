<?php
/* Template Name: Services Template */
get_header();
?>
<?php 
    while( have_posts() ):
        the_post();
    $args =  'Services';
    get_template_part( 'parts/content', 'breadcrumb' , $args );
?>


        <!-- Services Start -->
        <div class="container-fluid service py-5 bg-light">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h5 class="text-uppercase text-primary"><?php echo esc_html(get_field('first_title')); ?></h5>
                    <h1 class="mb-0"><?php echo esc_html(get_field('second_title')); ?></h1>
                </div>
                <div class="row g-4">

                  <?php for ($i=0; $i < 10; $i++):?>
                    <?php $image = get_field('card_image'.$i) ?>
                    <?php if($image):  ?>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="service-item">
                           <img src="<?php echo $image['url']; ?>" class="img-fluid w-100 h-100" alt="<?php echo $image['caption']; ?>">
                             <div class="service-link">
                                <a href="<?php echo esc_url(get_field('card_url'.$i)); ?>" class="h4 mb-0"><?php echo esc_html(get_field('card_button'.$i)); ?></a>
                            </div>
                        </div>
                        <p class="my-4"><?php echo esc_html(get_field('card_text'.$i)); ?> </p>
                    </div>
                  <?php endif; ?>
                  <?php endfor; ?>

                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->




<?php endwhile; ?>
<?php
get_footer();
?>
