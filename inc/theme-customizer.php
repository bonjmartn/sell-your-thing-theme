<?php

function sellthing_customize_register( $wp_customize ) {

  // Customize title and tagline sections and labels

  $wp_customize->get_section('title_tagline')->title = __('Site Name and Description', 'sell-your-thing');  
  $wp_customize->get_control('display_header_text')->section = 'title_tagline'; 
  $wp_customize->get_control('blogname')->label = __('Site Name', 'sell-your-thing');  
  $wp_customize->get_control('blogdescription')->label = __('Site Description', 'sell-your-thing');  
  $wp_customize->get_setting('blogname')->transport = 'postMessage';
  $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';

  // Customize the Front Page Settings

  $wp_customize->get_section('static_front_page')->title = __('Home and Blog Pages', 'sell-your-thing');
  $wp_customize->get_section('static_front_page')->priority = 20;
  $wp_customize->get_control('show_on_front')->label = __('Choose Homepage Preference', 'sell-your-thing');  
  $wp_customize->get_control('page_on_front')->label = __('Select Homepage', 'sell-your-thing');  
  $wp_customize->get_control('page_for_posts')->label = __('Select Blog Homepage', 'sell-your-thing');  

  // Customize Background Settings

  $wp_customize->get_section('background_image')->title = __('Background Styles', 'sell-your-thing');  
  $wp_customize->get_control('background_color')->section = 'background_image'; 

  // Remove some panels and sections

  $wp_customize->remove_control('background_color');
  $wp_customize->remove_control('header_image');
  $wp_customize->remove_section('colors');

  // Create custom panels

  $wp_customize->add_panel( 'general_settings', array(
      'priority' => 10,
      'theme_supports' => '',
      'title' => __( 'General Settings', 'sell-your-thing' ),
      'description' => __( 'Controls the basic settings for the theme.', 'sell-your-thing' ),
  ) );
  $wp_customize->add_panel( 'homepage_settings', array(
      'priority' => 20,
      'theme_supports' => '',
      'title' => __( 'Homepage Setup', 'sell-your-thing' ),
      'description' => __( 'Set up each section of the homepage.', 'sell-your-thing' ),
  ) ); 
  $wp_customize->add_panel( 'color_choices', array(
      'priority' => 30,
      'theme_supports' => '',
      'title' => __( 'Color Choices', 'sell-your-thing' ),
      'description' => __( 'Controls the color settings for the theme.', 'sell-your-thing' ),
  ) ); 
  $wp_customize->add_panel( 'typography_settings', array(
      'priority' => 40,
      'theme_supports' => '',
      'title' => __( 'Typography', 'sell-your-thing' ),
      'description' => __( 'Controls the fonts for the theme.', 'sell-your-thing' ),
  ) ); 

  // Assign sections to panels

  $wp_customize->get_section('title_tagline')->panel = 'general_settings';      
  $wp_customize->get_section('static_front_page')->panel = 'general_settings';
  $wp_customize->get_section('background_image')->panel = 'design_settings';
  $wp_customize->get_section('background_image')->priority = 1000;


// GENERAL SETTINGS PANEL ........................................ //

  // Add Custom Logo Settings

  $wp_customize->add_section( 'custom_logo' , array(
    'title'      => __('Change Your Logo','sell-your-thing'), 
    'panel'      => 'general_settings',
    'priority'   => 10    
  ) );  
  $wp_customize->add_setting(
      'sellthing_logo',
      array(
          'default'         => get_template_directory_uri() . '/images/sell-your-thing-logo.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_logo',
           array(
               'label'      => __( 'Change Logo', 'sell-your-thing' ),
               'section'    => 'custom_logo',
               'settings'   => 'sellthing_logo',
               'context'    => 'sellthing-custom-logo' 
           )
       )
   ); 

// HOMEPAGE SETUP PANEL ........................................ //

  // Main Headline Text

  $wp_customize->add_section( 'main_headline' , array(
    'title'      => __('Main Introduction Area','sell-your-thing'), 
    'panel'      => 'homepage_settings',
    'priority'   => 10   
  ) );  

  $wp_customize->add_setting(
      'sellthing_headline_text',
      array(
          'default'           => __( 'Main Headline Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_headline',
            array(
                'label'          => __( 'Main Headline Text', 'sell-your-thing' ),
                'section'        => 'main_headline',
                'settings'       => 'sellthing_headline_text',
                'type'           => 'text'
            )
        )
   );  

  // Main Sub Headline Text

  $wp_customize->add_setting(
      'sellthing_subheadline_text',
      array(
          'default'           => __( 'Main Sub Headline Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_subheadline',
            array(
                'label'          => __( 'Main Sub Headline Text', 'sell-your-thing' ),
                'section'        => 'main_headline',
                'settings'       => 'sellthing_subheadline_text',
                'type'           => 'text'
            )
        )
   );

  // Main Product Image

  $wp_customize->add_setting(
      'sellthing_product_photo',
      array(
          'default'         => get_template_directory_uri() . '/images/sell-your-thing-front.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_product',
           array(
               'label'      => __( 'Main Product Image', 'sell-your-thing' ),
               'section'    => 'main_headline',
               'settings'   => 'sellthing_product_photo',
               'context'    => 'sellthing-product-photo' 
           )
       )
   ); 

  // Main Button Text

  $wp_customize->add_setting(
      'sellthing_button_text',
      array(
          'default'           => __( 'Button Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Control(
           $wp_customize,
           'custom_button_text',
           array(
               'label'      => __( 'Main Button Text', 'sell-your-thing' ),
               'section'    => 'main_headline',
               'settings'   => 'sellthing_button_text',
               'type'       => 'text'
           )
       )
   ); 

  // Main Button Link

  $wp_customize->add_setting(
      'sellthing_button_link',
      array(
          'default'           => __( '#', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Control(
           $wp_customize,
           'custom_button_link',
           array(
               'label'      => __( 'Main Button Link', 'sell-your-thing' ),
               'section'    => 'main_headline',
               'settings'   => 'sellthing_button_link',
               'type'       => 'text'
           )
       )
   ); 

  // Main Background Image

  $wp_customize->add_setting(
      'sellthing_bg_photo',
      array(
          'default'         => get_template_directory_uri() . '/images/background.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_bg',
           array(
               'label'      => __( 'Main Background Image', 'sell-your-thing' ),
               'section'    => 'main_headline',
               'settings'   => 'sellthing_bg_photo',
               'context'    => 'sellthing-bg-photo' 
           )
       )
   ); 

  // Features Headline Text

  $wp_customize->add_section( 'features_headline' , array(
    'title'      => __('Features Area','sell-your-thing'), 
    'panel'      => 'homepage_settings',
    'priority'   => 20   
  ) );  

  $wp_customize->add_setting(
      'sellthing_features_headline',
      array(
          'default'           => __( 'Features Headline', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_features_headline',
            array(
                'label'          => __( 'Features Headline', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_features_headline',
                'type'           => 'text'
            )
        )
   ); 

  // Features Sub Headline Text

  $wp_customize->add_setting(
      'sellthing_features_subheadline',
      array(
          'default'           => __( 'Features Sub Headline', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_features_subheadline',
            array(
                'label'          => __( 'Features Sub Headline', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_features_subheadline',
                'type'           => 'text'
            )
        )
   ); 

  // Features Image

  $wp_customize->add_setting(
      'sellthing_features_img',
      array(
          'default'         => get_template_directory_uri() . '/images/product-features-dev.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_features_img',
           array(
               'label'      => __( 'Features Image', 'sell-your-thing' ),
               'section'    => 'features_headline',
               'settings'   => 'sellthing_features_img',
               'context'    => 'sellthing-features-img' 
           )
       )
   ); 

  // Feature 1 Icon

  $wp_customize->add_setting(
      'sellthing_feature1_icon',
      array(
          'default'           => __( 'fa fa-adjust', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature1_icon',
            array(
                'label'          => __( 'Feature 1 Icon (see documentation for help)', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature1_icon',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 1 Title

  $wp_customize->add_setting(
      'sellthing_feature1_title',
      array(
          'default'           => __( 'Feature 1 Title', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature1_title',
            array(
                'label'          => __( 'Feature 1 Title', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature1_title',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 1 Text

  $wp_customize->add_setting(
      'sellthing_feature1_text',
      array(
          'default'           => __( 'Feature 1 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature1_text',
            array(
                'label'          => __( 'Feature 1 Text', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature1_text',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 2 Icon

  $wp_customize->add_setting(
      'sellthing_feature2_icon',
      array(
          'default'           => __( 'fa fa-adjust', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature2_icon',
            array(
                'label'          => __( 'Feature 2 Icon (see documentation for help)', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature2_icon',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 2 Title

  $wp_customize->add_setting(
      'sellthing_feature2_title',
      array(
          'default'           => __( 'Feature 2 Title', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature2_title',
            array(
                'label'          => __( 'Feature 2 Title', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature2_title',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 2 Text

  $wp_customize->add_setting(
      'sellthing_feature2_text',
      array(
          'default'           => __( 'Feature 2 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature2_text',
            array(
                'label'          => __( 'Feature 2 Text', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature2_text',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 3 Icon

  $wp_customize->add_setting(
      'sellthing_feature3_icon',
      array(
          'default'           => __( 'fa fa-adjust', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature3_icon',
            array(
                'label'          => __( 'Feature 3 Icon (see documentation for help)', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature3_icon',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 3 Title

  $wp_customize->add_setting(
      'sellthing_feature3_title',
      array(
          'default'           => __( 'Feature 3 Title', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature3_title',
            array(
                'label'          => __( 'Feature 3 Title', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature3_title',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 3 Text

  $wp_customize->add_setting(
      'sellthing_feature3_text',
      array(
          'default'           => __( 'Feature 3 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature3_text',
            array(
                'label'          => __( 'Feature 3 Text', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature3_text',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 4 Icon

  $wp_customize->add_setting(
      'sellthing_feature4_icon',
      array(
          'default'           => __( 'fa fa-adjust', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature4_icon',
            array(
                'label'          => __( 'Feature 4 Icon (see documentation for help)', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature4_icon',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 4 Title

  $wp_customize->add_setting(
      'sellthing_feature4_title',
      array(
          'default'           => __( 'Feature 4 Title', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature4_title',
            array(
                'label'          => __( 'Feature 4 Title', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature4_title',
                'type'           => 'text'
            )
        )
   ); 

  // Feature 4 Text

  $wp_customize->add_setting(
      'sellthing_feature4_text',
      array(
          'default'           => __( 'Feature 4 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_feature4_text',
            array(
                'label'          => __( 'Feature 4 Text', 'sell-your-thing' ),
                'section'        => 'features_headline',
                'settings'       => 'sellthing_feature4_text',
                'type'           => 'text'
            )
        )
   ); 

  // Call to Action Bar Headline

  $wp_customize->add_section( 'cta_bar' , array(
    'title'      => __('Call to Action Bar','sell-your-thing'), 
    'panel'      => 'homepage_settings',
    'priority'   => 30   
  ) );  

  $wp_customize->add_setting(
      'sellthing_cta_bar_headline',
      array(
          'default'           => __( 'Call to Action Bar', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_ctabar_title',
            array(
                'label'          => __( 'Call to Action Bar Headline', 'sell-your-thing' ),
                'section'        => 'cta_bar',
                'settings'       => 'sellthing_cta_bar_headline',
                'type'           => 'text'
            )
        )
   ); 

  // Call to Action Bar Text

  $wp_customize->add_setting(
      'sellthing_cta_bar_text',
      array(
          'default'           => __( 'Text for the call to action bar', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_ctabar_text',
            array(
                'label'          => __( 'Call to Action Bar Text', 'sell-your-thing' ),
                'section'        => 'cta_bar',
                'settings'       => 'sellthing_cta_bar_text',
                'type'           => 'text'
            )
        )
   ); 

  // Call to Action Button Text

  $wp_customize->add_setting(
      'sellthing_cta_bar_button',
      array(
          'default'           => __( 'Button', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_ctabar_button',
            array(
                'label'          => __( 'Text for the button', 'sell-your-thing' ),
                'section'        => 'cta_bar',
                'settings'       => 'sellthing_cta_bar_button',
                'type'           => 'text'
            )
        )
   ); 

  // Call to Action Button Link

  $wp_customize->add_setting(
      'sellthing_cta_bar_link',
      array(
          'default'           => __( '#', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_ctabar_link',
            array(
                'label'          => __( 'Link for the button', 'sell-your-thing' ),
                'section'        => 'cta_bar',
                'settings'       => 'sellthing_cta_bar_link',
                'type'           => 'text'
            )
        )
   ); 

  // Screenshots Headline

  $wp_customize->add_section( 'screenshots' , array(
    'title'      => __('Screenshots Area','sell-your-thing'), 
    'panel'      => 'homepage_settings',
    'priority'   => 40   
  ) );  

  $wp_customize->add_setting(
      'sellthing_screenshots_headline',
      array(
          'default'           => __( 'Screenshots', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_screenshots_headline',
            array(
                'label'          => __( 'Screenshots Headline', 'sell-your-thing' ),
                'section'        => 'screenshots',
                'settings'       => 'sellthing_screenshots_headline',
                'type'           => 'text'
            )
        )
   );

  // Screenshot Image 1

  $wp_customize->add_setting(
      'sellthing_screenshots_img1',
      array(
          'default'         => get_template_directory_uri() . '/images/product-photo-dev.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_screenshots_img1',
           array(
               'label'      => __( 'Screenshot 1 Image', 'sell-your-thing' ),
               'section'    => 'screenshots',
               'settings'   => 'sellthing_screenshots_img1',
               'context'    => 'sellthing-screenshots-img1' 
           )
       )
   );

  // Screenshot Title 1

  $wp_customize->add_setting(
      'sellthing_screenshots_title1',
      array(
          'default'           => __( 'Screenshot 1 Title', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_screenshots_title1',
            array(
                'label'          => __( 'Screenshot 1 Title', 'sell-your-thing' ),
                'section'        => 'screenshots',
                'settings'       => 'sellthing_screenshots_title1',
                'type'           => 'text'
            )
        )
   );

  // Screenshot Text 1

  $wp_customize->add_setting(
      'sellthing_screenshots_text1',
      array(
          'default'           => __( 'Screenshot 1 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_screenshots_text1',
            array(
                'label'          => __( 'Screenshot 1 Text', 'sell-your-thing' ),
                'section'        => 'screenshots',
                'settings'       => 'sellthing_screenshots_text1',
                'type'           => 'text'
            )
        )
   );

  // Screenshot Image 2

  $wp_customize->add_setting(
      'sellthing_screenshots_img2',
      array(
          'default'         => get_template_directory_uri() . '/images/product-photo-dev.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_screenshots_img2',
           array(
               'label'      => __( 'Screenshot 2 Image', 'sell-your-thing' ),
               'section'    => 'screenshots',
               'settings'   => 'sellthing_screenshots_img2',
               'context'    => 'sellthing-screenshots-img2' 
           )
       )
   );

  // Screenshot Title 2

  $wp_customize->add_setting(
      'sellthing_screenshots_title2',
      array(
          'default'           => __( 'Screenshot 2 Title', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_screenshots_title2',
            array(
                'label'          => __( 'Screenshot 2 Title', 'sell-your-thing' ),
                'section'        => 'screenshots',
                'settings'       => 'sellthing_screenshots_title2',
                'type'           => 'text'
            )
        )
   );

  // Screenshot Text 2

  $wp_customize->add_setting(
      'sellthing_screenshots_text2',
      array(
          'default'           => __( 'Screenshot 2 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_screenshots_text2',
            array(
                'label'          => __( 'Screenshot 2 Text', 'sell-your-thing' ),
                'section'        => 'screenshots',
                'settings'       => 'sellthing_screenshots_text2',
                'type'           => 'text'
            )
        )
   );

  // Screenshot Image 3

  $wp_customize->add_setting(
      'sellthing_screenshots_img3',
      array(
          'default'         => get_template_directory_uri() . '/images/product-photo-dev.png',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_screenshots_img3',
           array(
               'label'      => __( 'Screenshot 3 Image', 'sell-your-thing' ),
               'section'    => 'screenshots',
               'settings'   => 'sellthing_screenshots_img3',
               'context'    => 'sellthing-screenshots-img3' 
           )
       )
   );

  // Screenshot Title 3

  $wp_customize->add_setting(
      'sellthing_screenshots_title3',
      array(
          'default'           => __( 'Screenshot 3 Title', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_screenshots_title3',
            array(
                'label'          => __( 'Screenshot 3 Title', 'sell-your-thing' ),
                'section'        => 'screenshots',
                'settings'       => 'sellthing_screenshots_title3',
                'type'           => 'text'
            )
        )
   );

  // Screenshot Text 3

  $wp_customize->add_setting(
      'sellthing_screenshots_text3',
      array(
          'default'           => __( 'Screenshot 3 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_screenshots_text3',
            array(
                'label'          => __( 'Screenshot 3 Text', 'sell-your-thing' ),
                'section'        => 'screenshots',
                'settings'       => 'sellthing_screenshots_text3',
                'type'           => 'text'
            )
        )
   );

  // 4 Across Headline Text

  $wp_customize->add_section( '4across_headline' , array(
    'title'      => __('4 Icons Across Area','sell-your-thing'), 
    'panel'      => 'homepage_settings',
    'priority'   => 50   
  ) );  

  $wp_customize->add_setting(
      'sellthing_4across_headline',
      array(
          'default'           => __( '4 Icons Across Headline', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_headline',
            array(
                'label'          => __( '4 Icons Across Headline', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_headline',
                'type'           => 'text'
            )
        )
   ); 

  // 4 Across Sub Headline Text

  $wp_customize->add_setting(
      'sellthing_4across_subheadline',
      array(
          'default'           => __( '4 Icons Across Sub Headline', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_subheadline',
            array(
                'label'          => __( '4 Icons Across Sub Headline', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_subheadline',
                'type'           => 'text'
            )
        )
   ); 

  // 4 Across Icon 1

  $wp_customize->add_setting(
      'sellthing_4across_icon1',
      array(
          'default'           => __( 'fa fa-adjust', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_icon1',
            array(
                'label'          => __( 'Icon 1', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_icon1',
                'type'           => 'text'
            )
        )
   ); 

  // 4 Across Title 1

  $wp_customize->add_setting(
      'sellthing_4across_title1',
      array(
          'default'           => __( 'Title 1', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_title1',
            array(
                'label'          => __( 'Title 1', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_title1',
                'type'           => 'text'
            )
        )
   );

  // 4 Across Text 1

  $wp_customize->add_setting(
      'sellthing_4across_text1',
      array(
          'default'           => __( 'Text 1', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_text1',
            array(
                'label'          => __( 'Text 1', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_text1',
                'type'           => 'text'
            )
        )
   );

  // 4 Across Icon 2

  $wp_customize->add_setting(
      'sellthing_4across_icon2',
      array(
          'default'           => __( 'fa fa-adjust', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_icon2',
            array(
                'label'          => __( 'Icon 2', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_icon2',
                'type'           => 'text'
            )
        )
   ); 

  // 4 Across Title 2

  $wp_customize->add_setting(
      'sellthing_4across_title2',
      array(
          'default'           => __( 'Title 2', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_title2',
            array(
                'label'          => __( 'Title 2', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_title2',
                'type'           => 'text'
            )
        )
   );

  // 4 Across Text 2

  $wp_customize->add_setting(
      'sellthing_4across_text2',
      array(
          'default'           => __( 'Text 2', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_text2',
            array(
                'label'          => __( 'Text 2', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_text2',
                'type'           => 'text'
            )
        )
   );

  // 4 Across Icon 3

  $wp_customize->add_setting(
      'sellthing_4across_icon3',
      array(
          'default'           => __( 'fa fa-adjust', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_icon3',
            array(
                'label'          => __( 'Icon 3', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_icon3',
                'type'           => 'text'
            )
        )
   ); 

  // 4 Across Title 3

  $wp_customize->add_setting(
      'sellthing_4across_title3',
      array(
          'default'           => __( 'Title 3', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_title3',
            array(
                'label'          => __( 'Title 3', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_title3',
                'type'           => 'text'
            )
        )
   );

  // 4 Across Text 3

  $wp_customize->add_setting(
      'sellthing_4across_text3',
      array(
          'default'           => __( 'Text 3', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_text3',
            array(
                'label'          => __( 'Text 3', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_text3',
                'type'           => 'text'
            )
        )
   );

  // 4 Across Icon 4

  $wp_customize->add_setting(
      'sellthing_4across_icon4',
      array(
          'default'           => __( 'fa fa-adjust', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_icon4',
            array(
                'label'          => __( 'Icon 4', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_icon4',
                'type'           => 'text'
            )
        )
   ); 

  // 4 Across Title 4

  $wp_customize->add_setting(
      'sellthing_4across_title4',
      array(
          'default'           => __( 'Title 4', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_title4',
            array(
                'label'          => __( 'Title 4', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_title4',
                'type'           => 'text'
            )
        )
   );

  // 4 Across Text 4

  $wp_customize->add_setting(
      'sellthing_4across_text4',
      array(
          'default'           => __( 'Text 4', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_4across_text4',
            array(
                'label'          => __( 'Text 4', 'sell-your-thing' ),
                'section'        => '4across_headline',
                'settings'       => 'sellthing_4across_text4',
                'type'           => 'text'
            )
        )
   );

  // Reviews Headline Text

  $wp_customize->add_section( 'reviews_headline' , array(
    'title'      => __('Reviews Area','sell-your-thing'), 
    'panel'      => 'homepage_settings',
    'priority'   => 60   
  ) );  

  $wp_customize->add_setting(
      'sellthing_reviews_headline',
      array(
          'default'           => __( 'Reviews Headline', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_reviews_headline',
            array(
                'label'          => __( 'Reviews Headline', 'sell-your-thing' ),
                'section'        => 'reviews_headline',
                'settings'       => 'sellthing_reviews_headline',
                'type'           => 'text'
            )
        )
   ); 

  // Reviews Sub Headline Text

  $wp_customize->add_setting(
      'sellthing_reviews_subheadline',
      array(
          'default'           => __( 'Reviews Sub Headline', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_reviews_subheadline',
            array(
                'label'          => __( 'Reviews Sub Headline', 'sell-your-thing' ),
                'section'        => 'reviews_headline',
                'settings'       => 'sellthing_reviews_subheadline',
                'type'           => 'text'
            )
        )
   ); 

  // Review 1 Image

  $wp_customize->add_setting(
      'sellthing_reviews_img1',
      array(
          'default'         => get_template_directory_uri() . '/images/reviewer.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_reviews_img1',
           array(
               'label'      => __( 'Review 1 Image', 'sell-your-thing' ),
               'section'    => 'reviews_headline',
               'settings'   => 'sellthing_reviews_img1',
               'context'    => 'sellthing-reviews-img1' 
           )
       )
   );

  // Review 1 Text

  $wp_customize->add_setting(
      'sellthing_review1_text',
      array(
          'default'           => __( 'Review 1 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_review1_text',
            array(
                'label'          => __( 'Review 1 Text', 'sell-your-thing' ),
                'section'        => 'reviews_headline',
                'settings'       => 'sellthing_review1_text',
                'type'           => 'text'
            )
        )
   ); 

  // Review 1 Byline

  $wp_customize->add_setting(
      'sellthing_review1_byline',
      array(
          'default'           => __( '- Jane Smith, Los Angeles, CA', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_review1_byline',
            array(
                'label'          => __( 'Review 1 Byline', 'sell-your-thing' ),
                'section'        => 'reviews_headline',
                'settings'       => 'sellthing_review1_byline',
                'type'           => 'text'
            )
        )
   ); 

 // Review 2 Image

  $wp_customize->add_setting(
      'sellthing_reviews_img2',
      array(
          'default'         => get_template_directory_uri() . '/images/reviewer.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_reviews_img2',
           array(
               'label'      => __( 'Review 2 Image', 'sell-your-thing' ),
               'section'    => 'reviews_headline',
               'settings'   => 'sellthing_reviews_img2',
               'context'    => 'sellthing-reviews-img2' 
           )
       )
   );

  // Review 2 Text

  $wp_customize->add_setting(
      'sellthing_review2_text',
      array(
          'default'           => __( 'Review 2 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_review2_text',
            array(
                'label'          => __( 'Review 2 Text', 'sell-your-thing' ),
                'section'        => 'reviews_headline',
                'settings'       => 'sellthing_review2_text',
                'type'           => 'text'
            )
        )
   ); 

  // Review 2 Byline

  $wp_customize->add_setting(
      'sellthing_review2_byline',
      array(
          'default'           => __( '- Jane Smith, Los Angeles, CA', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_review2_byline',
            array(
                'label'          => __( 'Review 2 Byline', 'sell-your-thing' ),
                'section'        => 'reviews_headline',
                'settings'       => 'sellthing_review2_byline',
                'type'           => 'text'
            )
        )
   ); 

 // Review 3 Image

  $wp_customize->add_setting(
      'sellthing_reviews_img3',
      array(
          'default'         => get_template_directory_uri() . '/images/reviewer.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_reviews_img3',
           array(
               'label'      => __( 'Review 3 Image', 'sell-your-thing' ),
               'section'    => 'reviews_headline',
               'settings'   => 'sellthing_reviews_img3',
               'context'    => 'sellthing-reviews-img3' 
           )
       )
   );

  // Review 3 Text

  $wp_customize->add_setting(
      'sellthing_review3_text',
      array(
          'default'           => __( 'Review 3 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_review3_text',
            array(
                'label'          => __( 'Review 3 Text', 'sell-your-thing' ),
                'section'        => 'reviews_headline',
                'settings'       => 'sellthing_review3_text',
                'type'           => 'text'
            )
        )
   ); 

  // Review 3 Byline

  $wp_customize->add_setting(
      'sellthing_review3_byline',
      array(
          'default'           => __( '- Jane Smith, Los Angeles, CA', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_review3_byline',
            array(
                'label'          => __( 'Review 3 Byline', 'sell-your-thing' ),
                'section'        => 'reviews_headline',
                'settings'       => 'sellthing_review3_byline',
                'type'           => 'text'
            )
        )
   ); 

 // Review 4 Image

  $wp_customize->add_setting(
      'sellthing_reviews_img4',
      array(
          'default'         => get_template_directory_uri() . '/images/reviewer.jpg',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text' 
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Image_Control(
           $wp_customize,
           'custom_reviews_img4',
           array(
               'label'      => __( 'Review 4 Image', 'sell-your-thing' ),
               'section'    => 'reviews_headline',
               'settings'   => 'sellthing_reviews_img4',
               'context'    => 'sellthing-reviews-img4' 
           )
       )
   );

  // Review 4 Text

  $wp_customize->add_setting(
      'sellthing_review4_text',
      array(
          'default'           => __( 'Review 4 Text', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_review4_text',
            array(
                'label'          => __( 'Review 4 Text', 'sell-your-thing' ),
                'section'        => 'reviews_headline',
                'settings'       => 'sellthing_review4_text',
                'type'           => 'text'
            )
        )
   ); 

  // Review 4 Byline

  $wp_customize->add_setting(
      'sellthing_review4_byline',
      array(
          'default'           => __( '- Jane Smith, Los Angeles, CA', 'sell-your-thing' ),
          'transport'         => 'postMessage',
          'sanitize_callback' => 'sanitize_text'          
      )
  );

  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_review4_byline',
            array(
                'label'          => __( 'Review 4 Byline', 'sell-your-thing' ),
                'section'        => 'reviews_headline',
                'settings'       => 'sellthing_review4_byline',
                'type'           => 'text'
            )
        )
   ); 

// COLOR CHOICES PANEL ........................................ //

// Links Color

  $wp_customize->add_section( 'theme_colors' , array(
    'title'      => __('Link and Icon Colors','sell-your-thing'), 
    'panel'      => 'color_choices',
    'priority'   => 100    
  ) );

  $wp_customize->add_setting(
      'sellthing_links_color',
      array(
          'default'         => '#337ab7',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_links_color',
           array(
               'label'      => __( 'Color for links', 'sell-your-thing' ),
               'section'    => 'theme_colors',
               'settings'   => 'sellthing_links_color' 
           )
       )
   ); 

// Icons Color

  $wp_customize->add_setting(
      'sellthing_icons_color',
      array(
          'default'         => '#000000',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );
  $wp_customize->add_control(
       new WP_Customize_Color_Control(
           $wp_customize,
           'custom_icons_color',
           array(
               'label'      => __( 'Color for icons', 'sell-your-thing' ),
               'section'    => 'theme_colors',
               'settings'   => 'sellthing_icons_color' 
           )
       )
   );

// TYPOGRAPHY PANEL ........................................ //

// Headings Font

$wp_customize->add_section( 'custom_h_fonts' , array(
    'title'      => __('Headings Font','sell-your-thing'), 
    'panel'      => 'typography_settings',
    'priority'   => 100    
  ) ); 

$wp_customize->add_setting(
      'sellthing_h1_font_type',
      array(
          'default'         => 'Open Sans',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_h1_font_type',
            array(
                'label'          => __( 'Font', 'sell-your-thing' ),
                'section'        => 'custom_h_fonts',
                'settings'       => 'sellthing_h1_font_type',
                'type'           => 'select',
                'choices'        => array(
                  'Open Sans' =>  'Open Sans',
                  'Roboto'  =>  'Roboto',
                  'Trirong' =>  'Trirong',
                  'Source Sans Pro' =>  'Source Sans Pro',
                  'Raleway' =>  'Raleway',
                  'Prompt'  =>  'Prompt',
                  'Taviraj' =>  'Taviraj',
                  'Titillium Web' =>  'Titillium Web',
                  'Libre Franklin'  =>  'Libre Franklin',
                  'Cormorant Garamond'  =>  'Cormorant Garamond',
                  'Proza Libre' =>  'Proza Libre',
                  'Josefin Sans'  =>  'Josefin Sans',
                  'Josefin Slab'  =>  'Josefin Slab',
                  'Kanit' =>  'Kanit'
                )
            )
        )       
   );

 // Paragraph Font

   $wp_customize->add_section( 'custom_p_fonts' , array(
    'title'      => __('Paragraph Font','sell-your-thing'), 
    'panel'      => 'typography_settings',
    'priority'   => 100    
  ) );  

   $wp_customize->add_setting(
      'sellthing_p_font_type',
      array(
          'default'         => 'Open Sans',
          'transport'       => 'postMessage',
          'sanitize_callback' => 'sanitize_text'
      )
  );

   $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_p_font_type',
            array(
                'label'          => __( 'Font', 'sell-your-thing' ),
                'section'        => 'custom_p_fonts',
                'settings'       => 'sellthing_p_font_type',
                'type'           => 'select',
                'choices'        => array(
                  'Open Sans' =>  'Open Sans',
                  'Roboto'  =>  'Roboto',
                  'Trirong' =>  'Trirong',
                  'Source Sans Pro' =>  'Source Sans Pro',
                  'Raleway' =>  'Raleway',
                  'Prompt'  =>  'Prompt',
                  'Taviraj' =>  'Taviraj',
                  'Titillium Web' =>  'Titillium Web',
                  'Libre Franklin'  =>  'Libre Franklin',
                  'Cormorant Garamond'  =>  'Cormorant Garamond',
                  'Proza Libre' =>  'Proza Libre',
                  'Josefin Sans'  =>  'Josefin Sans',
                  'Josefin Slab'  =>  'Josefin Slab',
                  'Kanit' =>  'Kanit'
                )
            )
        )       
   );

    // Add Custom CSS Textfield

  $wp_customize->add_section( 'custom_css_field' , array(
    'title'      => __('Custom CSS','sell-your-thing'), 
    'panel'      => 'design_settings',
    'priority'   => 2000    
  ) );  
  $wp_customize->add_setting(
      'sellthing_custom_css',
      array(          
          'sanitize_callback' => 'sanitize_textarea'          
      )
  );
  $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'custom_css',
            array(
                'label'          => __( 'Add custom CSS here', 'sell-your-thing' ),
                'section'        => 'custom_css_field',
                'settings'       => 'sellthing_custom_css',
                'type'           => 'textarea'
            )
        )
   );

}
  
add_action( 'customize_register', 'sellthing_customize_register' );

// Call the custom css into the header

$defaults = array(
  'wp-head-callback'       => 'sellthing_style_header'
);
add_theme_support( 'custom-header', $defaults );

// Callback function for updating styles

function sellthing_style_header() {

   ?>

<style type="text/css">

h1,
h1 a,
h2,
h2 a,
h3,
h3 a,
h4,
h4 a,
h5,
h5 a,
h6,
h6 a {
  font-family: <?php echo get_theme_mod('sellthing_h1_font_type'); ?>;
}

p,
li,
a,
button {
	font-family: <?php echo get_theme_mod('sellthing_p_font_type'); ?>;
}

a,
a:visited,
a:hover,
a:focus,
a:active {
	color: <?php echo get_theme_mod('sellthing_links_color'); ?>;
}

.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus {
  background-color: <?php echo get_theme_mod('sellthing_links_color'); ?>;
}

.features .fa,
.four-icons .fa {
  color: <?php echo get_theme_mod('sellthing_icons_color'); ?>;
}

  <?php if( get_theme_mod('sellthing_custom_css') != '' ) {
    echo get_theme_mod('sellthing_custom_css');
  } ?>

  </style>

<?php 

}

// Add theme support for Custom Backgrounds

$defaults = array(
  'default-color' => '#ffffff',
);
add_theme_support( 'custom-background', $defaults );

// Sanitize text 

function sanitize_text( $text ) {    
    return sanitize_text_field( $text );
}

// Sanitize textarea 

function sanitize_textarea( $text ) {    
    return esc_textarea( $text );
}

// Custom js for theme customizer

function sellthing_customizer_js() {
  wp_enqueue_script(
    'sellthing_theme_customizer',
    get_template_directory_uri() . '/js/theme-customizer.js',
    array( 'jquery', 'customize-preview' ),
    '',
    true
);
}
add_action( 'customize_preview_init', 'sellthing_customizer_js' );

?>