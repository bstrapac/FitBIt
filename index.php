<?php
  get_header();
?>
<?php
if ( have_posts() )
{
    the_post();
}
$sUrlLogotip = get_template_directory_uri() . '/img/logo.png';
$sUrlNaslovnica = get_site_url();
?>
 <div id="headerwrap">
    <div class="container">
      <div class="logo">
        <a href=" <?php echo $sUrlNaslovnica ?>"><img src="<?php echo $sUrlLogotip ?>"></a>
      </div>
      <br>
      <div class="row">
        <h1>FitBit</h1>
        <br>
        <h3>Hello, I'm Carlos. I love design.</h3>
        <br>
        <br>
        <div class="col-lg-6 col-lg-offset-3">
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->

<section id="about" name="about"></section>
  <div id="f">
    <div class="container">
      <div class="row">
        <h3><?php echo $post->post_title; ?></h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        <!-- INTRO INFORMATIO-->
        <div class="col-lg-6 col-lg-offset-3">
              <?php
                the_content();
              ?>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /f -->             
              

<section id="portfolio" name="portfolio"></section>
  <div id="f">
    <div class="container">
      <div class="row centered">
        <h3>PROGRAMI</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        <div class="col-lg-6 col-lg-offset-3">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active centered">
                <img class="img-responsive" src=" <?php echo get_template_directory_uri().'/img/c1.png'; ?>" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="<?php echo get_template_directory_uri().'/img/c2.png'; ?>" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="<?php echo get_template_directory_uri().'/img/c3.png'; ?>" alt="">
              </div>
            </div>
            <br>
            <br>
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
        <!-- col-lg-8 -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- f -->
<?php
get_footer();
?>