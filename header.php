<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <?php wp_head(); ?>
  </head>
  <body  data-spy="scroll" data-offset="0" data-target="#theMenu">
    <nav class="menu" id="theMenu">                 
      <?php
        $args = array(
          'theme_location'  =>  'primary',
          'menu_id'         =>  'menu',
          'menu_class'      =>  'menu-wrap',
          'container'       =>  'div',
        );
        wp_nav_menu( $args );
      ?>
      <div id="menuToggle"><i class="fa fa-bars"></i></div>
    </nav>

