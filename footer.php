<div class="full-container">

<footer>

  <div class="page-container">

    <!-- SOCIAL MEDIA ICONS -->

    <div class="social-widget">
      <?php if ( ! dynamic_sidebar( 'social-icons') ): ?>
        <p>Add your social media icons here by going to Appearance > Widgets and dragging the "Social Icons" widget to the Social Icons widget area.</p>
      <?php endif; ?>
    </div>

        <!-- 4 FOOTER WIDGET AREAS -->

        <div class="section group">
          <div class="col span_3_of_12">
            <?php if ( ! dynamic_sidebar( 'footer-1') ): ?>
              <h3>Footer Setup</h3>
              <p>Add widgets to this footer section by going to Appearance > Widgets and adding widgets to the "Footer 1" section.</p>
            <?php endif; ?>
          </div>

          <div class="col span_3_of_12">
            <?php if ( ! dynamic_sidebar( 'footer-2') ): ?>
              <h3>Footer Setup</h3>
              <p>Add widgets to this footer section by going to Appearance > Widgets and adding widgets to the "Footer 2" section.</p>
            <?php endif; ?>
          </div>

          <div class="col span_3_of_12">
            <?php if ( ! dynamic_sidebar( 'footer-3') ): ?>
              <h3>Footer Setup</h3>
              <p>Add widgets to this footer section by going to Appearance > Widgets and adding widgets to the "Footer 3" section.</p>
            <?php endif; ?>
          </div>

          <div class="col span_3_of_12">
            <?php if ( ! dynamic_sidebar( 'footer-4') ): ?>
              <h3>Footer Setup</h3>
              <p>Add widgets to this footer section by going to Appearance > Widgets and adding widgets to the "Footer 4" section..</p>
            <?php endif; ?>
          </div>
      
      </div>
    </div>
</footer>

  <!-- BOTTOM STRIP -->

  <div class="footer-strip">
    <div class="page-container">
      <span id="copyright">&copy; <?php echo date ('Y') ?> <?php bloginfo('name'); ?> &nbsp; &bull; &nbsp; Sell Your Thing Theme by <a href="https://www.zenwebthemes.com/">ZenWebThemes.com</a></span>
    </div>
  </div>

</div><!-- end of full container -->

<?php wp_footer(); ?>

</body>
</html>