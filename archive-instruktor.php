<?php
  get_header();
?>
<?php
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
        <h1>TEAM</h1>
        <br>
        <h3>Kako bi Vam pružili najbolje iskustvo i pomogli pri postizanju najboljih rezultata nudimo Vam asistencije najboljih instruktora.</h3>
        <br>
        <br>
      </div>
    </div>
  </div>
  <div class="wrapper">    
    <div class="container_archive">           
      <?php
         echo do_shortcode("[instruktori]");
      ?>                 
    </div>
  </div> 
<?php
  get_footer();
?>
