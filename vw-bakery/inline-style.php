<?php
	
	/*---------------First highlight color-------------------*/

	$vw_bakery_first_color = get_theme_mod('vw_bakery_first_color');

	$vw_bakery_custom_css = '';

	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.cart_box, .contact-btn a, .products li:hover span.onsale, #footer, nav.woocommerce-MyAccount-navigation ul li, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, input[type="submit"], .pagination span, .pagination a, #comments a.comment-reply-link, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar .woocommerce-product-search button, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a, #preloader, #sidebar .wp-block-search .wp-block-search__button,.bradcrumbs a:hover, .bradcrumbs span, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, .wp-block-button__link, .post-categories li a, .wp-block-tag-cloud a:hover, .wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button, .wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale, .woocommerce .added_to_cart.wc-forward, .wc-block-components-checkout-return-to-cart-button{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='#comments input[type="submit"].submit, .wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wc-block-components-order-summary-item__quantity{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_first_color).'!important;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='a, a.more-btn:hover, a.content-bttn:hover, .mid-contact p, .products li:hover span, #footer .tagcloud a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .post-main-box:hover h2 a, .post-main-box:hover a, .woocommerce-message::before, #sidebar a.custom_read_more:hover, .single-post .post-info:hover a, #slider .inner_carousel h1 a:hover{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='a.wc-block-components-product-name, .wc-block-components-product-name{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_first_color).'!important;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale{';
			$vw_bakery_custom_css .='border-color: '.esc_attr($vw_bakery_first_color).'!important;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.post-info hr, .woocommerce-message, .main-navigation ul ul{';
			$vw_bakery_custom_css .='border-top-color: '.esc_attr($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.main-navigation ul ul, .header-fixed{';
			$vw_bakery_custom_css .='border-bottom-color: '.esc_attr($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.logo_outer{';
			$vw_bakery_custom_css .='border-left-color: '.esc_attr($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.logo_outer{';
			$vw_bakery_custom_css .='border-right-color: '.esc_attr($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_custom_css .='@media screen and (max-width:720px) {';
		if($vw_bakery_first_color != false){
			$vw_bakery_custom_css .='#header{
			background-color:'.esc_attr($vw_bakery_first_color).';
			}';
		}
	$vw_bakery_custom_css .='}';

	$vw_bakery_custom_css .='@media screen and (min-width:768px) and (max-width: 1023px) {';
		if($vw_bakery_first_color != false){
			$vw_bakery_custom_css .='.logo img, .logo, .logo_outer_box{
			background-color:'.esc_attr($vw_bakery_first_color).';
			}';
		}
	$vw_bakery_custom_css .='}';

	/*-------------------Second highlight color-------------------*/

	$vw_bakery_second_color = get_theme_mod('vw_bakery_second_color');

	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='#topbar, .time, .woocommerce span.onsale, #footer input[type="submit"], .scrollup i, #footer-2, #footer .woocommerce #respond input#submit, #footer .woocommerce a.button, #footer .woocommerce button.button, #footer .woocommerce input.button, #footer .woocommerce #respond input#submit.alt, #footer .woocommerce a.button.alt, #footer .woocommerce button.button.alt, #footer .woocommerce input.button.alt, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button:hover, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer .woocommerce-product-search button:hover, #footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .contact-btn a:hover, #footer .wp-block-search .wp-block-search__button, nav.navigation.posts-navigation .nav-previous a:hover, nav.navigation.posts-navigation .nav-next a:hover, .pagination .current, span.post-page-numbers.current, .pagination a:hover, .post-nav-links a:hover, .wp-block-woocommerce-cart .wc-block-cart__submit-button:hover, .wc-block-components-checkout-place-order-button:hover, .woocommerce .added_to_cart.wc-forward:hover,.wc-block-components-checkout-return-to-cart-button:hover{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .main-navigation ul.sub-menu a:hover, .main-navigation a:hover, .entry-content a, #sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, #footer .custom-social-icons i, #sidebar .custom-social-icons i, #footer li a:hover, #sidebar ul li a:hover, span.woocommerce-Price-amount.amount{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='a.wc-block-components-product-name, .wc-block-components-product-name{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_second_color).'!important;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='#footer .custom-social-icons i, #sidebar .custom-social-icons i, #footer .custom-social-icons i:hover, #sidebar .custom-social-icons i:hover{';
			$vw_bakery_custom_css .='border-color: '.esc_attr($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='.header-fixed{';
			$vw_bakery_custom_css .='border-bottom-color: '.esc_attr($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_width_option','Full Width');
    if($vw_bakery_theme_lay == 'Boxed'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#slider .inner-carousel-conetnt{';
			$vw_bakery_custom_css .='top: -9em;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='top: 43%;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='right: 100px;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.scrollup.left i{';
			$vw_bakery_custom_css .='left: 100px;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Wide Width'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#slider .inner-carousel-conetnt{';
			$vw_bakery_custom_css .='top: -9em;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='right: 30px;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.scrollup.left i{';
			$vw_bakery_custom_css .='left: 30px;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Full Width'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='max-width: 100%;';
		$vw_bakery_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_slider_opacity_color','0.5');
	if($vw_bakery_theme_lay == '0'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.1'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.1';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.2'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.2';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.3'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.3';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.4'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.4';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.5'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.5';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.6'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.6';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.7'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.7';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.8'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.8';
		$vw_bakery_custom_css .='}';
		}else if($vw_bakery_theme_lay == '0.9'){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:0.9';
		$vw_bakery_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$vw_bakery_slider_image_overlay = get_theme_mod('vw_bakery_slider_image_overlay', true);
	if($vw_bakery_slider_image_overlay == false){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='opacity:1;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_slider_image_overlay_color = get_theme_mod('vw_bakery_slider_image_overlay_color', true);
	if($vw_bakery_slider_image_overlay_color != false){
		$vw_bakery_custom_css .='#slider{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_slider_image_overlay_color).';';
		$vw_bakery_custom_css .='}';
	}


	/*-------------------Slider Content Layout -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_slider_content_option','Center');
    if($vw_bakery_theme_lay == 'Left'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:center; left:13%; right:45%;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Center'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:center; left:23%; right:23%;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Right'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:center; left:45%; right:13%;';
		$vw_bakery_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_bakery_slider_content_padding_top_bottom = get_theme_mod('vw_bakery_slider_content_padding_top_bottom');
	$vw_bakery_slider_content_padding_left_right = get_theme_mod('vw_bakery_slider_content_padding_left_right');
	if($vw_bakery_slider_content_padding_top_bottom != false || $vw_bakery_slider_content_padding_left_right != false){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='top: '.esc_attr($vw_bakery_slider_content_padding_top_bottom).'!important; bottom: '.esc_attr($vw_bakery_slider_content_padding_top_bottom).';left: '.esc_attr($vw_bakery_slider_content_padding_left_right).'!important;right: '.esc_attr($vw_bakery_slider_content_padding_left_right).'!important;';
		$vw_bakery_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_bakery_slider_height = get_theme_mod('vw_bakery_slider_height');
	if($vw_bakery_slider_height != false){
		$vw_bakery_custom_css .='#slider img{';
			$vw_bakery_custom_css .='height: '.esc_attr($vw_bakery_slider_height).';';
		$vw_bakery_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_blog_layout_option','Default');
    if($vw_bakery_theme_lay == 'Default'){
		$vw_bakery_custom_css .='.post-main-box{';
			$vw_bakery_custom_css .='';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Center'){
		$vw_bakery_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_bakery_custom_css .='text-align:center;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.post-info, .content-bttn{';
			$vw_bakery_custom_css .='margin-top:10px;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.post-info hr{';
			$vw_bakery_custom_css .='margin:15px auto;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Left'){
		$vw_bakery_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_bakery_custom_css .='text-align:Left;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.content-bttn{';
			$vw_bakery_custom_css .='margin:20px 0;';
		$vw_bakery_custom_css .='}';
	}

	// featured image dimention
	$vw_bakery_blog_post_featured_image_dimension = get_theme_mod('vw_bakery_blog_post_featured_image_dimension', 'default');
	$vw_bakery_blog_post_featured_image_custom_width = get_theme_mod('vw_bakery_blog_post_featured_image_custom_width',250);
	$vw_bakery_blog_post_featured_image_custom_height = get_theme_mod('vw_bakery_blog_post_featured_image_custom_height',250);
	if($vw_bakery_blog_post_featured_image_dimension == 'custom'){
		$vw_bakery_custom_css .='.box-image img{';
			$vw_bakery_custom_css .='width: '.esc_attr($vw_bakery_blog_post_featured_image_custom_width).'; height: '.esc_attr($vw_bakery_blog_post_featured_image_custom_height).';';
		$vw_bakery_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$vw_bakery_blog_page_posts_settings = get_theme_mod( 'vw_bakery_blog_page_posts_settings','Into Blocks');
		if($vw_bakery_blog_page_posts_settings == 'Without Blocks'){
		$vw_bakery_custom_css .='.post-main-box{';
			$vw_bakery_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_bakery_custom_css .='}';
	}
     
	$vw_bakery_related_image_box_shadow = get_theme_mod('vw_bakery_related_image_box_shadow',0);
    if($vw_bakery_related_image_box_shadow != false){
        $vw_bakery_custom_css .='.related-post .box-image img{';
            $vw_bakery_custom_css .='box-shadow: '.esc_attr($vw_bakery_related_image_box_shadow).'px '.esc_attr($vw_bakery_related_image_box_shadow).'px '.esc_attr($vw_bakery_related_image_box_shadow).'px #cccccc;';
        $vw_bakery_custom_css .='}';
    }
	/*--------------------- Grid Posts -------------------*/

	$vw_bakery_display_grid_posts_settings = get_theme_mod( 'vw_bakery_display_grid_posts_settings','Into Blocks');
    if($vw_bakery_display_grid_posts_settings == 'Without Blocks'){
		$vw_bakery_custom_css .='.grid-post-main-box{';
			$vw_bakery_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_grid_featured_image_border_radius = get_theme_mod('vw_bakery_grid_featured_image_border_radius', 0);
	if($vw_bakery_grid_featured_image_border_radius != false){
		$vw_bakery_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img{';
			$vw_bakery_custom_css .='border-radius: '.esc_attr($vw_bakery_grid_featured_image_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_grid_featured_image_box_shadow = get_theme_mod('vw_bakery_grid_featured_image_box_shadow',0);
	if($vw_bakery_grid_featured_image_box_shadow != false){
		$vw_bakery_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$vw_bakery_custom_css .='box-shadow: '.esc_attr($vw_bakery_grid_featured_image_box_shadow).'px '.esc_attr($vw_bakery_grid_featured_image_box_shadow).'px '.esc_attr($vw_bakery_grid_featured_image_box_shadow).'px #cccccc;';
		$vw_bakery_custom_css .='}';
	}

	/*-------------------Responsive Media -----------------------*/

	$vw_bakery_resp_topbar = get_theme_mod( 'vw_bakery_resp_topbar_hide_show',true);
	if($vw_bakery_resp_topbar == true && get_theme_mod( 'vw_bakery_topbar_hide_show', true) == false){
    	$vw_bakery_custom_css .='#topbar{';
			$vw_bakery_custom_css .='display:none;';
		$vw_bakery_custom_css .='} ';
	}
    if($vw_bakery_resp_topbar == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#topbar{';
			$vw_bakery_custom_css .='display:block;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_resp_topbar == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#topbar{';
			$vw_bakery_custom_css .='display:none;';
		$vw_bakery_custom_css .='} }';
	}

	$vw_bakery_resp_stickyheader = get_theme_mod( 'vw_bakery_stickyheader_hide_show',false);
	if($vw_bakery_resp_stickyheader == true && get_theme_mod( 'vw_bakery_sticky_header',false) != true){
    	$vw_bakery_custom_css .='.header-fixed{';
			$vw_bakery_custom_css .='position:static;';
		$vw_bakery_custom_css .='} ';
	}
    if($vw_bakery_resp_stickyheader == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='.header-fixed{';
			$vw_bakery_custom_css .='position:fixed;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_resp_stickyheader == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px){';
		$vw_bakery_custom_css .='.header-fixed{';
			$vw_bakery_custom_css .='position:static;';
		$vw_bakery_custom_css .='} }';
	}

	$vw_bakery_resp_slider = get_theme_mod( 'vw_bakery_resp_slider_hide_show',true);
	if($vw_bakery_resp_slider == true && get_theme_mod( 'vw_bakery_slider_hide_show', true) == false){
    	$vw_bakery_custom_css .='#slider{';
			$vw_bakery_custom_css .='display:none;';
		$vw_bakery_custom_css .='} ';
	}
    if($vw_bakery_resp_slider == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#slider{';
			$vw_bakery_custom_css .='display:block;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_resp_slider == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#slider{';
			$vw_bakery_custom_css .='display:none;';
		$vw_bakery_custom_css .='} }';
	}

	$vw_bakery_sidebar = get_theme_mod( 'vw_bakery_sidebar_hide_show',true);
    if($vw_bakery_sidebar == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#sidebar{';
			$vw_bakery_custom_css .='display:block;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_sidebar == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='#sidebar{';
			$vw_bakery_custom_css .='display:none;';
		$vw_bakery_custom_css .='} }';
	}

	$vw_bakery_resp_scroll_top = get_theme_mod( 'vw_bakery_resp_scroll_top_hide_show',true);
	if($vw_bakery_resp_scroll_top == true && get_theme_mod( 'vw_bakery_hide_show_scroll',true) != true){
    	$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='visibility:hidden !important;';
		$vw_bakery_custom_css .='} ';
	}
    if($vw_bakery_resp_scroll_top == true){
    	$vw_bakery_custom_css .='@media screen and (max-width:575px) {';
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='visibility:visible !important;';
		$vw_bakery_custom_css .='} }';
	}else if($vw_bakery_resp_scroll_top == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px){';
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='visibility:hidden !important;';
		$vw_bakery_custom_css .='} }';
	}

	$vw_bakery_resp_menu_toggle_btn_color = get_theme_mod('vw_bakery_resp_menu_toggle_btn_color');
	if($vw_bakery_resp_menu_toggle_btn_color != false){
		$vw_bakery_custom_css .='.toggle-nav i,.sidenav .closebtn{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_resp_menu_toggle_btn_color).';';
		$vw_bakery_custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_bakery_topbar_padding_top_bottom = get_theme_mod('vw_bakery_topbar_padding_top_bottom');
	if($vw_bakery_topbar_padding_top_bottom != false){
		$vw_bakery_custom_css .='#topbar{';
			$vw_bakery_custom_css .='padding-top: '.esc_attr($vw_bakery_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_bakery_topbar_padding_top_bottom).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_navigation_menu_font_size = get_theme_mod('vw_bakery_navigation_menu_font_size');
	if($vw_bakery_navigation_menu_font_size != false){
		$vw_bakery_custom_css .='.main-navigation a{';
			$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_navigation_menu_font_size).'!important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_nav_menus_font_weight = get_theme_mod( 'vw_bakery_navigation_menu_font_weight','Default');
    if($vw_bakery_nav_menus_font_weight == 'Default'){
		$vw_bakery_custom_css .='.main-navigation a{';
			$vw_bakery_custom_css .='';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_nav_menus_font_weight == 'Normal'){
		$vw_bakery_custom_css .='.main-navigation a{';
			$vw_bakery_custom_css .='font-weight: normal;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_menus_item = get_theme_mod( 'vw_bakery_menus_item_style','None');
    if($vw_bakery_menus_item == 'None'){
		$vw_bakery_custom_css .='.main-navigation a{';
			$vw_bakery_custom_css .='';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_menus_item == 'Zoom In'){
		$vw_bakery_custom_css .='.main-navigation a:hover{';
			$vw_bakery_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #ff7c93;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_navigation_menu_font_weight = get_theme_mod('vw_bakery_navigation_menu_font_weight','600');
	if($vw_bakery_navigation_menu_font_weight != false){
		$vw_bakery_custom_css .='.main-navigation a{';
			$vw_bakery_custom_css .='font-weight: '.esc_attr($vw_bakery_navigation_menu_font_weight).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_menu_text_transform','Uppercase');
	if($vw_bakery_theme_lay == 'Capitalize'){
		$vw_bakery_custom_css .='.main-navigation a{';
			$vw_bakery_custom_css .='text-transform:Capitalize;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_theme_lay == 'Lowercase'){
		$vw_bakery_custom_css .='.main-navigation a{';
			$vw_bakery_custom_css .='text-transform:Lowercase;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_theme_lay == 'Uppercase'){
		$vw_bakery_custom_css .='.main-navigation a{';
			$vw_bakery_custom_css .='text-transform:Uppercase;';
		$vw_bakery_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_bakery_sticky_header_padding = get_theme_mod('vw_bakery_sticky_header_padding');
	if($vw_bakery_sticky_header_padding != false){
		$vw_bakery_custom_css .='.header-fixed{';
			$vw_bakery_custom_css .='padding: '.esc_attr($vw_bakery_sticky_header_padding).';';
		$vw_bakery_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_bakery_search_font_size = get_theme_mod('vw_bakery_search_font_size');
	if($vw_bakery_search_font_size != false) {
		$vw_bakery_custom_css .='.search-box i{';
			$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_search_font_size).';';
		$vw_bakery_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_bakery_button_border = get_theme_mod( 'vw_bakery_button_border', false);
	if($vw_bakery_button_border == true){
		$vw_bakery_custom_css .='a.more-btn, a.content-bttn{';
			$vw_bakery_custom_css .='border:2px solid; display: inline-block;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_button_padding_top_bottom = get_theme_mod('vw_bakery_button_padding_top_bottom');
	$vw_bakery_button_padding_left_right = get_theme_mod('vw_bakery_button_padding_left_right');
	if($vw_bakery_button_padding_top_bottom != false || $vw_bakery_button_padding_left_right != false){
		$vw_bakery_custom_css .='a.more-btn, a.content-bttn, .woocommerce ul.products li.product .button{';
			$vw_bakery_custom_css .='padding-top: '.esc_attr($vw_bakery_button_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_bakery_button_padding_top_bottom).';padding-left: '.esc_attr($vw_bakery_button_padding_left_right).';padding-right: '.esc_attr($vw_bakery_button_padding_left_right).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_button_border_radius = get_theme_mod('vw_bakery_button_border_radius');
	if($vw_bakery_button_border_radius != false){
		$vw_bakery_custom_css .='a.more-btn, a.content-bttn, .woocommerce ul.products li.product .button{';
			$vw_bakery_custom_css .='border-radius: '.esc_attr($vw_bakery_button_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	// button font weight
	$vw_bakery_button_font_weight = get_theme_mod('vw_bakery_button_font_weight');
  	$vw_bakery_custom_css .='a.content-bttn{';
    $vw_bakery_custom_css .='font-weight: '.esc_attr($vw_bakery_button_font_weight).'!important;';
  	$vw_bakery_custom_css .='}';

	$vw_bakery_button_font_size = get_theme_mod('vw_bakery_button_font_size',14);
	$vw_bakery_custom_css .='.more-btn a{';
		$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_button_font_size).';';
	$vw_bakery_custom_css .='}';

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_button_text_transform','Uppercase');
	if($vw_bakery_theme_lay == 'Capitalize'){
		$vw_bakery_custom_css .='a.content-bttn{';
			$vw_bakery_custom_css .='text-transform:Capitalize;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_theme_lay == 'Lowercase'){
		$vw_bakery_custom_css .='a.content-bttn{';
			$vw_bakery_custom_css .='text-transform:Lowercase;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_theme_lay == 'Uppercase'){
		$vw_bakery_custom_css .='a.content-bttn{';
			$vw_bakery_custom_css .='text-transform:Uppercase;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_button_letter_spacing = get_theme_mod('vw_bakery_button_letter_spacing');
	$vw_bakery_custom_css .='a.content-bttn{';
		$vw_bakery_custom_css .='letter-spacing: '.esc_attr($vw_bakery_button_letter_spacing).';';
	$vw_bakery_custom_css .='}';
	
	/*------------- Single Blog Page------------------*/

	$vw_bakery_featured_image_border_radius = get_theme_mod('vw_bakery_featured_image_border_radius', 0);
	if($vw_bakery_featured_image_border_radius != false){
		$vw_bakery_custom_css .='.box-image img, .feature-box img{';
			$vw_bakery_custom_css .='border-radius: '.esc_attr($vw_bakery_featured_image_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_featured_image_box_shadow = get_theme_mod('vw_bakery_featured_image_box_shadow',0);
	if($vw_bakery_featured_image_box_shadow != false){
		$vw_bakery_custom_css .='.box-image img, #content-vw img{';
			$vw_bakery_custom_css .='box-shadow: '.esc_attr($vw_bakery_featured_image_box_shadow).'px '.esc_attr($vw_bakery_featured_image_box_shadow).'px '.esc_attr($vw_bakery_featured_image_box_shadow).'px #cccccc;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_single_blog_post_navigation_show_hide = get_theme_mod('vw_bakery_single_blog_post_navigation_show_hide',true);
	if($vw_bakery_single_blog_post_navigation_show_hide != true){
		$vw_bakery_custom_css .='.post-navigation{';
			$vw_bakery_custom_css .='display: none;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_single_blog_comment_title = get_theme_mod('vw_bakery_single_blog_comment_title', 'Leave a Reply');
	if($vw_bakery_single_blog_comment_title == ''){
		$vw_bakery_custom_css .='#comments h2#reply-title {';
			$vw_bakery_custom_css .='display: none;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_single_blog_comment_button_text = get_theme_mod('vw_bakery_single_blog_comment_button_text', 'Post Comment');
	if($vw_bakery_single_blog_comment_button_text == ''){
		$vw_bakery_custom_css .='#comments p.form-submit {';
			$vw_bakery_custom_css .='display: none;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_comment_width = get_theme_mod('vw_bakery_single_blog_comment_width');
	if($vw_bakery_comment_width != false){
		$vw_bakery_custom_css .='#comments textarea{';
			$vw_bakery_custom_css .='width: '.esc_attr($vw_bakery_comment_width).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_singlepost_image_box_shadow = get_theme_mod('vw_bakery_singlepost_image_box_shadow',0);
	if($vw_bakery_singlepost_image_box_shadow != false){
		$vw_bakery_custom_css .='.feature-box img{';
			$vw_bakery_custom_css .='box-shadow: '.esc_attr($vw_bakery_singlepost_image_box_shadow).'px '.esc_attr($vw_bakery_singlepost_image_box_shadow).'px '.esc_attr($vw_bakery_singlepost_image_box_shadow).'px #cccccc;';
		$vw_bakery_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_bakery_copyright_background_color = get_theme_mod('vw_bakery_copyright_background_color');
	if($vw_bakery_copyright_background_color != false){
		$vw_bakery_custom_css .='#footer-2{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_copyright_background_color).' !important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_footer_padding = get_theme_mod('vw_bakery_footer_padding');
	if($vw_bakery_footer_padding != false){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='padding: '.esc_attr($vw_bakery_footer_padding).' 0;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_footer_widgets_heading = get_theme_mod( 'vw_bakery_footer_widgets_heading','Left');
    if($vw_bakery_footer_widgets_heading == 'Left'){
		$vw_bakery_custom_css .='#footer h3, #footer h3 .wp-block-search .wp-block-search__label{';
		$vw_bakery_custom_css .='text-align: left;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_footer_widgets_heading == 'Center'){
		$vw_bakery_custom_css .='#footer h3, #footer h3 .wp-block-search .wp-block-search__label{';
			$vw_bakery_custom_css .='text-align: center;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_footer_widgets_heading == 'Right'){
		$vw_bakery_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_bakery_custom_css .='text-align: right;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_footer_widgets_content = get_theme_mod( 'vw_bakery_footer_widgets_content','Left');
    if($vw_bakery_footer_widgets_content == 'Left'){
		$vw_bakery_custom_css .='#footer .widget{';
		$vw_bakery_custom_css .='text-align: left;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_footer_widgets_content == 'Center'){
		$vw_bakery_custom_css .='#footer .widget{';
			$vw_bakery_custom_css .='text-align: center;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_footer_widgets_content == 'Right'){
		$vw_bakery_custom_css .='#footer .widget{';
			$vw_bakery_custom_css .='text-align: right;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_footer_background_color = get_theme_mod('vw_bakery_footer_background_color');
	if($vw_bakery_footer_background_color != false){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_footer_background_color).'!important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_copyright_font_size = get_theme_mod('vw_bakery_copyright_font_size');
	if($vw_bakery_copyright_font_size != false){
		$vw_bakery_custom_css .='.copyright p{';
			$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_copyright_font_size).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_copyright_alingment = get_theme_mod('vw_bakery_copyright_alingment');
	if($vw_bakery_copyright_alingment != false){
		$vw_bakery_custom_css .='.copyright p,#footer-2 p{';
			$vw_bakery_custom_css .='text-align: '.esc_attr($vw_bakery_copyright_alingment).';';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='
		@media screen and (max-width:720px) {
			.copyright p,#footer-2 p{';
			$vw_bakery_custom_css .='text-align: center;} }';
	}

	$vw_bakery_resp_stickycopyright = get_theme_mod( 'vw_bakery_stickycopyright_hide_show',false);
	if($vw_bakery_resp_stickycopyright == true && get_theme_mod( 'vw_bakery_copyright_sticky',false) != true){
    	$vw_bakery_custom_css .='.copyright-sticky{';
			$vw_bakery_custom_css .='position:static;';
		$vw_bakery_custom_css .='} ';
	}

	$vw_bakery_footer_social_icons_font_size = get_theme_mod('vw_bakery_footer_social_icons_font_size','16');
	$vw_bakery_custom_css .='.copyright .widget i{';
		$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_footer_social_icons_font_size).'px;';
	$vw_bakery_custom_css .='}';

	$vw_bakery_align_footer_social_icon = get_theme_mod('vw_bakery_align_footer_social_icon');
	if($vw_bakery_align_footer_social_icon != false){
		$vw_bakery_custom_css .='.copyright .widget{';
			$vw_bakery_custom_css .='text-align: '.esc_attr($vw_bakery_align_footer_social_icon).';';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='
		@media screen and (max-width:720px) {
			.copyright .widget{';
			$vw_bakery_custom_css .='text-align: center;} }';
	}

	$vw_bakery_copyright_padding_top_bottom = get_theme_mod('vw_bakery_copyright_padding_top_bottom');
	if($vw_bakery_copyright_padding_top_bottom != false){
		$vw_bakery_custom_css .='#footer-2{';
			$vw_bakery_custom_css .='padding-top: '.esc_attr($vw_bakery_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_bakery_copyright_padding_top_bottom).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_footer_background_image = get_theme_mod('vw_bakery_footer_background_image');
	if($vw_bakery_footer_background_image != false){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background: url('.esc_attr($vw_bakery_footer_background_image).'); background-size: cover;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_img_footer','scroll');
	if($vw_bakery_theme_lay == 'fixed'){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background-attachment: fixed !important;';
		$vw_bakery_custom_css .='}';
	}elseif ($vw_bakery_theme_lay == 'scroll'){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background-attachment: scroll !important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_footer_img_position = get_theme_mod('vw_bakery_footer_img_position','center center');
	if($vw_bakery_footer_img_position != false){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background-position: '.esc_attr($vw_bakery_footer_img_position).'!important;';
		$vw_bakery_custom_css .='}';
	} 

	/*----------------Sroll to top Settings ------------------*/

	$vw_bakery_scroll_to_top_font_size = get_theme_mod('vw_bakery_scroll_to_top_font_size');
	if($vw_bakery_scroll_to_top_font_size != false){
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_scroll_to_top_font_size).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_scroll_to_top_padding = get_theme_mod('vw_bakery_scroll_to_top_padding');
	$vw_bakery_scroll_to_top_padding = get_theme_mod('vw_bakery_scroll_to_top_padding');
	if($vw_bakery_scroll_to_top_padding != false){
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='padding-top: '.esc_attr($vw_bakery_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_bakery_scroll_to_top_padding).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_scroll_to_top_width = get_theme_mod('vw_bakery_scroll_to_top_width');
	if($vw_bakery_scroll_to_top_width != false){
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='width: '.esc_attr($vw_bakery_scroll_to_top_width).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_scroll_to_top_height = get_theme_mod('vw_bakery_scroll_to_top_height');
	if($vw_bakery_scroll_to_top_height != false){
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='height: '.esc_attr($vw_bakery_scroll_to_top_height).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_scroll_to_top_border_radius = get_theme_mod('vw_bakery_scroll_to_top_border_radius');
	if($vw_bakery_scroll_to_top_border_radius != false){
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='border-radius: '.esc_attr($vw_bakery_scroll_to_top_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_bakery_social_icon_font_size = get_theme_mod('vw_bakery_social_icon_font_size');
	if($vw_bakery_social_icon_font_size != false){
		$vw_bakery_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_social_icon_font_size).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_social_icon_padding = get_theme_mod('vw_bakery_social_icon_padding');
	if($vw_bakery_social_icon_padding != false){
		$vw_bakery_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_bakery_custom_css .='padding: '.esc_attr($vw_bakery_social_icon_padding).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_social_icon_width = get_theme_mod('vw_bakery_social_icon_width');
	if($vw_bakery_social_icon_width != false){
		$vw_bakery_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_bakery_custom_css .='width: '.esc_attr($vw_bakery_social_icon_width).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_social_icon_height = get_theme_mod('vw_bakery_social_icon_height');
	if($vw_bakery_social_icon_height != false){
		$vw_bakery_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_bakery_custom_css .='height: '.esc_attr($vw_bakery_social_icon_height).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_social_icon_border_radius = get_theme_mod('vw_bakery_social_icon_border_radius');
	if($vw_bakery_social_icon_border_radius != false){
		$vw_bakery_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_bakery_custom_css .='border-radius: '.esc_attr($vw_bakery_social_icon_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_bakery_related_product_show_hide = get_theme_mod('vw_bakery_related_product_show_hide',true);
	if($vw_bakery_related_product_show_hide != true){
		$vw_bakery_custom_css .='.related.products{';
			$vw_bakery_custom_css .='display: none;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_products_padding_top_bottom = get_theme_mod('vw_bakery_products_padding_top_bottom');
	if($vw_bakery_products_padding_top_bottom != false){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_bakery_custom_css .='padding-top: '.esc_attr($vw_bakery_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_bakery_products_padding_top_bottom).'!important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_products_padding_left_right = get_theme_mod('vw_bakery_products_padding_left_right');
	if($vw_bakery_products_padding_left_right != false){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_bakery_custom_css .='padding-left: '.esc_attr($vw_bakery_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_bakery_products_padding_left_right).'!important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_products_box_shadow = get_theme_mod('vw_bakery_products_box_shadow');
	if($vw_bakery_products_box_shadow != false){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_bakery_custom_css .='box-shadow: '.esc_attr($vw_bakery_products_box_shadow).'px '.esc_attr($vw_bakery_products_box_shadow).'px '.esc_attr($vw_bakery_products_box_shadow).'px #ddd;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_products_border_radius = get_theme_mod('vw_bakery_products_border_radius');
	if($vw_bakery_products_border_radius != false){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_bakery_custom_css .='border-radius: '.esc_attr($vw_bakery_products_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_products_btn_padding_top_bottom = get_theme_mod('vw_bakery_products_btn_padding_top_bottom');
	if($vw_bakery_products_btn_padding_top_bottom != false){
		$vw_bakery_custom_css .='.woocommerce a.button{';
			$vw_bakery_custom_css .='padding-top: '.esc_attr($vw_bakery_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vw_bakery_products_btn_padding_top_bottom).' !important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_products_btn_padding_left_right = get_theme_mod('vw_bakery_products_btn_padding_left_right');
	if($vw_bakery_products_btn_padding_left_right != false){
		$vw_bakery_custom_css .='.woocommerce a.button{';
			$vw_bakery_custom_css .='padding-left: '.esc_attr($vw_bakery_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vw_bakery_products_btn_padding_left_right).' !important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_products_button_border_radius = get_theme_mod('vw_bakery_products_button_border_radius', 0);
	if($vw_bakery_products_button_border_radius != false){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$vw_bakery_custom_css .='border-radius: '.esc_attr($vw_bakery_products_button_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_woocommerce_sale_position = get_theme_mod( 'vw_bakery_woocommerce_sale_position','right');
    if($vw_bakery_woocommerce_sale_position == 'left'){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_bakery_custom_css .='left: -10px; right: auto;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_woocommerce_sale_position == 'right'){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_bakery_custom_css .='left: auto; right: 0;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_woocommerce_sale_font_size = get_theme_mod('vw_bakery_woocommerce_sale_font_size');
	if($vw_bakery_woocommerce_sale_font_size != false){
		$vw_bakery_custom_css .='.woocommerce span.onsale{';
			$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_woocommerce_sale_font_size).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_woocommerce_sale_padding_top_bottom = get_theme_mod('vw_bakery_woocommerce_sale_padding_top_bottom');
	if($vw_bakery_woocommerce_sale_padding_top_bottom != false){
		$vw_bakery_custom_css .='.woocommerce span.onsale{';
			$vw_bakery_custom_css .='padding-top: '.esc_attr($vw_bakery_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_bakery_woocommerce_sale_padding_top_bottom).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_woocommerce_sale_padding_left_right = get_theme_mod('vw_bakery_woocommerce_sale_padding_left_right');
	if($vw_bakery_woocommerce_sale_padding_left_right != false){
		$vw_bakery_custom_css .='.woocommerce span.onsale{';
			$vw_bakery_custom_css .='padding-left: '.esc_attr($vw_bakery_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($vw_bakery_woocommerce_sale_padding_left_right).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_woocommerce_sale_border_radius = get_theme_mod('vw_bakery_woocommerce_sale_border_radius', 0);
	if($vw_bakery_woocommerce_sale_border_radius != false){
		$vw_bakery_custom_css .='.woocommerce span.onsale{';
			$vw_bakery_custom_css .='border-radius: '.esc_attr($vw_bakery_woocommerce_sale_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$vw_bakery_logo_padding = get_theme_mod('vw_bakery_logo_padding');
	if($vw_bakery_logo_padding != false){
		$vw_bakery_custom_css .='.logo{';
			$vw_bakery_custom_css .='padding: '.esc_attr($vw_bakery_logo_padding).'!important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_logo_margin = get_theme_mod('vw_bakery_logo_margin');
	if($vw_bakery_logo_margin != false){
		$vw_bakery_custom_css .='.logo{';
			$vw_bakery_custom_css .='margin: '.esc_attr($vw_bakery_logo_margin).';';
		$vw_bakery_custom_css .='}';
	}

	// Site title Font Size
	$vw_bakery_site_title_font_size = get_theme_mod('vw_bakery_site_title_font_size');
	if($vw_bakery_site_title_font_size != false){
		$vw_bakery_custom_css .='.logo h1 a, .logo p.site-title a{';
			$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_site_title_font_size).';';
		$vw_bakery_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_bakery_site_tagline_font_size = get_theme_mod('vw_bakery_site_tagline_font_size');
	if($vw_bakery_site_tagline_font_size != false){
		$vw_bakery_custom_css .='.logo p.site-description{';
			$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_site_tagline_font_size).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_site_title_color = get_theme_mod('vw_bakery_site_title_color');
	if($vw_bakery_site_title_color != false){
		$vw_bakery_custom_css .='p.site-title a{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_site_title_color).'!important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_site_tagline_color = get_theme_mod('vw_bakery_site_tagline_color');
	if($vw_bakery_site_tagline_color != false){
		$vw_bakery_custom_css .='.logo p.site-description{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_site_tagline_color).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_logo_width = get_theme_mod('vw_bakery_logo_width');
	if($vw_bakery_logo_width != false){
		$vw_bakery_custom_css .='.logo img{';
			$vw_bakery_custom_css .='width: '.esc_attr($vw_bakery_logo_width).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_logo_height = get_theme_mod('vw_bakery_logo_height');
	if($vw_bakery_logo_height != false){
		$vw_bakery_custom_css .='.logo img{';
			$vw_bakery_custom_css .='height: '.esc_attr($vw_bakery_logo_height).';';
		$vw_bakery_custom_css .='}';
	}

	// Woocommerce img

	$vw_bakery_shop_featured_image_border_radius = get_theme_mod('vw_bakery_shop_featured_image_border_radius', 0);
	if($vw_bakery_shop_featured_image_border_radius != false){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product a img{';
			$vw_bakery_custom_css .='border-radius: '.esc_attr($vw_bakery_shop_featured_image_border_radius).'px;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_shop_featured_image_box_shadow = get_theme_mod('vw_bakery_shop_featured_image_box_shadow');
	if($vw_bakery_shop_featured_image_box_shadow != false){
		$vw_bakery_custom_css .='.woocommerce ul.products li.product a img{';
				$vw_bakery_custom_css .='box-shadow: '.esc_attr($vw_bakery_shop_featured_image_box_shadow).'px '.esc_attr($vw_bakery_shop_featured_image_box_shadow).'px '.esc_attr($vw_bakery_shop_featured_image_box_shadow).'px #ddd;';
		$vw_bakery_custom_css .='}';
	}

	// menus

	$vw_bakery_header_menus_color = get_theme_mod('vw_bakery_header_menus_color');
	if($vw_bakery_header_menus_color != false){
		$vw_bakery_custom_css .='.main-navigation a{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_header_menus_color).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_header_menus_hover_color = get_theme_mod('vw_bakery_header_menus_hover_color');
	if($vw_bakery_header_menus_hover_color != false){
		$vw_bakery_custom_css .='.main-navigation a:hover{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_header_menus_hover_color).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_header_submenus_color = get_theme_mod('vw_bakery_header_submenus_color');
	if($vw_bakery_header_submenus_color != false){
		$vw_bakery_custom_css .='.main-navigation ul ul a{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_header_submenus_color).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_header_submenus_hover_color = get_theme_mod('vw_bakery_header_submenus_hover_color');
	if($vw_bakery_header_submenus_hover_color != false){
		$vw_bakery_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_header_submenus_hover_color).';';
		$vw_bakery_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$vw_bakery_preloader_bg_color = get_theme_mod('vw_bakery_preloader_bg_color');
	if($vw_bakery_preloader_bg_color != false){
		$vw_bakery_custom_css .='#preloader{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_preloader_bg_color).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_preloader_border_color = get_theme_mod('vw_bakery_preloader_border_color');
	if($vw_bakery_preloader_border_color != false){
		$vw_bakery_custom_css .='.loader-line{';
			$vw_bakery_custom_css .='border-color: '.esc_attr($vw_bakery_preloader_border_color).'!important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_single_blog_post_navigation_show_hide = get_theme_mod('vw_bakery_single_blog_post_navigation_show_hide',true);
	if($vw_bakery_single_blog_post_navigation_show_hide != true){
		$vw_bakery_custom_css .='.post-navigation{';
			$vw_bakery_custom_css .='display: none;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_preloader_bg_img = get_theme_mod('vw_bakery_preloader_bg_img');
	if($vw_bakery_preloader_bg_img != false){
		$vw_bakery_custom_css .='#preloader{';
			$vw_bakery_custom_css .='background: url('.esc_attr($vw_bakery_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$vw_bakery_custom_css .='}';
	}

	// Header Background Color
	$vw_bakery_header_background_color = get_theme_mod('vw_bakery_header_background_color');
	if($vw_bakery_header_background_color != false){
		$vw_bakery_custom_css .='.home-page-header{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_header_background_color).' !important;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_header_img_position = get_theme_mod('vw_bakery_header_img_position','center top');
	if($vw_bakery_header_img_position != false){
		$vw_bakery_custom_css .='#header{';
			$vw_bakery_custom_css .='background-position: '.esc_attr($vw_bakery_header_img_position).'!important;';
		$vw_bakery_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$vw_bakery_button_footer_heading_letter_spacing = get_theme_mod('vw_bakery_button_footer_heading_letter_spacing',1);
	$vw_bakery_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$vw_bakery_custom_css .='letter-spacing: '.esc_attr($vw_bakery_button_footer_heading_letter_spacing).'px;';
	$vw_bakery_custom_css .='}';

	$vw_bakery_button_footer_font_size = get_theme_mod('vw_bakery_button_footer_font_size','25');
	$vw_bakery_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$vw_bakery_custom_css .='font-size: '.esc_attr($vw_bakery_button_footer_font_size).'px;';
	$vw_bakery_custom_css .='}';

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_button_footer_text_transform','Capitalize');
	if($vw_bakery_theme_lay == 'Capitalize'){
		$vw_bakery_custom_css .='#footer h3{';
			$vw_bakery_custom_css .='text-transform:Capitalize;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_theme_lay == 'Lowercase'){
		$vw_bakery_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_bakery_custom_css .='text-transform:Lowercase;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_theme_lay == 'Uppercase'){
		$vw_bakery_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_bakery_custom_css .='text-transform:Uppercase;';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_footer_heading_weight = get_theme_mod('vw_bakery_footer_heading_weight','');
	if($vw_bakery_footer_heading_weight != false){
		$vw_bakery_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$vw_bakery_custom_css .='font-weight: '.esc_attr($vw_bakery_footer_heading_weight).';';
		$vw_bakery_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_footer_template','vw-bakery-footer-one');
    if($vw_bakery_theme_lay == 'vw-bakery-footer-one'){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='';
		$vw_bakery_custom_css .='}';

	}else if($vw_bakery_theme_lay == 'vw-bakery-footer-two'){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_bakery_custom_css .='color:#000;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#footer ul li::before{';
			$vw_bakery_custom_css .='background:#000;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_bakery_custom_css .='border: 1px solid #000;';
		$vw_bakery_custom_css .='}';

	}else if($vw_bakery_theme_lay == 'vw-bakery-footer-three'){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background: #232524;';
		$vw_bakery_custom_css .='}';
	}
	else if($vw_bakery_theme_lay == 'vw-bakery-footer-four'){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background: #f7f7f7;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_bakery_custom_css .='color:#000;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#footer ul li::before{';
			$vw_bakery_custom_css .='background:#000;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_bakery_custom_css .='border: 1px solid #000;';
		$vw_bakery_custom_css .='}';
	}
	else if($vw_bakery_theme_lay == 'vw-bakery-footer-five'){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_responsive_preloader_hide = get_theme_mod('vw_bakery_responsive_preloader_hide',false);
	if($vw_bakery_responsive_preloader_hide == true && get_theme_mod('vw_bakery_loader_enable',false) == false){
		$vw_bakery_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$vw_bakery_custom_css .='display:none !important;';
		$vw_bakery_custom_css .='} }';
	}

	if($vw_bakery_responsive_preloader_hide == false){
		$vw_bakery_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$vw_bakery_custom_css .='display:none !important;';
		$vw_bakery_custom_css .='} }';
	}