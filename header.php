
<!DOCTYPE html>
<html lang="<?= language_attributes();?>" class="no-js">
<head>
    <meta charset="<?= bloginfo("charset");?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body class="<?php body_class();?>">
    
<div class="<?= get_theme_mod('chang_positon');?>" id="hder_section">
  <div class="row align-items-center">
    <div class="col-3">
    <!-- ---------- call kora hoyche dynamic logo control and register----------- -->
     <div class="logo">
     <a href="<?= home_url();?>"><img src="<?= get_theme_mod('loego_area');?>"></a>
     </div>
    </div>
    <div class="col-9">
      <div class="manubar">
        <!-- ----------- register manue call kora hoyche---------- -->
        <?php wp_nav_menu(array(
          'theme_location' => 'primary_manue',
          'menu_id' => 'nav'
          ))?>
      </div>
    </div>
  </div>
</div>