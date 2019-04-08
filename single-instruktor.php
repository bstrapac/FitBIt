<?php
  get_header();
?>
<?php
  if ( have_posts() )
  {
    the_post();
  }
  $front_url = get_site_url();
  $logo_url = get_template_directory_uri() . '/img/logo.png';
?>
  <div class="headempty">
    <div class="header">
      <div class="logo">
        <a href=" <?php echo $front_url ?>"><img src="<?php echo $logo_url ?>"></a>
        <?php echo do_shortcode("[icons]"); ?>
      </div>
      <div class="title">
        <h3><?php echo $post->post_title; ?></h3>
      </div>     
    </div>
  </div>
  <div class="wrapper"> 
    <div class="container_single">
      <div class="thumbnail_instruktor">
        <div class="thumbnail_box_instruktor_single" style=" background-image: url(<?php echo get_the_post_thumbnail_url($post->ID) ?>);"></div>
      </div>
      <div class="content_instruktor">
        <?php
          the_content();
        ?> 
      </div> 
      <div class="info_instruktor">
        <?php 
          echo html_info_instruktor($post->ID) 
        ?>                
    </div>
    </div>  
    <div class="container_archive">
      <?php 
        echo html_programi_instruktora($post->ID) 
      ?>                
    </div>
    
    <br>
    <br>
    <div class="sidebar">
      <hr>
      <div class="left"> 
        <?php
          dynamic_sidebar( 'footer_left' );
        ?> 
      </div>
      <div class="middle">
        <?php
          dynamic_sidebar( 'footer_middle' );
        ?>
      </div> 
      <div class="right">
        <?php
          dynamic_sidebar( 'footer_right' );
          echo do_shortcode("[icons]");  
        ?>
      </div>
  </div>
</div>          
<?php
  get_footer();
?>

