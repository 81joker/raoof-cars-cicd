<!-- Carousel Start -->
<div class="container-fluid carousel-header vh-100 px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <?php for ($i = 0; $i < 3; $i++) : ?>
                <li data-bs-target="#carouselId" data-bs-slide-to="<?php echo $i; ?>" <?php if ($i == 0) echo 'class="active"'; ?>></li>
            <?php endfor; ?>
        </ol>
        <div class="carousel-inner" role="listbox">
            <?php for ($i = 1; $i < 4; $i++) : ?>
                <div class="carousel-item <?php if ($i == 1) echo 'active'; ?>">
                    <img src="<?php echo get_theme_mod('slide_image_' . $i)  ?>" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;"><?php echo get_theme_mod('slide_title_'. $i); ?></h4>

                            <h1 class="display-1 text-capitalize text-white mb-4"><?php echo get_theme_mod('slide_subtitle_' . $i); ?></h1>
                            <p class="mb-5 fs-5"><?php echo get_theme_mod('slide_content_' . $i); ?></p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">Join With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

