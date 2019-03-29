<?php
/**
 * Template part for displaying a the testimonials section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yorkshire_Verruca_Clinic
 */
 
// Custom Fields
$video_one_embed_code  = get_field('video_one_embed_code', 'option');
$video_one_quote  = get_field('video_one_quote', 'option');
$video_one_patient_name  = get_field('video_one_patient_name', 'option');

$video_two_embed_code  = get_field('video_two_embed_code', 'option');
$video_two_quote  = get_field('video_two_quote', 'option');
$video_two_patient_name  = get_field('video_two_patient_name', 'option');

$video_three_embed_code  = get_field('video_three_embed_code', 'option');
$video_three_quote  = get_field('video_three_quote', 'option');
$video_three_patient_name  = get_field('video_three_patient_name', 'option');

?>

<section id="testimonials" class="bg-colour-1">
  <div class="container">
    <h2>Don't just take our word for it</h2>
    <h5 class="testimonials-subtitle">See what patients have to say about our verruca treatment.</h5>
    <div class="row">
      <div class="col-md-6 col-lg-4 mt-3">
        <div class='embed-container'>
          <!--<iframe src="https://player.vimeo.com/video/325427249" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
          <?php echo $video_one_embed_code; ?>
        </div>
        <h5 class="mt-3">"<?php echo $video_one_quote; ?>"</h5>
        <h5><span class="testimonial-name"><?php echo $video_one_patient_name; ?> - Swift Patient</span></h5>
      </div>
      <div class=" col-md-6 col-lg-4 mt-3">
        <div class='embed-container'>
          <!--<iframe src="https://player.vimeo.com/video/325428446" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
          <?php echo $video_two_embed_code; ?>
        </div>
        <h5 class="mt-3">"<?php echo $video_two_quote; ?>"</h5>
        <h5><span class="testimonial-name"><?php echo $video_two_patient_name; ?> - Swift Patient</span></h5>
      </div>
      <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0 mt-3">
        <div class='embed-container'>
          <!--<iframe src="https://player.vimeo.com/video/325429814" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
          <?php echo $video_three_embed_code; ?>
        </div>
        <h5 class="mt-3">"<?php echo $video_three_quote; ?>"</h5>
        <h5><span class="testimonial-name"><?php echo $video_three_patient_name; ?> - Swift Patient</span></h5>
      </div>
    </div>
  </div>
</section>
