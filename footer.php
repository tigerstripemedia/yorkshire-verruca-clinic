<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yorkshire_Verruca_Clinic
 */
 
// About Section Custom Fields
$about_us_title  = get_field('about_us_title', 'option');
$about_us_sub_title  = get_field('about_us_sub_title', 'option');
$about_us_image  = get_field('about_us_image', 'option');
$about_us_content  = get_field('about_us_content', 'option');

// Our Clinics Custom Fields
$colne_valley_title  = get_field('colne_valley_title', 'option');
$colne_valley_website  = get_field('colne_valley_website', 'option');
$colne_valley_address  = get_field('colne_valley_address', 'option');
$colne_valley_number  = get_field('colne_valley_number', 'option');
$colne_valley_email  = get_field('colne_valley_email', 'option');
$colne_valley_google_map  = get_field('colne_valley_google_map', 'option');

$huddersfield_title  = get_field('huddersfield_title', 'option');
$huddersfield_website  = get_field('huddersfield_website', 'option');
$huddersfield_address  = get_field('huddersfield_address', 'option');
$huddersfield_number  = get_field('huddersfield_number', 'option');
$huddersfield_email  = get_field('huddersfield_email', 'option');
$huddersfield_google_map  = get_field('huddersfield_google_map', 'option');

// Footer Banners
$accreditation_one  = get_field('accreditation_one', 'option');
$accreditation_two  = get_field('accreditation_two', 'option');
$accreditation_three  = get_field('accreditation_three', 'option');


?>


	<!-- Footer -->
    <footer>
      <div id="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mt-3">
              <div class="about-section">
                <h3 class="mb-3 text-center">About Us</h3>
                <hr>
                <div class="row">
                  <div class="col-md-6"><img src="<?php echo $about_us_image; ?>"></img></div>
                  <div class="col-md-6">
                    <h6><?php echo $about_us_title; ?></h6>
                    <small class="colour-2"><?php echo $about_us_sub_title; ?></small>
                  </div>
                </div>
                <small class="mt-3"><?php echo $about_us_content; ?></small>
              </div>
            </div>
            <div id="our-clinics" class="col-lg-8 our-clinics mt-sm-5 mt-md-3">
              <h3 class="mb-3 mt-4 mt-lg-0">Our Clinics</h3>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <div class="text-left">
                    <h6 class="mt-3"><a href="https://www.<?php echo $colne_valley_website; ?>" target="_blank"><?php echo $colne_valley_title; ?> <i class="fas fa-angle-right"></i></a></h6>
                    <p><?php echo $colne_valley_address; ?></p>
                    <p><?php echo $colne_valley_number; ?><br><?php echo $colne_valley_email; ?></p>
                    <?php echo $colne_valley_google_map; ?>
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d591.8713218342186!2d-1.9238152118314849!3d53.60264509874597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bc44884027ab9%3A0x5db0658270a9149f!2sColne+Valley+Chiropody!5e0!3m2!1sen!2suk!4v1552313923104" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                  </div>
                </div>
                <div class="col-md-6 mt-sm-4 mt-md-0">
                  <div class="text-left">
                    <h6 class="mt-3"><a href="https://www.<?php echo $huddersfield_website; ?>" target="_blank"><?php echo $huddersfield_title; ?> <i class="fas fa-angle-right"></i></a></h6>
                    <p><?php echo $huddersfield_address; ?></p>
                    <p><?php echo $colne_valley_number; ?><br><?php echo $huddersfield_email; ?></p>
                    <?php echo $huddersfield_google_map; ?>
                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2365.0496070165477!2d-1.7859575483792118!3d53.646087629945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5aa1d93a5aa55889!2sHuddersfield+Chiropody!5e0!3m2!1sen!2suk!4v1552313854774" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row accreditations mt-4">
            <div class="col-6 col-sm-4 mt-2">
              <img src="<?php echo $accreditation_one; ?>">
            </div>
            <div class="col-6 col-sm-4 mt-2">
              <img src="<?php echo $accreditation_two; ?>">
            </div>
            <div class="col-6 offset-3 col-sm-4 offset-sm-0 mt-2">
              <img src="<?php echo $accreditation_three; ?>">
            </div>
          </div>
        </div>
        
        <div class="social-links">
          <div class="container">
            
            <?php while( have_rows('social_media_accounts', 'option') ): the_row();
        
            // Custom sub fields
        		$choose_network = get_sub_field('choose_network');
        		$url_to_profile = get_sub_field('url_to_profile');

        
        		?>
            
            <a href="<?php echo $url_to_profile; ?>" class="mx-2 mt-2 colour-2" target="_blank"><?php echo $choose_network; ?></a>
            
            <?php endwhile; wp_reset_postdata(); ?>
            
          </div>
        </div>
        <div class="policy-links">
          <div class="container">
            <a href="/privacy-and-cookies" class="colour-2"><small>Privacy & Cookie Policy</small></a>
          </div>
        </div>
      </div>
      <div class="copyright bg-colour-1">
        <div class="container">
          <small>&copy; <?php echo date("Y"); ?> Yorkshire Verruca Clinic | <a href="https://www.tigerstripemedia.com" target="_blank">Website made with &#9825; by Tiger Stripe Media</a></small>
        </div>
      </div>

    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Custom JS -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
