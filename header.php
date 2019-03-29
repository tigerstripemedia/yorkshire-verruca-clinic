<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yorkshire_Verruca_Clinic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<!-- Font -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  
  <?php
    // Custom Fields
    $phone_number_one  = get_field('phone_number_one', 'option');
    $phone_number_two  = get_field('phone_number_two', 'option');
    $email_address  = get_field('email_address', 'option');
  ?>
  
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yorkshire-verruca-clinic' ); ?></a>

	<!-- Header -->
    <header>
      <div id="header">
   		<nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container">
            <a class="navbar-brand mx-auto mx-md-0" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.svg"></img></a>

            <div class="mx-auto mt-3 mx-md-0 mt-md-0 ml-md-auto">
              <div class="header-contact">
                <h5 class="colour-1">Book a treatment today:</h5>
                <h4 class="colour-2"><a href="tel:+44<?php echo $phone_number_one; ?>">0<?php echo $phone_number_one; ?></a><?php if($phone_number_two) :?><span class="contact-separator"></span><a href="tel:+44<?php echo $phone_number_two; ?>">0<?php echo $phone_number_two; ?></a></h4><?php endif; ?>
                <h5 class="colour-2"><a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a></h5>
              </div>
            </div>
          </div>
        </nav>
        <div class="second-nav-wrapper">
          <nav id="second-nav" class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
              <button class="navbar-toggler navbar-custom-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
  		          <span class="icon-bar top-bar"></span>
  		          <span class="icon-bar middle-bar"></span>
  		          <span class="icon-bar bottom-bar"></span>
  		        </button>
              <div class="ml-auto mob-book-now-btn">
                <a href="#book" class="btn btn-secondary btn-lg scroll-link">Book Now</a>
              </div>
              <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav">
                  <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'menu_class'        => 'navbar-nav ml-auto',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker()
                  	) );
                  ?>
                </ul>
              </div>
              <div class="ml-auto book-now-btn">
                <a href="#book" class="btn btn-secondary btn-lg scroll-link">Book Now</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
