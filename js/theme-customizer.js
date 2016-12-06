(function( $ ) {

    wp.customize( 'sellthing_logo', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' .navbar-brand img').hide();
            } else {
                $(' .navbar-brand img ').show();
                $(' .navbar-brand img ').attr( 'src', to );
            }
        } );
    });    

    wp.customize( 'sellthing_bg_photo', function( value ) {
        value.bind( function( to ) {
            $( '.intro-background img' ).attr( 'src', to );
        } );
    });

    wp.customize( 'sellthing_product_photo', function( value ) {
        value.bind( function( to ) {
            $( '#main-image img' ).attr( 'src', to );
        } );
    });

    wp.customize( 'sellthing_headline_text', function( value ) {
        value.bind( function( to ) {
           $(' #main-headline ').text( to );
        } );
    }); 

    wp.customize( 'sellthing_subheadline_text', function( value ) {
        value.bind( function( to ) {
           $(' #main-subheadline ').text( to );
        } );
    }); 

    wp.customize( 'sellthing_button_text', function( value ) {
        value.bind( function( to ) {
           $(' #main-button ').text( to );
        } );
    }); 

    wp.customize( 'sellthing_features_headline', function( value ) {
        value.bind( function( to ) {
           $(' .features h2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_features_subheadline', function( value ) {
        value.bind( function( to ) {
           $(' .features h3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_features_img', function( value ) {
        value.bind( function( to ) {
            $( '.features img' ).attr( 'src', to );
        } );
    });

    wp.customize( 'sellthing_feature1_icon', function( value ) {
        value.bind( function( to ) {
           $(' #ficon1 ').attr( 'class', to );
        } );
    });

    wp.customize( 'sellthing_feature1_title', function( value ) {
        value.bind( function( to ) {
           $(' #ftitle1 ').text( to );
        } );
    });

    wp.customize( 'sellthing_feature1_text', function( value ) {
        value.bind( function( to ) {
           $(' #ftext1 ').text( to );
        } );
    });

    wp.customize( 'sellthing_feature2_icon', function( value ) {
        value.bind( function( to ) {
           $(' #ficon2 ').attr( 'class', to );
        } );
    });

    wp.customize( 'sellthing_feature2_title', function( value ) {
        value.bind( function( to ) {
           $(' #ftitle2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_feature2_text', function( value ) {
        value.bind( function( to ) {
           $(' #ftext2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_feature3_icon', function( value ) {
        value.bind( function( to ) {
           $(' #ficon3 ').attr( 'class', to );
        } );
    });

    wp.customize( 'sellthing_feature3_title', function( value ) {
        value.bind( function( to ) {
           $(' #ftitle3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_feature3_text', function( value ) {
        value.bind( function( to ) {
           $(' #ftext3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_feature4_icon', function( value ) {
        value.bind( function( to ) {
           $(' #ficon4 ').attr( 'class', to );
        } );
    });

    wp.customize( 'sellthing_feature4_title', function( value ) {
        value.bind( function( to ) {
           $(' #ftitle4 ').text( to );
        } );
    });

    wp.customize( 'sellthing_feature4_text', function( value ) {
        value.bind( function( to ) {
           $(' #ftext4 ').text( to );
        } );
    });

    wp.customize( 'sellthing_cta_bar_headline', function( value ) {
        value.bind( function( to ) {
           $(' .ctabar h2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_cta_bar_text', function( value ) {
        value.bind( function( to ) {
           $(' .ctabar h3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_cta_bar_button', function( value ) {
        value.bind( function( to ) {
           $(' .ctabar button ').text( to );
        } );
    });

    wp.customize( 'sellthing_screenshots_headline', function( value ) {
        value.bind( function( to ) {
           $(' .screenshots h2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_screenshots_img1', function( value ) {
        value.bind( function( to ) {
            $( '#screenshot1' ).attr( 'src', to );
        } );
    });

    wp.customize( 'sellthing_screenshots_title1', function( value ) {
        value.bind( function( to ) {
           $(' #scrn-title1 ').text( to );
        } );
    });

    wp.customize( 'sellthing_screenshots_text1', function( value ) {
        value.bind( function( to ) {
           $(' #scrn-text1 ').text( to );
        } );
    });

    wp.customize( 'sellthing_screenshots_img2', function( value ) {
        value.bind( function( to ) {
            $( '#screenshot2' ).attr( 'src', to );
        } );
    });

    wp.customize( 'sellthing_screenshots_title2', function( value ) {
        value.bind( function( to ) {
           $(' #scrn-title2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_screenshots_text2', function( value ) {
        value.bind( function( to ) {
           $(' #scrn-text2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_screenshots_img3', function( value ) {
        value.bind( function( to ) {
            $( '#screenshot3' ).attr( 'src', to );
        } );
    });

    wp.customize( 'sellthing_screenshots_title3', function( value ) {
        value.bind( function( to ) {
           $(' #scrn-title3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_screenshots_text3', function( value ) {
        value.bind( function( to ) {
           $(' #scrn-text3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_4across_headline', function( value ) {
        value.bind( function( to ) {
           $(' .four-icons h2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_4across_subheadline', function( value ) {
        value.bind( function( to ) {
           $(' .four-icons h3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_4across_icon1', function( value ) {
        value.bind( function( to ) {
           $(' #four-icon1 ').attr( 'class', to );
        } );
    });

    wp.customize( 'sellthing_4across_title1', function( value ) {
        value.bind( function( to ) {
           $(' #four-title1 ').text( to );
        } );
    });

    wp.customize( 'sellthing_4across_text1', function( value ) {
        value.bind( function( to ) {
           $(' #four-text1 ').text( to );
        } );
    });

    wp.customize( 'sellthing_4across_icon2', function( value ) {
        value.bind( function( to ) {
           $(' #four-icon2 ').attr( 'class', to );
        } );
    });

    wp.customize( 'sellthing_4across_title2', function( value ) {
        value.bind( function( to ) {
           $(' #four-title2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_4across_text2', function( value ) {
        value.bind( function( to ) {
           $(' #four-text2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_4across_icon3', function( value ) {
        value.bind( function( to ) {
           $(' #four-icon3 ').attr( 'class', to );
        } );
    });

    wp.customize( 'sellthing_4across_title3', function( value ) {
        value.bind( function( to ) {
           $(' #four-title3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_4across_text3', function( value ) {
        value.bind( function( to ) {
           $(' #four-text3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_4across_icon4', function( value ) {
        value.bind( function( to ) {
           $(' #four-icon4 ').attr( 'class', to );
        } );
    });

    wp.customize( 'sellthing_4across_title4', function( value ) {
        value.bind( function( to ) {
           $(' #four-title4 ').text( to );
        } );
    });

    wp.customize( 'sellthing_4across_text4', function( value ) {
        value.bind( function( to ) {
           $(' #four-text4 ').text( to );
        } );
    });

    wp.customize( 'sellthing_reviews_headline', function( value ) {
        value.bind( function( to ) {
           $(' .reviews h2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_reviews_subheadline', function( value ) {
        value.bind( function( to ) {
           $(' .reviews h3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_reviews_img1', function( value ) {
        value.bind( function( to ) {
            $( '#rev-img1' ).attr( 'src', to );
        } );
    });

    wp.customize( 'sellthing_review1_text', function( value ) {
        value.bind( function( to ) {
           $(' #rev-text1 ').text( to );
        } );
    });

    wp.customize( 'sellthing_review1_byline', function( value ) {
        value.bind( function( to ) {
           $(' #rev-by1 ').text( to );
        } );
    });

    wp.customize( 'sellthing_reviews_img2', function( value ) {
        value.bind( function( to ) {
            $( '#rev-img2' ).attr( 'src', to );
        } );
    });

    wp.customize( 'sellthing_review2_text', function( value ) {
        value.bind( function( to ) {
           $(' #rev-text2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_review2_byline', function( value ) {
        value.bind( function( to ) {
           $(' #rev-by2 ').text( to );
        } );
    });

    wp.customize( 'sellthing_reviews_img3', function( value ) {
        value.bind( function( to ) {
            $( '#rev-img3' ).attr( 'src', to );
        } );
    });

    wp.customize( 'sellthing_review3_text', function( value ) {
        value.bind( function( to ) {
           $(' #rev-text3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_review3_byline', function( value ) {
        value.bind( function( to ) {
           $(' #rev-by3 ').text( to );
        } );
    });

    wp.customize( 'sellthing_reviews_img4', function( value ) {
        value.bind( function( to ) {
            $( '#rev-img4' ).attr( 'src', to );
        } );
    });

    wp.customize( 'sellthing_review4_text', function( value ) {
        value.bind( function( to ) {
           $(' #rev-text4 ').text( to );
        } );
    });

    wp.customize( 'sellthing_review4_byline', function( value ) {
        value.bind( function( to ) {
           $(' #rev-by4 ').text( to );
        } );
    });

    wp.customize( 'sellthing_h1_font_type', function( value ) {
        value.bind( function( to ) {            
            $( 'h1' ).css( 'font-family', to );  
            $( 'h2' ).css( 'font-family', to );  
            $( 'h3' ).css( 'font-family', to );  
            $( 'h4' ).css( 'font-family', to );
            $( 'h5' ).css( 'font-family', to );
            $( 'h6' ).css( 'font-family', to );
        } );
    }); 

    wp.customize( 'sellthing_p_font_type', function( value ) {
        value.bind( function( to ) {            
            $( 'p' ).css( 'font-family', to ); 
            $( 'a' ).css( 'font-family', to );
            $( 'li' ).css( 'font-family', to );
            $( 'button' ).css( 'font-family', to );          
        } );
    });

    wp.customize( 'sellthing_icons_color', function( value ) {
        value.bind( function( to ) {
            $( '.features .fa' ).css( 'color', to );
            $( '.four-icons .fa' ).css( 'color', to );
         } );

    });

})( jQuery );