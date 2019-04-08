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
    <div class="container_content">
        <div class="content">
          <?php
           the_content();
          ?>
        </div>
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