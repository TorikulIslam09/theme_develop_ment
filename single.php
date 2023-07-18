<?php 

// I used for heder template
get_header();

?>

<div class="container my-5" id="blogpost">
  <div class="row">
    <div class="col-md-9">
    <?php get_template_part('template_part/post_setup');?>
    </div>
    <div class="col-md-3">
      <div class="sibdebar">
        <?= get_sidebar();?>
      </div>
    </div>
  </div>
</div>

<?php
  get_footer();

?>