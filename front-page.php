<?php get_header(); ?>

<!-- LARGE INTRODUCTION -->

<div class="full-container">

  <div class="home-overlay">

    <div class="intro-background">
      <?php if( get_theme_mod( 'sellthing_bg_photo' ) != "" ): ?>
        <img src="<?php echo get_theme_mod( 'sellthing_bg_photo' ); ?>">
      <?php endif; ?>
    </div>

    <div class="home-text-overlay">

        <div class="section group">

          <div class="col span_6_of_12">
            <div id="main-image">
              <?php if( get_theme_mod( 'sellthing_product_photo' ) != "" ): ?>
                <img src="<?php echo get_theme_mod( 'sellthing_product_photo' ); ?>">
              <?php endif; ?>
            </div>
          </div>

          <div class="col span_6_of_12">
            <?php if( get_theme_mod( 'sellthing_headline_text' ) != "" ): ?>
              <p id="main-headline"><?php echo get_theme_mod( 'sellthing_headline_text' ); ?></p>
            <?php endif; ?>

            <?php if( get_theme_mod( 'sellthing_subheadline_text' ) != "" ): ?>
              <p id="main-subheadline"><?php echo get_theme_mod( 'sellthing_subheadline_text' ); ?></p>
            <?php endif; ?>

            <?php if( get_theme_mod( 'sellthing_button_text' ) != "" ): ?>
              <a href="<?php echo get_theme_mod( 'sellthing_button_link' ); ?>"><button id="main-button"><?php echo get_theme_mod( 'sellthing_button_text' ); ?></button></a>
            <?php endif; ?>
          </div>

        </div>
    </div>

  </div><!-- end of home overlay -->

</div><!-- end of full container -->

<!-- FEATURES -->

<div class="page-container">
  <div class="features">

  <?php if( get_theme_mod( 'sellthing_features_headline' ) != "" ): ?>
    <h2><?php echo get_theme_mod( 'sellthing_features_headline' ); ?></h2>
  <?php endif; ?>

  <?php if( get_theme_mod( 'sellthing_features_subheadline' ) != "" ): ?>
    <h3><?php echo get_theme_mod( 'sellthing_features_subheadline' ); ?></h3>
  <?php endif; ?>

    <div class="section group">
      <div class="col span_5_of_12">
        <?php if( get_theme_mod( 'sellthing_features_img' ) != "" ): ?>
          <img src="<?php echo get_theme_mod( 'sellthing_features_img' ); ?>">
        <?php endif; ?>
      </div>
      <div class="col span_7_of_12">
        <!-- feature 1 -->
        <?php if( get_theme_mod( 'sellthing_feature1_title' ) != "" ): ?>
          <i id="ficon1" class="<?php echo get_theme_mod( 'sellthing_feature1_icon' ); ?>" aria-hidden="true"></i>
          <p id="ftitle1" class="feature-title"><?php echo get_theme_mod( 'sellthing_feature1_title' ); ?></p>
          <p id="ftext1" class="feature-text"><?php echo get_theme_mod( 'sellthing_feature1_text' ); ?></p>
        <?php endif; ?>
        <!-- feature 2 -->
        <?php if( get_theme_mod( 'sellthing_feature2_title' ) != "" ): ?>
          <i id="ficon2" class="<?php echo get_theme_mod( 'sellthing_feature2_icon' ); ?>" aria-hidden="true"></i>
          <p id="ftitle2" class="feature-title"><?php echo get_theme_mod( 'sellthing_feature2_title' ); ?></p>
          <p id="ftext2" class="feature-text"><?php echo get_theme_mod( 'sellthing_feature2_text' ); ?></p>
        <?php endif; ?>
        <!-- feature 3 -->
        <?php if( get_theme_mod( 'sellthing_feature3_title' ) != "" ): ?>
          <i id="ficon3" class="<?php echo get_theme_mod( 'sellthing_feature3_icon' ); ?>" aria-hidden="true"></i>
          <p id="ftitle3" class="feature-title"><?php echo get_theme_mod( 'sellthing_feature3_title' ); ?></p>
          <p id="ftext3" class="feature-text"><?php echo get_theme_mod( 'sellthing_feature3_text' ); ?></p>
        <?php endif; ?>
        <!-- feature 4 -->
        <?php if( get_theme_mod( 'sellthing_feature4_title' ) != "" ): ?>
          <i id="ficon4" class="<?php echo get_theme_mod( 'sellthing_feature4_icon' ); ?>" aria-hidden="true"></i>
          <p id="ftitle4" class="feature-title"><?php echo get_theme_mod( 'sellthing_feature4_title' ); ?></p>
          <p id="ftext4" class="feature-text"><?php echo get_theme_mod( 'sellthing_feature4_text' ); ?></p>
        <?php endif; ?>                
      </div>
    </div>

  </div>
</div><!-- end of page container -->

<!-- CALL TO ACTION BAR -->

