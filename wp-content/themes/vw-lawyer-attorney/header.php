<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Lawyer Attorney
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-lawyer-attorney'); ?></a></div>  
  <div class="topbar">
    <div class="container">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="logo">        
          <?php if( has_custom_logo() ){ vw_lawyer_attorney_the_custom_logo();
             }else{ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?> 
              <p class="site-description"><?php echo esc_html($description); ?></p>       
          <?php endif; }?>
        </div>
      </div>
      <div class="contact">
        <div class="col-md-8 col-sm-8">
          <div class="col-md-4 col-sm-4">
            <?php if( get_theme_mod( 'vw_lawyer_attorney_call','' ) != '') { ?>
              <div class="col-md-3 col-sm-3">
                <img src="<?php echo esc_attr( get_template_directory_uri()) ?>/images/icon2.png" alt="">
              </div>
              <div class="col-md-9 col-sm-9">
                <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_lawyer_attorney_call','') ); ?></p>
                <p><?php echo esc_html( get_theme_mod('vw_lawyer_attorney_call1','') ); ?></p>         
              </div>
            <?php }?>
          </div>
          <div class="col-md-4 col-sm-4">
            <?php if( get_theme_mod( 'vw_lawyer_attorney_location','' ) != '') { ?>
              <div class="col-md-3 col-sm-3">
                <img src="<?php echo esc_attr( get_template_directory_uri() ) ?>/images/icon1.png" alt="">
              </div>
              <div class="col-md-9 col-sm-9">              
                <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_lawyer_attorney_location','') ); ?></p>
                <p><?php echo esc_html( get_theme_mod('vw_lawyer_attorney_location1','') ); ?></p>             
              </div>
            <?php }?>
          </div>
          <div class="col-md-4 col-sm-4">
            <?php if( get_theme_mod( 'vw_lawyer_attorney_time','' ) != '') { ?>
              <div class="col-md-3 col-sm-3">
                <img src="<?php echo esc_attr( get_template_directory_uri() ) ?>/images/icon3.png" alt="">
              </div>
              <div class="col-md-9 col-sm-9">            
                <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_lawyer_attorney_time','') ); ?></p>
                <p><?php echo esc_html( get_theme_mod('vw_lawyer_attorney_time1','') ); ?></p>        
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
  <div id="header">
    <div class="menubox">
      <div class="container">
        <div class="nav">
          <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>