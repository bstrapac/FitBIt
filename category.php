<?php
  get_header();
?>
<?php
$front_url = get_site_url();
$logo_url = get_template_directory_uri() . '/img/logo.png';
?>
<div id="headempty">
  <div class="container">
    <div class="logo">
      <a href=" <?php echo $front_url ?>"><img src="<?php echo $logo_url ?>"></a>
    </div>
    <hr>
  </div>
</div>
<div id="f">
  <div class="containerArch">  
    <?php
      if ( have_posts())
      {
        while ( have_posts())
        {
          the_post();
          echo 
          '<div class="box">
            <a href="'.$post->guid.'">
              <div class="thumbnail_box" style="background-image: url('.get_the_post_thumbnail_url($post->ID).')"></div>
            </a>
            <h3><a href="'.$post->guid.'">'.$post->post_title.'</a></h3>
          </div>'; 
        }
      }
    ?>
  </div> 
  <hr>
</div> 
<div class="sidebar">
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
    ?>
  </div>
</div>    
<?php
  get_footer();
?>