<?php 
          // if(have_posts()) : 
          //   while(have_posts( )) : the_post()
          if(have_posts()) {
            while(have_posts()){
              the_post();
        ?> 
          <div class="blog_info p-4">
              <div class="tumbnail">
                <?= the_post_thumbnail('post-thumbnails');?>
                <div class="title">
                <h1> <a href="<?= the_permalink();?>"><?= the_title();?> </a> </h1>
                <p> <?= the_content();?></p>
                <a href="<?= get_permalink($post->ID)?>" class="btn btn-primary" >Read More</a>
                </div>
              </div>

          </div>
          <?php 
            }
          }
          else {
            _e('No posts');
          }
            // endwhile;
            // else :
            //   _e('no posts');
            // endif;
          ?>