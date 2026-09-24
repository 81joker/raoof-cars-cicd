<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
          <!-- Spinner Start -->
          <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <?php include('navbar.php') ?>
        <!-- Navbar End -->
<?php
if (!is_front_page()) :
        $args = $_SERVER['REQUEST_URI'];
        $args = ltrim($args, '/'); 
        $args = rtrim($args, '/'); 
        $args = ucfirst($args);
        get_template_part( 'parts/content', 'breadcrumb' , $args);
        ?>
    <div class="container">

<?php endif;?>
    

