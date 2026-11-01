<?php

	$vw_bakery_first_color = get_theme_mod('vw_bakery_first_color');

	$vw_bakery_custom_css = '';

	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.woocommerce span.onsale, #comments input[type="submit"].submit, #sidebar input[type="submit"], .pagination .current, .pagination a:hover, #comments a.comment-reply-link, #sidebar .tagcloud a:hover, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce span.onsale, #header,
			#sidebar .custom-social-icons i, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .nav-previous a:hover, .nav-next a:hover, .bradcrumbs a:hover, .bradcrumbs span, .post-categories li a, .post-categories li a:hover, nav.navigation.posts-navigation .nav-previous a:hover, nav.navigation.posts-navigation .nav-next a:hover, span.post-page-numbers.current, .post-nav-links a:hover, .woocommerce .added_to_cart.wc-forward,.wc-block-components-order-summary-item__quantity,.wc-block-components-order-summary-item__quantity, a.wc-block-components-checkout-return-to-cart-button{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_first_color).'!important;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='a.content-bttn, .post-main-box h2 a, #footer .tagcloud a:hover, .main-navigation ul ul a, .copyright a:hover, .copyright a:hover{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='.post-info hr, .main-navigation ul ul{';
			$vw_bakery_custom_css .='border-color: '.esc_attr($vw_bakery_first_color).';';
		$vw_bakery_custom_css .='}';
	}

	if($vw_bakery_first_color != false){
		$vw_bakery_custom_css .='@media screen and (max-width: 720px){
		.page-template-custom-home-page #header{';
			$vw_bakery_custom_css .='background: '.esc_attr($vw_bakery_first_color). ';';
		$vw_bakery_custom_css .='} }';
	}

	/*------------ Second highlight color --------------*/

	$vw_bakery_second_color = get_theme_mod('vw_bakery_second_color');

	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='.more-btn a:hover, .pagination span, .pagination a, input[type="submit"], #comments a.comment-reply-link:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .products li:hover span.onsale, .carousel-control-prev-icon i:hover, .carousel-control-next-icon i:hover, #sidebarcustom-social-icons i:hover, #footer .custom-social-icons i:hover, #footer input[type="submit"], .page-content .read-moresec a.error-btn:hover, .woocommerce nav.woocommerce-pagination ul li a, .nav-previous a, .nav-next a, .scrollup i, #preloader, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, nav.navigation.posts-navigation .nav-previous a, nav.navigation.posts-navigation .nav-next a, .wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button, .post-nav-links a{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}

	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='.pagination span, .pagination a, #footer input[type="submit"], #comments a.comment-reply-link:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .products li:hover span.onsale, .carousel-control-prev-icon i:hover, .carousel-control-next-icon i:hover, #footer-2, #sidebar .custom-social-icons i:hover, #footer .custom-social-icons i:hover, #sidebar .woocommerce-product-search button:hover, .entry-content .wp-block-button__link, .entry-content .wp-block-tag-cloud a:hover, .wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_second_color).'!important;';
		$vw_bakery_custom_css .='}';
	}

	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='#heade-top i, .post-main-box:hover h2 a, .post-main-box:hover a, .main-navigation a:hover, #footer li a:hover, a.rsswidget, .main-navigation ul.sub-menu a:hover, .sidebar .textwidget p a, .textwidget p a, #comments p a, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .product_meta a, span.tagged_as a,#sidebar a.custom_read_more:hover, #footer .custom-social-icons i, #footer a.custom_read_more, #sidebar ul li a:hover, .single-post .post-info:hover .entry-date a, .single-post .post-info:hover .entry-author a, nav.woocommerce-MyAccount-navigation ul li a:hover, .left-box p a:hover, .right-box p a:hover, .logo .site-title a:hover, #slider .inner_carousel h1 a:hover{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='.woocommerce-product-details__short-description p a, .textwidget p a, .entry-content a, .sidebar p a, #comments p a, .comment-meta.commentmetadata a, nav.woocommerce-MyAccount-navigation ul li a:hover{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_second_color).'!important;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='.more-btn a:hover, #footer .custom-social-icons i, #footer .custom-social-icons i:hover, .page-content .read-moresec a.error-btn:hover{';
			$vw_bakery_custom_css .='border-color: '.esc_attr($vw_bakery_second_color).';';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='.wp-block-woocommerce-empty-cart-block .wc-block-grid__product-onsale{';
			$vw_bakery_custom_css .='border-color: '.esc_attr($vw_bakery_second_color).'!important;';
		$vw_bakery_custom_css .='}';
	}
	if($vw_bakery_second_color != false){
		$vw_bakery_custom_css .='@media screen and (max-width: 720px){
		.search-box,.toggle-nav{';
			$vw_bakery_custom_css .='background: '.esc_attr($vw_bakery_second_color). ';';
		$vw_bakery_custom_css .='} }';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_slider_content_option','Center');
    if($vw_bakery_theme_lay == 'Left'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:left; left:13%; right:45%;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Center'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:center; left:23%; right:23%;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Right'){
		$vw_bakery_custom_css .='#slider .carousel-caption{';
			$vw_bakery_custom_css .='text-align:right; left:45%; right:13%;';
		$vw_bakery_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_bakery_theme_lay = get_theme_mod( 'vw_bakery_width_option','Full Width');
    if($vw_bakery_theme_lay == 'Boxed'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.page-template-custom-home-page header{';
			$vw_bakery_custom_css .='position: relative;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.scrollup i{';
			$vw_bakery_custom_css .='right: 100px;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.scrollup.left i{';
			$vw_bakery_custom_css .='left: 100px;';
		$vw_bakery_custom_css .='}';
	}else if($vw_bakery_theme_lay == 'Wide Width'){
		$vw_bakery_custom_css .='body{';
			$vw_bakery_custom_css .='width: 100%;padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
		$vw_bakery_custom_css .='}';
		$vw_bakery_custom_css .='.page-template-custom-home-page header{';
			$vw_bakery_custom_css .='position: relative;';
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

	//-----------------------Menus Color --------------------------

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

	/*-------------------- Responsive ------------------*/

	$vw_bakery_resp_menu_toggle_btn_color = get_theme_mod('vw_bakery_resp_menu_toggle_btn_color');
	if($vw_bakery_resp_menu_toggle_btn_color != false){
		$vw_bakery_custom_css .='.toggle-nav i{';
			$vw_bakery_custom_css .='color: '.esc_attr($vw_bakery_resp_menu_toggle_btn_color).';';
		$vw_bakery_custom_css .='}';
	}

	/*-------------------- Slider show/hide css ------------------*/
	// $vw_bakery_slider = get_theme_mod( 'vw_bakery_slider_hide_show',false);

	// if ($vw_bakery_slider == false) {
	// 	$vw_bakery_custom_css .='.page-template-custom-home-page #header{';
	// 		$vw_bakery_custom_css .='position: static; background-color: #311f15;';
	// 	$vw_bakery_custom_css .='}';
	// 	$vw_bakery_custom_css .='.page-template-custom-home-page .nav-header{';
	// 		$vw_bakery_custom_css .='border-bottom: 0;';
	// 	$vw_bakery_custom_css .='}';
	// }

	$vw_bakery_button_font_size = get_theme_mod('vw_bakery_button_font_size',14);
	$vw_bakery_custom_css .='a.content-bttn{';
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

	/*-------------------- Copyright ------------------*/
	$vw_bakery_footer_background_image = get_theme_mod('vw_bakery_footer_background_image');
	if($vw_bakery_footer_background_image != false){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background: url('.esc_attr($vw_bakery_footer_background_image).');';
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

	// Header Background Color
	$vw_bakery_header_background_color = get_theme_mod('vw_bakery_header_background_color');
	if($vw_bakery_header_background_color != false){
		$vw_bakery_custom_css .='.page-template-custom-home-page #header{';
			$vw_bakery_custom_css .='background-color: '.esc_attr($vw_bakery_header_background_color).';';
		$vw_bakery_custom_css .='}';
	}

	$vw_bakery_footer_img_position = get_theme_mod('vw_bakery_footer_img_position','center center');
	if($vw_bakery_footer_img_position != false){
		$vw_bakery_custom_css .='#footer{';
			$vw_bakery_custom_css .='background-position: '.esc_attr($vw_bakery_footer_img_position).'!important;';
		$vw_bakery_custom_css .='}';
	} 

	$vw_bakery_header_img_position = get_theme_mod('vw_bakery_header_img_position','center top');
	if($vw_bakery_header_img_position != false){
		$vw_bakery_custom_css .='.page-template-custom-home-page #header{';
			$vw_bakery_custom_css .='background-position: '.esc_attr($vw_bakery_header_img_position).'!important;';
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
		$vw_bakery_custom_css .='#footer h3, #footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_bakery_custom_css .='color:#000 !important;';
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
		$vw_bakery_custom_css .='#footer h3, #footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_bakery_custom_css .='color:#000 !important;';
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