<?php 

// I used for heder template
get_header();

?>



<div class="container my-5">
  <div class="row">
    <div class="col-md-9">


         <?php 
          // if(have_posts()) : 
          //   while(have_posts( )) : the_post()
          if(have_posts()) {
            while(have_posts()){
              the_post()
        
        ?> 
          <div class="blog_info">
              <?= the_content();?>
          </div>
          <?php 

            }
          }
          else {
            _e('no posts');
          }

            // endwhile;
            // else :
            //   _e('no posts');
            // endif;
          ?>
     
    </div>
    <div class="col-md-3">
          <h4>thid is side bar </h4>
    </div>
  </div>
</div>

<?php
  get_footer();

?>