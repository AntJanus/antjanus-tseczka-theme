<footer class="footer">
  <div class="container">
    <div id="inner-footer" class="row">
      <div class="col-4" id="footer-intro">
        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-intro') ) : else : ?>

            <?php endif; ?>
      </div>
      <div class="col-4 " id="footer-mid">
        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-mid') ) : else : ?>

            <?php endif; ?>
      </div>
      <div class="col-4 last " id="footer-end">

              <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('footer-end') ) : else : ?>

            <?php endif; ?>
      </div>
    </div>
  </div>
</footer>
