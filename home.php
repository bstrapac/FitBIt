<?php
  get_header();
?>
<?php
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
       <h3>News</h3>
    </div>
  </div>
</div>
<div class="wrapper">
  <div class="container_blog">
    <?php
      if ( have_posts() )
      {
        while ( have_posts() )
        {
          the_post();
          $content = get_post_field('post_content', $recent["ID"]);
          $content = strip_tags($content);
          echo 
          '<div class="blog_archive">
            <h3 class="blog_title"><a href="'.$post->guid.'">'.$post->post_title.'</a></h3>
            <div class="blog_content">'.substr($content, 0, 250).'...</div>
          </div>'; 
        }
      }
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