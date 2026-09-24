<?php
/* Template Name: Contact Template */
get_header();
?>
<?php 
    while( have_posts() ):
        the_post();

    $name = "Site name";
// $email = "info@sitename.com";
if(isset ($_POST["name"])){
$name = sanitize_text_field($_POST["name"]);
// $email = sanitize_email($_POST["email"]);
var_dump($name);
}
?>

<!-- Contact Start -->
        <div class="container-fluid bg-light py-5">
            <div class="container py-5">
                <!-- Success Message St -->
                <div id="success-message-placeholder"></div>
               <!-- Success Message En -->
                <div class="contact p-5">
                    <div class="row g-4">
                        <div class="col-xl-5">
                            <h1 class="mb-4">Get in touch</h1>
                            <p class="mb-4">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                             sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,                              
                            </p>
                            <form method="POST"  action="">
                                <div class="row gx-4 gy-3">
                                    <div class="col-xl-6">
                                        <input type="text" name="name" class="form-control bg-white border-0 py-3 px-4" placeholder="Your First Name">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="email" name="email" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Email">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" name="phone" class="form-control bg-white border-0 py-3 px-4" placeholder="Your Phone">
                                    </div>
                                    <div class="col-xl-6">
                                        <input type="text" name="subject" class="form-control bg-white border-0 py-3 px-4" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control bg-white border-0 py-3 px-4" rows="7" cols="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn-hover-bg btn btn-primary w-100 py-3 px-5" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-xl-7">
                            <div>
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="bg-white p-4">
                                            <i class="fas fa-map-marker-alt fa-2x text-primary mb-2"></i>
                                            <h4>Address</h4>
                                            <p class="mb-0">Hermann-Bahr-Straße 1210 Wien</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 px-1">
                                        <div class="bg-white p-4 overflow-hidden">
                                            <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                            <h4>Mail Us</h4>
                                            <p class="mb-0">nehad.al.timimi@gmail.com</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="bg-white p-4">
                                            <i class="fa fa-phone-alt fa-2x text-primary mb-2"></i>
                                            <h4>Telephone</h4>
                                            <p class="mb-0">(+43) 0660 6180 228</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <iframe class="w-100" style="height: 412px; margin-bottom: -6px;" 
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5312.4399032650845!2d16.3976891!3d48.2601416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d067af7d01041%3A0xdbf05604998287a8!2sHermann-Bahr-Stra%C3%9Fe%2C%201210%20Wien!5e0!3m2!1sen!2sat!4v1721740479226!5m2!1sen!2sat"
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->



<?php endwhile; ?>
<?php
get_footer();
?>
