<?php
require get_template_directory() . '/inc/customizer.php';

function environs_load_scripts(){

    // Google Web Fonts
    // wp_enqueue_style( 'google-fonts-googleapis', '//fonts.googleapis.com', array(), null );
    // wp_enqueue_style( 'google-fonts-gstatic', '//fonts.gstatic.com', array(), null );
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap', array(), null );


    //   Icon Font Stylesheet 
    wp_enqueue_style('custom-google-fonts', '//use.fontawesome.com/releases/v5.15.4/css/all.css');
    wp_enqueue_style('environs-fonts-icons', '//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');



    //  Libraries Stylesheet
    // wp_enqueue_style( 'environs-owlcarouselCss', get_stylesheet_uri(), get_theme_file_uri( '/lib/owlcarousel/assets/owl.carousel.min.css' ) );
    wp_enqueue_style( 'environs-owl.carousel.min.css', get_theme_file_uri( '/lib/owlcarousel/assets/owl.carousel.min.css' ), array(), '1.0.0' );
    wp_enqueue_style( 'environs-lightbox.min.css',get_template_directory_uri().'/lib/lightbox/css/lightbox.min.css' );
    // wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/css/bootstrap.min.css');

    // Customized Bootstrap Stylesheet 
    wp_enqueue_style( 'environs-bootstrap-minCss', get_theme_file_uri('/css/bootstrap.min.css') );

    // Template Stylesheet
    wp_enqueue_style( 'environs-template-style',get_template_directory_uri() . '/css/main.css' );


    // Template Style
    wp_enqueue_style( 'environs-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    // wp_enqueue_script( 'dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true );

        
    // JavaScript Libraries
    wp_enqueue_script('environs-ajax-js', '//ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), '1.0', true);

    wp_enqueue_script('environs-bootstrap-js', '//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('environs-easing-js', get_theme_file_uri('/lib/easing/easing.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('environs-waypoints-js', get_theme_file_uri('/lib/waypoints/waypoints.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('environs-counterup-js', get_theme_file_uri('/lib/counterup/counterup.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('environs-owlcarousel-js', get_theme_file_uri('/lib/owlcarousel/owl.carousel.min.js'), array('jquery'), '1.0', true);
    wp_enqueue_script('environs-lightbox-js', get_theme_file_uri('/lib/lightbox/js/lightbox.min.js'), array('jquery'), '1.0', true);
    
    // Template Javascript
    wp_enqueue_script('environs-js', get_theme_file_uri('/js/main.js'), array('jquery'), '1.0', true);

}
add_action( 'wp_enqueue_scripts', 'environs_load_scripts' );

function environs_config(){

    $textdomain = 'environs';
    load_theme_textdomain( $textdomain, get_template_directory() . '/languages/' );

    register_nav_menus(
        array(
            'environs_main_menu' => esc_html__( 'Main Menu', 'environs' ),
            'environs_footer_menu' => esc_html__( 'Footer Menu', 'environs' )
        )
    );

    $args = array(
        'height'    => 540,
        'width'     => 1920
    );
    add_theme_support( 'custom-header', $args );
    add_theme_support( 'post-thumbnails' );
    // add_theme_support( 'custom-logo', array(
    //     'width' => 200,
    //     'height'    => 110,
    //     'flex-height'   => true,
    //     'flex-width'    => true
    // ) );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
    add_theme_support( 'title-tag' );

    //add_theme_support( 'align-wide' );
    // add_theme_support( 'responsive-embeds' );
    // add_theme_support( 'editor-styles' );
    // add_editor_style( 'style-editor.css' );
    // add_theme_support( 'wp-block-styles' );

}
add_action( 'after_setup_theme', 'environs_config', 0 );

// Send Email wordpress Start 


// Send Email WordPress Start
function handle_form_submission() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $subject = sanitize_text_field($_POST['subject']);
        $message = sanitize_textarea_field($_POST['message']);
        
        $to = "nehad.al.timimi@gmail.com"; 
        $subject = "New Form Submission: " . $subject;
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        // Load the HTML template
        $template_path = get_template_directory() . '/email-template.html';
        $body = file_get_contents($template_path);

        // Replace placeholders with actual data
        $body = str_replace('{{name}}', $name, $body);
        $body = str_replace('{{email}}', $email, $body);
        $body = str_replace('{{phone}}', $phone, $body);
        $body = str_replace('{{subject}}', $subject, $body);
        $body = str_replace('{{message}}', nl2br($message), $body);
        
        if (wp_mail($to, $subject, $body, $headers)) {
            // Redirect back to the same page with success flag
            wp_safe_redirect(add_query_arg('form_submitted', 'success', $_SERVER['REQUEST_URI']));
            exit;
        } else {
            // Redirect back to the same page with error flag
            wp_safe_redirect(add_query_arg('form_submitted', 'error', $_SERVER['REQUEST_URI']));
            exit;
        }
    }
}
add_action('wp', 'handle_form_submission');

function display_form_success_message() {

    if (isset($_GET['form_submitted']) && $_GET['form_submitted'] == 'success') {
        echo '
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function() {
                var placeholder = document.getElementById("success-message-placeholder");
                if (placeholder) {
                    placeholder.innerHTML = \'<div class="success-message alert alert-success">Thank you! Your form has been submitted successfully.</div>\';
                    
                    setTimeout(function() {
                        placeholder.innerHTML = "";
                    }, 1000); // Adjust time in milliseconds as needed
                }
            });
        </script>';
    } 
}
add_action('wp_footer', 'display_form_success_message');




// Send Email wordpress End