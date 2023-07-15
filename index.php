<?php 

// I used for heder template

?>


<!DOCTYPE html>
<html lang="<?= language_attributes();?>" class="no-js">
<head>
    <meta charset="<?= bloginfo("charset");?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body class="<?php body_class();?>">
    
<div class="container">
  <div class="row align-items-center">
    <div class="col-3">
      <img src="<?= get_theme_mod('loego_area');?>">
    </div>
    <div class="col-9">
      <div class="manubar">
        <?php wp_nav_menu(array(
          'theme_location' => 'primary_manue',
          'menu_id' => 'nav'
          ))?>
      </div>
    </div>
  </div>
</div>


<?php wp_footer()?>
</body>
</html>