<div class="full-container gray">
  <div class="ctabar">
    <?php if( get_theme_mod( 'sellthing_cta_bar_headline' ) != "" ): ?>
      <h2><?php echo get_theme_mod( 'sellthing_cta_bar_headline' ); ?></h2>
    <?php endif; ?>
    <?php if( get_theme_mod( 'sellthing_cta_bar_text' ) != "" ): ?>
      <h3><?php echo get_theme_mod( 'sellthing_cta_bar_text' ); ?></h3>
    <?php endif; ?>
    <a href="<?php echo get_theme_mod( 'sellthing_cta_bar_link' ); ?>"><button><?php echo get_theme_mod( 'sellthing_cta_bar_button' ); ?></button></a>
  </div>
</div><!-- end of full container -->

<!-- SCREENSHOTS -->

<div class="page-container">
  <div class="screenshots">

    <?php if( get_theme_mod( 'sellthing_screenshots_headline' ) != "" ): ?>
      <h2><?php echo get_theme_mod( 'sellthing_screenshots_headline' ); ?></h2>
    <?php endif; ?>

    <div class="section group">

      <div class="col span_4_of_12">
        <?php if( get_theme_mod( 'sellthing_screenshots_img1' ) != "" ): ?>
          <img id="screenshot1" src="<?php echo get_theme_mod( 'sellthing_screenshots_img1' ); ?>">
        <?php endif; ?>
        <?php if( get_theme_mod( 'sellthing_screenshots_title1' ) != "" ): ?>
          <p id="scrn-title1" class="screenshots-title"><?php echo get_theme_mod( 'sellthing_screenshots_title1' ); ?></p>
        <?php endif; ?>
        <?php if( get_theme_mod( 'sellthing_screenshots_text1' ) != "" ): ?>
          <p id="scrn-text1"><?php echo get_theme_mod( 'sellthing_screenshots_text1' ); ?></p>
        <?php endif; ?>
      </div>

      <div class="col span_4_of_12">
        <?php if( get_theme_mod( 'sellthing_screenshots_img2' ) != "" ): ?>
          <img id="screenshot2" src="<?php echo get_theme_mod( 'sellthing_screenshots_img2' ); ?>">
        <?php endif; ?>
        <?php if( get_theme_mod( 'sellthing_screenshots_title2' ) != "" ): ?>
          <p id="scrn-title2" class="screenshots-title"><?php echo get_theme_mod( 'sellthing_screenshots_title2' ); ?></p>
        <?php endif; ?>
        <?php if( get_theme_mod( 'sellthing_screenshots_text2' ) != "" ): ?>
          <p id="scrn-text2"><?php echo get_theme_mod( 'sellthing_screenshots_text2' ); ?></p>
        <?php endif; ?>
      </div>

      <div class="col span_4_of_12">
        <?php if( get_theme_mod( 'sellthing_screenshots_img3' ) != "" ): ?>
          <img id="screenshot3" src="<?php echo get_theme_mod( 'sellthing_screenshots_img3' ); ?>">
        <?php endif; ?>
        <?php if( get_theme_mod( 'sellthing_screenshots_title3' ) != "" ): ?>
          <p id="scrn-title3" class="screenshots-title"><?php echo get_theme_mod( 'sellthing_screenshots_title3' ); ?></p>
        <?php endif; ?>
        <?php if( get_theme_mod( 'sellthing_screenshots_text3' ) != "" ): ?>
          <p id="scrn-text3"><?php echo get_theme_mod( 'sellthing_screenshots_text3' ); ?></p>
        <?php endif; ?>
      </div>

    </div>
  </div>
</div><!-- end of page container -->

<!-- 4 ICONS ACROSS -->

