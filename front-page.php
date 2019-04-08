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
        <h1><?php echo $post->post_title; ?></h1>
        <br>
        <br>
      </div>
    </div>
  </div>
</div>
<body>
  <div class="wrapper">
   <div class="container_content">
        <div class="content_front">
          <?php
           the_content();
          ?>
        </div>
    </div>
  </div>
  <div class="container_img" style="background: url('<?php echo get_template_directory_uri().'/img/wallpaper.jpg' ?>') no-repeat center top; background-size: cover">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="item active centered">
        <div class="container_img">
          <div class="center">
            <h1>Programi</h1>
          </div>
          <div class="overlay">
            <div class="text"><?php echo do_shortcode("[programi_arhiva]"); ?></div>
          </div>
        </div>
      </div>
      <div class="item centered">                
        <div class="container_img">
          <div class="center">
            <h1>Instrukori</h1>
          </div>
          <div class="overlay">
            <div class="text"><?php echo do_shortcode("[instruktori_arhiva]"); ?></div>
          </div>
        </div>
      </div>
      </div>
      <br>
      <br>
      <br>
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      </ol>
    </div>
  </div>
<?php
  get_footer();
?>