<section id="footer-copyright">
      <div class="container" id="footer">
          <div class="row">
            <div class="col-md-4">
              <?= dynamic_sidebar('footer-1')?>
            </div>
            <div class="col-md-4">
            <?= dynamic_sidebar('footer-2')?>
            </div>
            <div class="col-md-4">
            <?= dynamic_sidebar('footer-3')?>
            </div>
          </div>
      </div>
          <section class="footer-section">
            <div class="row">
              <div class="col-md-12">
                <?= get_theme_mod('torikul_fotter_setting');?>
              </div>
          </div>
          </section>
</section>
<?php wp_footer()?>
</body>
</html>