<div class="full-container gray">
  <div class="page-container">
    <div class="four-icons">

      <?php if( get_theme_mod( 'sellthing_4across_headline' ) != "" ): ?>
        <h2><?php echo get_theme_mod( 'sellthing_4across_headline' ); ?></h2>
      <?php endif; ?>

      <?php if( get_theme_mod( 'sellthing_4across_subheadline' ) != "" ): ?>
        <h3><?php echo get_theme_mod( 'sellthing_4across_subheadline' ); ?></h3>
      <?php endif; ?>

      <div class="section group">

        <div class="col span_3_of_12">
          <?php if( get_theme_mod( 'sellthing_4across_title1' ) != "" ): ?>
            <p class="four-icons-icon"><i id="four-icon1" class="<?php echo get_theme_mod( 'sellthing_4across_icon1' ); ?>"></i></p>
            <p id="four-title1" class="four-icons-title"><?php echo get_theme_mod( 'sellthing_4across_title1' ); ?></p>
          <?php endif; ?>
          <?php if( get_theme_mod( 'sellthing_4across_text1' ) != "" ): ?>
            <p id="four-text1" class="four-icons-text"><?php echo get_theme_mod( 'sellthing_4across_text1' ); ?></p>
          <?php endif; ?>
        </div>

        <div class="col span_3_of_12">
          <?php if( get_theme_mod( 'sellthing_4across_title2' ) != "" ): ?>
            <p class="four-icons-icon"><i id="four-icon2" class="<?php echo get_theme_mod( 'sellthing_4across_icon2' ); ?>"></i></p>
            <p id="four-title2" class="four-icons-title"><?php echo get_theme_mod( 'sellthing_4across_title2' ); ?></p>
          <?php endif; ?>
          <?php if( get_theme_mod( 'sellthing_4across_text2' ) != "" ): ?>
            <p id="four-text2" class="four-icons-text"><?php echo get_theme_mod( 'sellthing_4across_text2' ); ?></p>
          <?php endif; ?>
        </div>

        <div class="col span_3_of_12">
          <?php if( get_theme_mod( 'sellthing_4across_title3' ) != "" ): ?>
            <p class="four-icons-icon"><i id="four-icon3" class="<?php echo get_theme_mod( 'sellthing_4across_icon3' ); ?>"></i></p>
            <p id="four-title3" class="four-icons-title"><?php echo get_theme_mod( 'sellthing_4across_title3' ); ?></p>
          <?php endif; ?>
          <?php if( get_theme_mod( 'sellthing_4across_text3' ) != "" ): ?>
            <p id="four-text3" class="four-icons-text"><?php echo get_theme_mod( 'sellthing_4across_text3' ); ?></p>
          <?php endif; ?>
        </div>

        <div class="col span_3_of_12">
          <?php if( get_theme_mod( 'sellthing_4across_title4' ) != "" ): ?>
            <p class="four-icons-icon"><i id="four-icon4" class="<?php echo get_theme_mod( 'sellthing_4across_icon4' ); ?>"></i></p>
            <p id="four-title4" class="four-icons-title"><?php echo get_theme_mod( 'sellthing_4across_title4' ); ?></p>
          <?php endif; ?>
          <?php if( get_theme_mod( 'sellthing_4across_text4' ) != "" ): ?>
            <p id="four-text4" class="four-icons-text"><?php echo get_theme_mod( 'sellthing_4across_text4' ); ?></p>
          <?php endif; ?>
        </div>

      </div>

    </div>
  </div><!-- end of page container -->
</div><!-- end of full container -->

<!-- REVIEWS -->

<div class="page-container">

  <div class="reviews">

    <?php if( get_theme_mod( 'sellthing_reviews_headline' ) != "" ): ?>
      <h2><?php echo get_theme_mod( 'sellthing_reviews_headline' ); ?></h2>
    <?php endif; ?>

    <?php if( get_theme_mod( 'sellthing_reviews_subheadline' ) != "" ): ?>
      <h3><?php echo get_theme_mod( 'sellthing_reviews_subheadline' ); ?></h3>
    <?php endif; ?>

    <div class="section group">

      <div class="col span_6_of_12">
        <?php if( get_theme_mod( 'sellthing_review1_text' ) != "" ): ?>
          <img id="rev-img1" src="<?php echo get_theme_mod( 'sellthing_reviews_img1' ); ?>">
          <p id="rev-text1"><?php echo get_theme_mod( 'sellthing_review1_text' ); ?></p>
          <p id="rev-by1"><?php echo get_theme_mod( 'sellthing_review1_byline' ); ?></p>
        <?php endif; ?>
      </div>
        
      <div class="col span_6_of_12">
        <?php if( get_theme_mod( 'sellthing_review3_text' ) != "" ): ?>
          <img id="rev-img3" src="<?php echo get_theme_mod( 'sellthing_reviews_img3' ); ?>">
          <p id="rev-text3"><?php echo get_theme_mod( 'sellthing_review3_text' ); ?></p>
          <p id="rev-by3"><?php echo get_theme_mod( 'sellthing_review3_byline' ); ?></p>
        <?php endif; ?>
      </div>

      </div>

      <div class="section group">

        <div class="col span_6_of_12">
          <?php if( get_theme_mod( 'sellthing_review2_text' ) != "" ): ?>
            <img id="rev-img2" src="<?php echo get_theme_mod( 'sellthing_reviews_img2' ); ?>">
            <p id="rev-text2"><?php echo get_theme_mod( 'sellthing_review2_text' ); ?></p>
            <p id="rev-by2"><?php echo get_theme_mod( 'sellthing_review2_byline' ); ?></p>
          <?php endif; ?>
        </div>

        <div class="col span_6_of_12">
          <?php if( get_theme_mod( 'sellthing_review4_text' ) != "" ): ?>
          <img id="rev-img4" src="<?php echo get_theme_mod( 'sellthing_reviews_img4' ); ?>">
          <p id="rev-text4"><?php echo get_theme_mod( 'sellthing_review4_text' ); ?></p>
          <p id="rev-by4"><?php echo get_theme_mod( 'sellthing_review4_byline' ); ?></p>
        <?php endif; ?>
        </div>

      </div>
      
    </div>

  </div>

</div><!-- end of page container -->

<?php get_footer(); ?>