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
  <div class="headerwrap">
    <div class="header">
      <div class="logo_archive">
        <a href=" <?php echo $front_url ?>"><img src="<?php echo $logo_url ?>"></a>
      </div>
      <br>
      <div class="row">
        <h1>PROGRAMI</h1>
      </div>
    </div>
  </div>
  <div class="wrapper">    
    <div class="container_archive">           
      <?php
        echo do_shortcode("[programi]");
      ?> 
    </div>
  </div> 
<?php
  get_footer();
?>