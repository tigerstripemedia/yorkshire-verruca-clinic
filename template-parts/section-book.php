<?php
/**
 * Template part for displaying a the book now section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yorkshire_Verruca_Clinic
 */

// Custom Fields
$phone_number_one  = get_field('phone_number_one', 'option');
$phone_number_two  = get_field('phone_number_two', 'option');
$email_address  = get_field('email_address', 'option');

$book_now_title  = get_field('book_now_title', 'option');
$book_now_content  = get_field('book_now_content', 'option');
$icon_one_svg  = get_field('icon_one_svg', 'option');
$icon_one_text  = get_field('icon_one_text', 'option');
$icon_two_svg  = get_field('icon_two_svg', 'option');
$icon_two_text  = get_field('icon_two_text', 'option');
$icon_three_svg  = get_field('icon_three_svg', 'option');
$icon_three_text  = get_field('icon_three_text', 'option');
$book_now_banner  = get_field('book_now_banner', 'option');
$call_the_clinic_title  = get_field('call_the_clinic_title', 'option');
$message_us_title  = get_field('message_us_title', 'option');
$book_form_shortcode  = get_field('book_form_shortcode', 'option');

?>

<section id="book">
  <div class="container">
    <h2 class="text-center"><?php echo $book_now_title; ?></h2>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <div class="book-now-text">
          <?php echo $book_now_content; ?>
        </div>
        <div class="row book-now-icons mt-4">
          <div class="col-sm-4 col-6">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/<?php echo $icon_one_svg; ?>"></img>
            <h6 class="colour-2 text-center mt-3"><?php echo $icon_one_text; ?></h6>
          </div>
          <div class="col-sm-4 col-6">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/<?php echo $icon_two_svg; ?>"></img>
            <h6 class="colour-2 text-center mt-3"><?php echo $icon_two_text; ?></h6>
          </div>
          <div class="col-sm-4 offset-sm-0 col-6 offset-3">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/<?php echo $icon_three_svg; ?>"></img>
            <h6 class="colour-2 text-center mt-3"><?php echo $icon_three_text; ?></h6>
          </div>
        </div>
        <div class="book-now-banner mt-4">
          <img src="<?php echo $book_now_banner; ?>"></img>
        </div>
      </div>
      <div class="col-md-6">
        <h4 class="mb-4 mt-4 mt-md-3 text-center"><?php echo $call_the_clinic_title; ?></h4>
        <h3 class="colour-2 text-center"><a href="tel:+44<?php echo $phone_number_one; ?>">0<?php echo $phone_number_one; ?></a><?php if($phone_number_two) :?><span class="contact-separator"></span><a href="tel:+44<?php echo $phone_number_two; ?>">0<?php echo $phone_number_two; ?></a></h3><?php endif; ?>
        <hr>
        <h4 class="mb-4 mt-4 text-center"><?php echo $message_us_title; ?></h4>
        <?php echo $book_form_shortcode; ?>
      </div>
    </div>
  </div>
</section>
