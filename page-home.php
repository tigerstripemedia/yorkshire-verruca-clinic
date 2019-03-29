<?php

/*
    Template Name: Home Page
*/ 

// Custom Fields
$video_title_start  = get_field('video_title_start');
$video_title_end  = get_field('video_title_end');
$video_subtitle  = get_field('video_subtitle');
$video_embed_code  = get_field('video_embed_code');

get_header();
?>

	<section id="video-page-content">
    <div class="bg-overlay">
      <div class="video-page">
        <div class="container">
          <div class="mb-5">
            <h1 class="video-title"><?php echo $video_title_start; ?> <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/swift-logo-white.svg"> <?php echo $video_title_end; ?></h1>
            <h2 class="video-tag-line"><?php echo $video_subtitle; ?></h2>
            <h5 class="video-subtitle mt-3"><i class="far fa-play-circle"></i> Tap play to find out about the treatment.</h5>
          </div>
          <div class='embed-container'><?php echo $video_embed_code; ?></div>
          <i class="fas fa-chevron-down fa-5x mt-3 text-center"></i>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-parts/section', 'book' ); ?>

  <?php get_template_part( 'template-parts/section', 'testimonials' ); ?>

<?php
get_footer();
