<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>

    <style>
        /*
 @media (min-width:320px) { #contact-home-01{display:none;} }
 @media (min-width:480px) { #contact-home-01{display:none;} }
 @media (min-width:1025px) { #contact-home-01{display:block;} }
 */

        @media screen and (min-width: 0px) and (max-width: 400px) {
            #contact-home-01 {
                display: none;
            }

            /* show it on small screens */
        }

        @media screen and (min-width: 401px) and (max-width: 1024px) {
            #contact-home-01 {
                display: block;
            }

            /* hide it elsewhere */
        }
    </style>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '799721082058666');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
            src="https://www.facebook.com/tr?id=799721082058666&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <style>
        #menu-item-8733>a {
            color: #fff !important;
        }

        #menu-item-7515>a {
            color: #fff !important;
        }

        #menu-item-6854>a {
            color: #fff !important;
        }

        #menu-item-6747>a {
            color: #fff !important;
        }

        #menu-item-7925>a {
            color: #fff !important;
        }

        #menu-item-7925>a {
            color: #fff !important;
        }

        #menu-item-7492>a {
            color: #fff !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://sindhbank.com.pk/wp-content/themes/consulting/assets/dt/datatables.min.css" />
    <link href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://sindhbank.com.pk/wp-content/themes/consulting/assets/dt/datatables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
</head>

<body <?php body_class(); ?>>

    <!-- custom menu control -->

    <?php /*if(is_page( 'islamic-test-page' ) ) { ?>

    <style type="text/css">
        .object327{display:none;}
    </style>
<?php
   wp_nav_menu(array(
    'menu'           => 'islamic banking',// Do not fall back to first non-empty menu.
   
));

   wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) );

} */ ?>

    <?php do_action('consulting_before_header'); ?>
    <div id="wrapper">
        <div id="fullpage" class="content_wrapper">
            <?php if (!is_404()): ?>
                <?php
                $consulting_config = consulting_config();
                $logo_tmp_src = '';
                if (!empty($consulting_config['layout']) && $consulting_config['layout'] != 'layout_1' && $consulting_config['layout'] != 'layout_12') {
                    $logo_tmp_src = $consulting_config['layout'] . '/';
                }
                $wc_cart_hide = get_theme_mod('wc_cart_hide', false);
                $wc_topbar_cart_hide = get_theme_mod('wc_topbar_cart_hide', false);
                ?>
                <header id="header">
                    <!-- top menu start-->
                    <style>
                        div.scrollmenu {
                            background-color: #333;
                            overflow: auto;
                            white-space: nowrap;
                        }

                        div.scrollmenu a {
                            display: inline-block;
                            color: white;
                            text-align: center;
                            padding: 14px;
                            text-decoration: none;
                        }

                        div.scrollmenu a:hover {
                            background-color: #777;
                        }

                        @media (min-width:1025px) {
                            .scrollmenu {
                                display: none;
                            }
                        }
                    </style>

                    <div class="scrollmenu">
                        <a href="<?php echo site_url(); ?>">Conventional</a>
                        <a href="<?php echo site_url(); ?>/islamic-banking/">Islamic</a>
                        <a href="<?php echo site_url(); ?>/branch-atm-location/">Branch & ATM Location</a>
                        <a href="<?php echo site_url(); ?>/core-values/">Core Values</a>
                        <a href="<?php echo site_url(); ?>/careers/">Careers</a>
                        <a href="<?php echo site_url(); ?>/complaints/">Complaints</a>
                        <a href="https://smsbanking.sindhbank.com.pk/">Online SMS Banking <i class="icon_22px fa fa-globe"></i></a>
                    </div>


                    <!--A2Z Start Menu-->
                    <div class="stm-header stm-header__hb a2z_custom_menu" id="stm_stm_hb_settings" data-cya11y-org-font-size="13" style="font-size: 13px;">

                        <div class="stm-header__row_color stm-header__row_color_top elements_in_row_3" data-cya11y-org-font-size="13" style="font-size: 13px;">
                            <div class="container" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                <div class="stm-header__row stm-header__row_top" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                    <div class="stm-header__cell stm-header__cell_left" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                        <div class="stm-header__element object3654 stm-header__element_" data-cya11y-org-font-size="13" style="font-size: 13px;">


                                            <div class="stm-dropdown stm-dropdown_style_1" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                <style type="text/css">
                                                    .stm-header__element.object3654 .dropdown-toggle:after {
                                                        border-top-color: #ffffff !important;
                                                    }

                                                    .stm-header__element.object3654 .dropdown-toggle,
                                                    .stm-header__element.object3654 .stm-switcher__option {
                                                        color: #ffffff !important;
                                                    }
                                                </style>
                                                <div class="dropdown" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                    <div class="dropdown-toggle stm_hb_mbc" id="aofYCzlQJv" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" type="button" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                        English </div>

                                                    <ul class="dropdown-list stm_hb_mbc" aria-labelledby="aofYCzlQJv">
                                                        <li data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                            <a href="#" class="stm-switcher__option" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                                German </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="stm-header__cell stm-header__cell_center" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                        <div class="stm-header__element object285 stm-header__element_default" data-cya11y-org-font-size="13" style="font-size: 13px;">


                                            <div class="stm-navigation heading_font stm-navigation__default stm-navigation__default stm-navigation__none stm-navigation__" data-cya11y-org-font-size="16" style="font-size: 16px;">

                                                <ul>
                                                    <li id="menu-item-7492" class="noborder menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-7492" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/" aria-current="page" data-cya11y-org-font-size="14" style="font-size: 14px;">Conventional</a></li>
                                                    <li id="menu-item-7925" class="noborder menu-item menu-item-type-custom menu-item-object-custom menu-item-7925" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/islamic-banking/" data-cya11y-org-font-size="14" style="font-size: 14px;">Islamic</a></li>
                                                    <li id="menu-item-16205" class="noborder menu-item menu-item-type-custom menu-item-object-custom menu-item-16205" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/branch-locator/" data-cya11y-org-font-size="14" style="font-size: 14px;">Branches &amp; ATMS</a></li>
                                                    <li id="menu-item-6854" class="noborder menu-item menu-item-type-post_type menu-item-object-page menu-item-6854" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/core-values/" data-cya11y-org-font-size="14" style="font-size: 14px;">Core Values</a></li>
                                                    <li id="menu-item-7515" class="noborder menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7515 href_empty" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">Complaints<span class="stm_mobile__dropdown"></span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-7513" class="noborder menu-item menu-item-type-post_type menu-item-object-page menu-item-7513 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/complaints/" data-cya11y-org-font-size="14" style="font-size: 14px;">Complaints</a></li>
                                                            <li id="menu-item-7007" class="noborder menu-item menu-item-type-post_type menu-item-object-page menu-item-7007 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/whistle-blowing/" data-cya11y-org-font-size="14" style="font-size: 14px;">Whistle Blowing</a></li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-8733" class="noborder menu-item menu-item-type-custom menu-item-object-custom menu-item-8733" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/careers/" data-cya11y-org-font-size="14" style="font-size: 14px;">Careers</a></li>
                                                    <li id="menu-item-7514" class="noborder menu-item menu-item-type-custom menu-item-object-custom menu-item-7514" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://smsbanking.sindhbank.com.pk/" data-cya11y-org-font-size="14" style="font-size: 14px;">Online SMS Banking <i class="icon_22px fa fa-globe"></i></a></li>
                                                </ul>



                                            </div>

                                        </div>
                                    </div>
                                    <div class="stm-header__cell stm-header__cell_right" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                        <div class="stm-header__element object420 stm-header__element_icon_only" data-cya11y-org-font-size="13" style="font-size: 13px;">

                                            <div class="stm-socials" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                <a href="https://www.facebook.com/" class="stm-socials__icon icon_11px stm-socials__icon_icon_only" target="_blank" title="Social item" data-cya11y-org-font-size="15" style="font-size: 15px;">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                                <a href="https://twitter.com/" class="stm-socials__icon icon_11px stm-socials__icon_icon_only" target="_blank" title="Social item" data-cya11y-org-font-size="15" style="font-size: 15px;">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="https://www.instagram.com/" class="stm-socials__icon icon_11px stm-socials__icon_icon_only" target="_blank" title="Social item" data-cya11y-org-font-size="15" style="font-size: 15px;">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="stm-header__element object1062 stm-header__element_" data-cya11y-org-font-size="13" style="font-size: 13px;">

                                            <div class="stm-search stm-search_style_1" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                <div class="stm_widget_search" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                    <div class="stm_widget_search_button" data-cya11y-org-font-size="13" style="font-size: 13px;"><i class="fa fa-search"></i></div>
                                                    <div class="search_wrapper hidden" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                        <div class="hb_search_form_wrap" data-cya11y-org-font-size="13" style="font-size: 13px;"></div>
                                                        <div class="hb_search_form" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                            <form method="get" class="search-form" action="https://www.sindhbank.com.pk/">
                                                                <input type="search" class="form-control" placeholder="Search..." value="" name="s">
                                                                <button type="submit" data-cya11y-org-font-size="13" style="font-size: 13px;"><i class="fa fa-search"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <script type="text/javascript">
                                                jQuery(document).ready(function($) {
                                                    "use strict";
                                                    $(".stm_widget_search_button").on('click', function() {
                                                        $(this).parents('.stm-header__row_color').css('z-index', '100');
                                                        $(this).parent().addClass('active');
                                                    });
                                                    $(".hb_search_form_wrap").on('click', function() {
                                                        $(this).parents('.stm-header__row_color').css('z-index', '20');
                                                        $('.search_wrapper').parent().removeClass('active');
                                                    });
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stm-header__row_color stm-header__row_color_center elements_in_row_2" data-cya11y-org-font-size="13" style="font-size: 13px;">
                            <div class="container" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                <div class="stm-header__row stm-header__row_center" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                    <div class="stm-header__cell stm-header__cell_left" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                        <div class="stm-header__element object278 stm-header__element_" data-cya11y-org-font-size="13" style="font-size: 13px;">


                                            <div class="stm-logo" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                <a href="https://www.sindhbank.com.pk" title="" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                                    <img width="161" height="70" src="https://www.sindhbank.com.pk/wp-content/uploads/2025/10/logo-new-1-5.png" class="attachment-full size-full" alt=""> </a>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="stm-header__cell stm-header__cell_right" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                        <div class="stm-header__element object291 stm-header__element_default" data-cya11y-org-font-size="13" style="font-size: 13px;">


                                            <style type="text/css">
                                                body .stm-header__hb .stm-header__element.object291 .stm-navigation>ul>li:hover>a,
                                                body .stm-header__hb .stm-header__element.object291 .stm-navigation>ul>li>a:hover {
                                                    color: #262626 !important;
                                                }

                                                .stm-header__hb .stm-header__element.object291 .stm-navigation>ul>li .sub-menu li a {
                                                    color: #4e8c43 !important;
                                                }

                                                .stm-header__hb .stm-header__element.object291 .stm-navigation>ul>li .sub-menu li a:hover {
                                                    color: #262626 !important;
                                                }
                                            </style>

                                            <div class="stm-navigation heading_font stm-navigation__default stm-navigation__default stm-navigation__none stm-navigation__" data-cya11y-org-font-size="16" style="font-size: 16px;">

                                                <ul>
                                                   <li id="menu-item-6453" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6453 href_empty menu-blink" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://sindhwheatprocurement.sindhbank.com.pk" data-cya11y-org-font-size="14" style="font-size: 14px;">Wheat Procurement Center Details<span class="stm_mobile__dropdown"></span></a>
                                                    <li id="menu-item-6453" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6453 href_empty" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">About Us<span class="stm_mobile__dropdown"></span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-6738" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6738 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/company-overview/" data-cya11y-org-font-size="14" style="font-size: 14px;">History &amp; Overview</a></li>
                                                            <li id="menu-item-6804" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6804 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/corporate-objective-corporate-information/" data-cya11y-org-font-size="14" style="font-size: 14px;">Corporate Information</a></li>
                                                            <li id="menu-item-6400" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6400 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/governance/" data-cya11y-org-font-size="14" style="font-size: 14px;">Board of Directors</a></li>
                                                            <li id="menu-item-6399" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6399 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/management/" data-cya11y-org-font-size="14" style="font-size: 14px;">Management</a></li>
                                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6399 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/entity-rating/" data-cya11y-org-font-size="14" style="font-size: 14px;">Entity Rating</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6399 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">Subsidiaries</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6399 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/pattern-of-shareholding/" data-cya11y-org-font-size="14" style="font-size: 14px;">Pattern Of Shareholding</a></li>
                                                            <li id="menu-item-6482" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6482 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/statement-of-ethics-and-business/" data-cya11y-org-font-size="14" style="font-size: 14px;">Statement of Ethics</a></li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-6401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6401" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/financials/" data-cya11y-org-font-size="14" style="font-size: 14px;">Financials</a></li>
                                                    <li id="menu-item-6858" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6858 href_empty" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">Advertisements<span class="stm_mobile__dropdown"></span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-6911" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6911 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/print-ads/" data-cya11y-org-font-size="14" style="font-size: 14px;">Print Ads</a></li>
                                                            <li id="menu-item-7322" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7322 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/tenders/" data-cya11y-org-font-size="14" style="font-size: 14px;">Tenders</a></li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-6403" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6403 href_empty" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">Products<span class="stm_mobile__dropdown"></span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-6406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6406 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/consumer-banking/" data-cya11y-org-font-size="14" style="font-size: 14px;">Consumer Banking</a></li>
                                                            <li id="menu-item-16146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16146 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/women-empowerment-products/" data-cya11y-org-font-size="14" style="font-size: 14px;">Consumer Banking Products for Females</a></li>
                                                            <li id="menu-item-6407" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6407 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/sme-financing/" data-cya11y-org-font-size="14" style="font-size: 14px;">SME Financing</a></li>
                                                            <li id="menu-item-6446" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6446 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/agricultural-loan/" data-cya11y-org-font-size="14" style="font-size: 14px;">Agricultural Loans</a></li>
                                                            <li id="menu-item-16147" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16147 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/pm-youth-loan/" data-cya11y-org-font-size="14" style="font-size: 14px;">PM’s Youth Business &amp; Agriculture Loan Scheme (PMYB&amp;ALS)</a></li>
                                                                                                                         <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16147 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/mera-ghar-mera-ashiana-sbp-scheme/" data-cya11y-org-font-size="14" style="font-size: 14px;">Mera Ghar – Mera Ashiana (SBP Scheme)</a></li>
                                                            <li id="menu-item-6878" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6878 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/saving-accounts/" data-cya11y-org-font-size="14" style="font-size: 14px;">Savings Accounts</a></li>
                                                            <li id="menu-item-16148" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16148 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/rapid-finance/" data-cya11y-org-font-size="14" style="font-size: 14px;">Rapid Finance Facility</a></li>
                                                            <li id="menu-item-16149" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16149 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/solar-finance-facility/" data-cya11y-org-font-size="14" style="font-size: 14px;">Solar Finance Facility</a></li>
                                                            <li id="menu-item-6894" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6894 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/current-accounts/" data-cya11y-org-font-size="14" style="font-size: 14px;">Current Accounts</a></li>
                                                            <li id="menu-item-16144" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16144 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/mohtarma-account/" title="  " data-cya11y-org-font-size="14" style="font-size: 14px;">Mohtarma Account</a></li>
                                                            <li id="menu-item-6896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6896 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/attractive-deposit-schemes/" data-cya11y-org-font-size="14" style="font-size: 14px;">Term Deposits</a></li>
                                                            <li id="menu-item-6905" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6905 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/home-remittance/" data-cya11y-org-font-size="14" style="font-size: 14px;">Home Remittance</a></li>
                                                            <li id="menu-item-6419" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6419 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/mobile-banking/" data-cya11y-org-font-size="14" style="font-size: 14px;">SMS Banking</a></li>
                                                            <li id="menu-item-6930" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6930 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/atm-debit-cards/" data-cya11y-org-font-size="14" style="font-size: 14px;">ATM/Debit Cards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-6476" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6476 href_empty" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">Information<span class="stm_mobile__dropdown"></span></a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-6922" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6922 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/public-notices/" data-cya11y-org-font-size="14" style="font-size: 14px;">Public Notices</a></li>
                                                            <li id="menu-item-6921" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6921 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/press-releases/" data-cya11y-org-font-size="14" style="font-size: 14px;">Press Releases</a></li>
                                                            <li id="menu-item-6946" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6946 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/quick-links/" data-cya11y-org-font-size="14" style="font-size: 14px;">Quick Links</a></li>                                    
                                                            <li id="menu-item-16145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16145 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/empowering-women/" title=" " data-cya11y-org-font-size="14" style="font-size: 14px;">Empowering <br>Women</a></li>
                                                            <li id="menu-item-16150" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16150 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/conversion-to-islamic-banking/" data-cya11y-org-font-size="14" style="font-size: 14px;">Conversion to <br>Islamic Banking</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16155 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/trade-services" data-cya11y-org-font-size="14" style="font-size: 14px;">Trade Services</a></li>
                                                            <li id="menu-item-7327" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7327 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/iban/" data-cya11y-org-font-size="14" style="font-size: 14px;">IBAN Generator</a></li>
                                                            <li id="menu-item-8732" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8732 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/kibor-rates/" data-cya11y-org-font-size="14" style="font-size: 14px;">Kibor Rates</a></li>
                                                            <li id="menu-item-7516" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7516 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/forex-rates/" data-cya11y-org-font-size="14" style="font-size: 14px;">Forex Rates</a></li>
                                                            <li id="menu-item-7512" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7512 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/contact-us/" data-cya11y-org-font-size="14" style="font-size: 14px;">Contact Us</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>



                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stm-header__row_color stm-header__row_color_bottom elements_in_row_2" data-cya11y-org-font-size="13" style="font-size: 13px;">
                            <div class="container" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                <div class="stm-header__row stm-header__row_bottom" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                    <div class="stm-header__cell stm-header__cell_left" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                        <div class="stm-header__element object289 stm-header__element_default" data-cya11y-org-font-size="13" style="font-size: 13px;">


                                            <style type="text/css">
                                                body .stm-header__hb .stm-header__element.object289 .stm-navigation>ul>li:hover>a,
                                                body .stm-header__hb .stm-header__element.object289 .stm-navigation>ul>li>a:hover {
                                                    color: #262626 !important;
                                                }

                                                .stm-header__hb .stm-header__element.object289 .stm-navigation>ul>li .sub-menu li a {
                                                    color: #4e8c43 !important;
                                                }

                                                .stm-header__hb .stm-header__element.object289 .stm-navigation>ul>li .sub-menu li a:hover {
                                                    color: #262626 !important;
                                                }
                                            </style>

                                            <div class="stm-navigation heading_font stm-navigation__default stm-navigation__default stm-navigation__none stm-navigation__" data-cya11y-org-font-size="16" style="font-size: 16px;">

                                                <ul>
                                                    <li id="menu-item-6453" class="menu-item menu-item-type-post_type menu-item-object-page menu-blink" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://sindhwheatprocurement.sindhbank.com.pk" data-cya11y-org-font-size="14" style="font-size: 14px;">Wheat Procurement Center Details</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6453 href_empty" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">About Us<span class="stm_mobile__dropdown"></span></a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6738 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/company-overview/" data-cya11y-org-font-size="14" style="font-size: 14px;">History &amp; Overview</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6804 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/corporate-objective-corporate-information/" data-cya11y-org-font-size="14" style="font-size: 14px;">Corporate Information</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6400 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/governance/" data-cya11y-org-font-size="14" style="font-size: 14px;">Board of Directors</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6399 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/management/" data-cya11y-org-font-size="14" style="font-size: 14px;">Management</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6399 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/entity-rating/" data-cya11y-org-font-size="14" style="font-size: 14px;">Entity Rating</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6399 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">Subsidiaries</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6399 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/pattern-of-shareholding/" data-cya11y-org-font-size="14" style="font-size: 14px;">Pattern Of Shareholding</a></li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6482 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/statement-of-ethics-and-business/" data-cya11y-org-font-size="14" style="font-size: 14px;">Statement of Ethics</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6401" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/financials/" data-cya11y-org-font-size="14" style="font-size: 14px;">Financials</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6858 href_empty" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">Advertisements<span class="stm_mobile__dropdown"></span></a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6911 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/print-ads/" data-cya11y-org-font-size="14" style="font-size: 14px;">Print Ads</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7322 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/tenders/" data-cya11y-org-font-size="14" style="font-size: 14px;">Tenders</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6403 href_empty" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">Products<span class="stm_mobile__dropdown"></span></a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6406 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/consumer-banking/" data-cya11y-org-font-size="14" style="font-size: 14px;">Consumer Banking</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16146 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/women-empowerment-products/" data-cya11y-org-font-size="14" style="font-size: 14px;">Consumer Banking Products for Females</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6407 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/sme-financing/" data-cya11y-org-font-size="14" style="font-size: 14px;">SME Financing</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6446 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/agricultural-loan/" data-cya11y-org-font-size="14" style="font-size: 14px;">Agricultural Loans</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16147 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/pm-youth-loan/" data-cya11y-org-font-size="14" style="font-size: 14px;">PM’s Youth Business &amp; Agriculture Loan Scheme (PMYB&amp;ALS)</a></li>
                                                             <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16147 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/mera-ghar-mera-ashiana-sbp-scheme/" data-cya11y-org-font-size="14" style="font-size: 14px;">Mera Ghar – Mera Ashiana (SBP Scheme)</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6878 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/saving-accounts/" data-cya11y-org-font-size="14" style="font-size: 14px;">Savings Accounts</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16148 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/rapid-finance/" data-cya11y-org-font-size="14" style="font-size: 14px;">Rapid Finance Facility</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16149 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/solar-finance-facility/" data-cya11y-org-font-size="14" style="font-size: 14px;">Solar Finance Facility</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6894 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/current-accounts/" data-cya11y-org-font-size="14" style="font-size: 14px;">Current Accounts</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16144 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/mohtarma-account/" title="  " data-cya11y-org-font-size="14" style="font-size: 14px;">Mohtarma Account</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6896 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/attractive-deposit-schemes/" data-cya11y-org-font-size="14" style="font-size: 14px;">Term Deposits</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6905 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/home-remittance/" data-cya11y-org-font-size="14" style="font-size: 14px;">Home Remittance</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6419 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/mobile-banking/" data-cya11y-org-font-size="14" style="font-size: 14px;">SMS Banking</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6930 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/atm-debit-cards/" data-cya11y-org-font-size="14" style="font-size: 14px;">ATM/Debit Cards</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6476 href_empty" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="#" data-cya11y-org-font-size="14" style="font-size: 14px;">Information<span class="stm_mobile__dropdown"></span></a>
                                                        <ul class="sub-menu">
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6922 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/public-notices/" data-cya11y-org-font-size="14" style="font-size: 14px;">Public Notices</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6921 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/press-releases/" data-cya11y-org-font-size="14" style="font-size: 14px;">Press Releases</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6946 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/quick-links/" data-cya11y-org-font-size="14" style="font-size: 14px;">Quick Links</a></li>                                             
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16145 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/empowering-women/" title=" " data-cya11y-org-font-size="14" style="font-size: 14px;">Empowering <br>Women</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16150 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/conversion-to-islamic-banking/" data-cya11y-org-font-size="14" style="font-size: 14px;">Conversion to <br>Islamic Banking</a></li>
                                                            
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16155 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/trade-services" data-cya11y-org-font-size="14" style="font-size: 14px;">Trade Services</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7327 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/iban/" data-cya11y-org-font-size="14" style="font-size: 14px;">IBAN Generator</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8732 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/kibor-rates/" data-cya11y-org-font-size="14" style="font-size: 14px;">Kibor Rates</a></li>
                                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7516 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/forex-rates/" data-cya11y-org-font-size="14" style="font-size: 14px;">Forex Rates</a></li>
                                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7512 stm_col_width_default stm_mega_cols_inside_default" data-cya11y-org-font-size="16" style="font-size: 16px;"><a href="https://www.sindhbank.com.pk/contact-us/" data-cya11y-org-font-size="14" style="font-size: 14px;">Contact Us</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>



                                            </div>

                                        </div>
                                    </div>
                                    <div class="stm-header__cell stm-header__cell_right" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                        <div class="stm-header__element object269 stm-header__element_" data-cya11y-org-font-size="13" style="font-size: 13px;">

                                            <div class="stm-cart stm-cart_style_1" data-cya11y-org-font-size="13" style="font-size: 13px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  top menu end a2z end-->



                    <?php if (defined('STM_HB_VER')): ?>
                        <?php if (is_page('islamic-banking') || is_page('islamic-management') || is_page('islamic-introduction') || is_page('shariah-officers') || is_page('shariah-board') || is_page('islamic-quick-links') || is_page('saadat-sme-products') || is_page('saadat-islamic-products') || is_page('saadat-consumer-banking')  || is_page('saadat-nasheman-home-finance')  || is_page('saadat-auto-finance') || is_page('islamic-press-releases') || is_page('iban-generator') || is_page('islamic-careers') || is_page('islamic-contact-us') || is_page('islamic-financials') || is_page('islamic-advertisements') || is_page('islamic-banking-branches-windows')) {
                            echo do_shortcode("[stm_hb header='islamic-menu']");
                        } else {
                            do_action('stm_hb', array('header' => 'stm_hb_settings'));
                        }
                        ?>
                        <style>
                            #main {
                                padding: 0 0 0px;
                            }
                        </style>
                    <?php else: ?>
                        <?php if (empty($_GET['hide_top_bar'])): ?>
                            <?php if (get_theme_mod('top_bar', true)): ?>
                                <div class="top_bar">
                                    <div class="container">
                                        <?php if (consulting_get_header_style() == 'header_style_6') : ?>
                                            <?php if (class_exists('WooCommerce') && empty($wc_topbar_cart_hide)): ?>
                                                <div class="cart_count_wrapper">
                                                    <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart_count"><i
                                                            class="stm-shopping-cart8"></i><?php get_template_part('partials/mini', 'cart'); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($consulting_config['layout'] == 'layout_19' || $consulting_config['layout'] == 'layout_zurich'): ?>
                                                <?php if ($socials = consulting_get_socials()): ?>
                                                    <div class="header_socials">
                                                        <?php foreach ($socials as $key => $val): ?>
                                                            <a target="_blank" href="<?php echo esc_attr($val); ?>">
                                                                <i class="fa fa-<?php echo esc_attr($key); ?>"></i>
                                                            </a>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php
                                            if (get_theme_mod('wpml_switcher', true)) {
                                                if (function_exists('icl_object_id')) {
                                                    if (get_theme_mod('wpml_switcher_style', true) == 'wpml_default') {
                                                        do_action('wpml_add_language_selector');
                                                    } else {
                                                        consulting_topbar_lang();
                                                    }
                                                }
                                            }

                                            if (stm_check_layout('layout_16')) {
                                                $top_bar_soc_hebrew = consulting_get_socials('top_bar_socials_l13'); ?>
                                                <div class="stm_top_bar_middle">
                                                <?php } ?>
                                                <ul class="top_bar_contacts">
                                                    <?php
                                                    $top_bar_contact_address = get_theme_mod('top_bar_contact_address', esc_html__("1010 Avenue of the Moon New York, NY 10018 US.", 'consulting'));
                                                    $top_bar_contact_address_icon = get_theme_mod('top_bar_contact_address_icon', 'stm-location-2');
                                                    $top_bar_contact_email = get_theme_mod('top_bar_contact_email', 'info@consultingwp.com');
                                                    $top_bar_contact_email_icon = get_theme_mod('top_bar_contact_email_icon', 'stm-email');
                                                    $top_bar_contact_phone = get_theme_mod('top_bar_contact_phone', __("Call free: <strong>212 386 5575</strong>", 'consulting'));
                                                    $top_bar_contact_phone_icon = get_theme_mod('top_bar_contact_phone_icon', 'stm-phone6');
                                                    ?>
                                                    <?php if (!empty($top_bar_contact_phone)): ?>
                                                        <li>
                                                            <i class="<?php echo esc_attr($top_bar_contact_phone_icon); ?>"></i>
                                                            <div class="top_bar_contacts_text">
                                                                <?php printf(_x('%s', 'Top bar contact phone', 'consulting'), $top_bar_contact_phone); ?>
                                                            </div>
                                                        </li>
                                                    <?php endif; ?>
                                                    <?php if (!empty($top_bar_contact_email)): ?>
                                                        <li>
                                                            <i class="<?php echo esc_attr($top_bar_contact_email_icon); ?>"></i>
                                                            <div class="top_bar_contacts_text"><a
                                                                    href="mailto:<?php echo esc_attr($top_bar_contact_email); ?>">
                                                                    <?php printf(_x('%s', 'Top Bar Contact Email', 'consulting'), $top_bar_contact_email); ?></a>
                                                            </div>
                                                        </li>
                                                    <?php endif; ?>
                                                    <?php if (!empty($top_bar_contact_address)): ?>
                                                        <li>
                                                            <i class="<?php echo esc_attr($top_bar_contact_address_icon); ?>"></i>
                                                            <div class="top_bar_contacts_text">
                                                                <?php printf(_x('%s', 'Top bar contact address', 'consulting'), $top_bar_contact_address); ?>
                                                            </div>
                                                        </li>
                                                    <?php endif; ?>
                                                </ul>
                                                <?php if (!empty($top_bar_soc_hebrew)): ?>
                                                    <ul class="stm_l16_top_socials">
                                                        <?php foreach ($top_bar_soc_hebrew as $soc => $soc_link): ?>
                                                            <li>
                                                                <a href="<?php echo esc_url($soc_link) ?>">
                                                                    <i class="fa fa-<?php echo esc_attr($soc); ?>"></i>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>

                                                <?php if (stm_check_layout('layout_16')) { ?>
                                                </div>
                                            <?php } ?>
                                        <?php elseif (consulting_get_header_style() == 'header_style_8') : ?>
                                            <div class="logo media-left media-middle">
                                                <?php if ($logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_default.svg')): ?>
                                                    <?php if (stm_check_layout('layout_16')) {
                                                        $page_ID = consulting_page_id();
                                                        $header_inverse = get_post_meta($page_ID, 'header_inverse', true);
                                                        if ($header_inverse && $logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_default.svg')): ?>
                                                            <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                                    src="<?php echo esc_url($logo); ?>"
                                                                    style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                                    alt="<?php bloginfo('name'); ?>" /></a>
                                                        <?php elseif ($logo = get_theme_mod('dark_logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_dark.svg')): ?>
                                                            <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                                    src="<?php echo esc_url($logo); ?>"
                                                                    style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                                    alt="<?php bloginfo('name'); ?>" /></a>
                                                        <?php else: ?>
                                                            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                                        <?php endif;
                                                    } else { ?>
                                                        <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                                src="<?php echo esc_url($logo); ?>"
                                                                style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                                alt="<?php bloginfo('name'); ?>" /></a>
                                                    <?php } ?>
                                                <?php else: ?>
                                                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <ul class="top_bar_contacts">
                                                <?php
                                                $top_bar_contact_address = get_theme_mod('top_bar_contact_address', esc_html__("1010 Avenue of the Moon New York, NY 10018 US.", 'consulting'));
                                                $top_bar_contact_address_icon = get_theme_mod('top_bar_contact_address_icon', 'stm-location-2');
                                                $top_bar_contact_email = get_theme_mod('top_bar_contact_email', 'info@consultingwp.com');
                                                $top_bar_contact_email_icon = get_theme_mod('top_bar_contact_email_icon', 'stm-email');
                                                $top_bar_contact_phone = get_theme_mod('top_bar_contact_phone', __("Call free: <strong>212 386 5575</strong>", 'consulting'));
                                                $top_bar_contact_phone_icon = get_theme_mod('top_bar_contact_phone_icon', 'stm-phone6');
                                                ?>
                                                <?php if (!empty($top_bar_contact_phone)): ?>
                                                    <li>
                                                        <i class="<?php echo esc_attr($top_bar_contact_phone_icon); ?>"></i>
                                                        <div class="top_bar_contacts_text">
                                                            <?php printf(_x('%s', 'Top bar contact phone', 'consulting'), $top_bar_contact_phone); ?>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if (!empty($top_bar_contact_email)): ?>
                                                    <li>
                                                        <i class="<?php echo esc_attr($top_bar_contact_email_icon); ?>"></i>
                                                        <div class="top_bar_contacts_text">
                                                            <a href="mailto:<?php echo esc_attr($top_bar_contact_email); ?>">
                                                                <?php printf(_x('%s', 'Top bar Contact Email', 'consulting'), $top_bar_contact_email); ?>
                                                            </a>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                                <?php if (!empty($top_bar_contact_address)): ?>
                                                    <li>
                                                        <i class="<?php echo esc_attr($top_bar_contact_address_icon); ?>"></i>
                                                        <div class="top_bar_contacts_text">
                                                            <?php printf(_x('%s', 'Top bar Contact Address', 'consulting'), $top_bar_contact_address); ?>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        <?php else : ?>
                                            <?php
                                            if (get_theme_mod('wpml_switcher', true)) {
                                                if (function_exists('icl_object_id')) {
                                                    if (get_theme_mod('wpml_switcher_style', true) == 'wpml_default') {
                                                        do_action('wpml_add_language_selector');
                                                    } else {
                                                        consulting_topbar_lang();
                                                    }
                                                }
                                            }
                                            $top_bar_info = consulting_get_top_bar_info();
                                            ?>
                                            <div class="top_bar_info_wr">
                                                <?php if (consulting_get_header_style() == 'header_style_4' && ($consulting_config['layout'] == 'layout_13' || $consulting_config['layout'] == 'layout_barcelona')): ?>
                                                    <?php
                                                    $stm_work_hours_l13 = get_theme_mod('stm_work_hours_l13', esc_html__('Mon - Sat 8.00 - 18.00. Sunday CLOSED', 'consulting'));
                                                    $stm_work_hours_l13_icon = get_theme_mod('stm_work_hours_l13_icon', 'fa fa-clock-o');
                                                    $top_bar_search_l13 = get_theme_mod('top_bar_search_l13', true);
                                                    $top_bar_soc = consulting_get_socials('top_bar_socials_l13');
                                                    ?>
                                                    <?php if ($top_bar_search_l13): ?>
                                                        <div class="stm_top_bar_l13-search">
                                                            <?php get_search_form(true); ?>
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="stm_top_bar_l13-center">
                                                        <?php if (!empty($stm_work_hours_l13)): ?>
                                                            <div class="stm_top_bar_unit_l13">
                                                                <i class="<?php echo esc_attr($stm_work_hours_l13_icon); ?>"></i>
                                                                <span class="top_bar_contacts_text">
                                                                    <?php printf(_x('%s', 'Top bar working hours', 'consulting'), $stm_work_hours_l13); ?>
                                                                </span>
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if (!empty($top_bar_soc)): ?>
                                                            <div class="header_socials">
                                                                <?php foreach ($top_bar_soc as $key => $val): ?>
                                                                    <a target="_blank" href="<?php echo esc_attr($val); ?>"><i
                                                                            class="fa fa-<?php echo esc_attr($key); ?>"></i></a>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php else: ?>
                                                    <?php if (stm_check_layout('layout_18')): ?>
                                                        <?php
                                                        $header_l18_btn_text = get_theme_mod('header_l18_btn_text', '');
                                                        $header_l18_btn_link = get_theme_mod('header_l18_btn_link', '');
                                                        if (!empty($header_l18_btn_link) and !empty($header_l18_btn_text)):
                                                        ?>
                                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-block vc_btn3-icon-left vc_btn3-color-theme_style_1"
                                                                href="<?php printf(_x('%s', 'Header button link - ' . $header_l18_btn_link, 'consulting'), $header_l18_btn_link); ?>"
                                                                title="<?php printf(_x('%s', 'Header button label - ' . $header_l18_btn_text, 'consulting'), $header_l18_btn_text); ?>">
                                                                <i class="fa fa-chevron-left vc_btn3-icon"></i>
                                                                <?php printf(_x('%s', 'Header button label - ' . $header_l18_btn_text, 'consulting'), $header_l18_btn_text); ?>
                                                            </a>
                                                        <?php endif; ?>
                                                    <?php else: ?>
                                                        <?php if (count($top_bar_info) > 1): ?>
                                                            <div class="top_bar_info_switcher">
                                                                <div class="active">
                                                                    <span>
                                                                        <?php printf(_x('%s', 'Top bar Active Office', 'consulting'), $top_bar_info[1]['office']); ?>
                                                                    </span>
                                                                </div>
                                                                <ul>
                                                                    <?php foreach ($top_bar_info as $key => $val): ?>
                                                                        <li>
                                                                            <a href="#top_bar_info_<?php echo esc_attr($key); ?>">
                                                                                <?php printf(_x('%s', 'Top bar Office', 'consulting'), $val['office']); ?>
                                                                            </a>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if ($top_bar_info): ?>
                                                        <?php foreach ($top_bar_info as $key => $val): ?>
                                                            <ul class="top_bar_info"
                                                                id="top_bar_info_<?php echo esc_attr($key); ?>" <?php if ($key == 1) {
                                                                                                                    echo ' style="display: block;"';
                                                                                                                } ?>>
                                                                <?php if (!empty($val['address'])): ?>
                                                                    <li>
                                                                        <i class="<?php echo esc_attr($val['address_icon']); ?>"></i>
                                                                        <span>
                                                                            <?php printf(_x('%s', 'Top bar address', 'consulting'), $val['address']); ?>
                                                                        </span>
                                                                    </li>
                                                                <?php endif; ?>
                                                                <?php if (!empty($val['hours'])): ?>
                                                                    <li>
                                                                        <i class="<?php echo esc_attr($val['hours_icon']); ?>"></i>
                                                                        <span>
                                                                            <?php printf(_x('%s', 'Top bar hours', 'consulting'), $val['hours']); ?>
                                                                        </span>
                                                                    </li>
                                                                <?php endif; ?>
                                                                <?php if (!empty($val['phone'])): ?>
                                                                    <li>
                                                                        <i class="<?php echo esc_attr($val['phone_icon']); ?>"></i>
                                                                        <span>
                                                                            <?php printf(_x('%s', 'Top bar phone', 'consulting'), $val['phone']); ?>
                                                                        </span>
                                                                    </li>
                                                                <?php endif; ?>
                                                            </ul>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if (consulting_get_header_style() == 'header_style_5' and $consulting_config['layout'] == 'layout_14'):
                            get_template_part('partials/headers/l14', 'hs5');
                        else: ?>
                            <?php if (consulting_get_header_style() == '' || consulting_get_header_style() == 'header_style_1' || consulting_get_header_style() == 'header_style_3' || consulting_get_header_style() == 'header_style_4'): ?>

                                <div class="header_top clearfix">
                                    <div class="container">
                                        <?php if (consulting_get_header_style() != 'header_style_4' && $socials = consulting_get_socials()): ?>
                                            <div class="header_socials">
                                                <?php foreach ($socials as $key => $val): ?>
                                                    <a target="_blank" href="<?php echo esc_attr($val); ?>"><i
                                                            class="fa fa-<?php echo esc_attr($key); ?>"></i></a>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="logo">
                                            <?php if (consulting_get_header_style() != 'header_style_4' && $logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_default.svg')): ?>
                                                <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                        src="<?php echo esc_url($logo); ?>"
                                                        style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                        alt="<?php bloginfo('name'); ?>" /></a>
                                            <?php elseif (consulting_get_header_style() == 'header_style_4' && $logo = get_theme_mod('dark_logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_dark.svg')): ?>
                                                <?php
                                                $page_ID = consulting_page_id();
                                                $header_inverse = get_post_meta($page_ID, 'header_inverse', true);
                                                $consulting_config = consulting_config();
                                                ?>
                                                <?php if ($consulting_config['layout'] == 'layout_6') : ?>
                                                    <?php
                                                    if ($header_inverse) {
                                                        $logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_default.svg');
                                                    }
                                                    ?>
                                                    <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                            src="<?php echo esc_url($logo); ?>"
                                                            style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                            alt="<?php bloginfo('name'); ?>" /></a>
                                                <?php else : ?>
                                                    <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                            src="<?php echo esc_url($logo); ?>"
                                                            style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                            alt="<?php bloginfo('name'); ?>" /></a>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                            <?php endif; ?>
                                        </div>
                                        <?php if (consulting_get_header_style() == 'header_style_4' and ($consulting_config['layout'] == 'layout_13' || $consulting_config['layout'] == 'layout_barcelona')): ?>
                                            <?php if ($header_address = get_theme_mod('header_address', '')): ?>
                                                <div class="icon_text clearfix">
                                                    <div class="icon"><i
                                                            class="fa <?php echo esc_attr(get_theme_mod('header_address_icon', 'stm-pin_13')); ?>"></i>
                                                    </div>
                                                    <div class="text">
                                                        <?php printf(_x('%s', 'Header address', 'consulting'), $header_address); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($header_hours = get_theme_mod('header_working_hours', __('Write us <a href="mailto:info@consulting.com">info@consulting.com', 'consulting'))): ?>
                                                <div class="icon_text middle clearfix">
                                                    <div class="icon"><i
                                                            class="fa <?php echo esc_attr(get_theme_mod('header_working_hours_icon', 'stm-mail_13')); ?>"></i>
                                                    </div>
                                                    <div class="text">
                                                        <?php printf(_x('%s', 'Header hours', 'consulting'), $header_hours); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (consulting_get_header_style() == 'header_style_4' && $header_phone = get_theme_mod('header_phone', __('<strong>212 386 5575</strong><span data-scroll-to="request-call-back>Request call back</span>>Request call back</span>', 'consulting'))): ?>
                                                <div class="icon_text big last clearfix">
                                                    <div class="icon">
                                                        <i class="fa <?php echo esc_attr(get_theme_mod('header_phone_icon', 'stm-phone_13')); ?>">
                                                        </i>
                                                    </div>
                                                    <div class="text">
                                                        <?php printf(_x('%s', 'Header phone', 'consulting'), $header_phone); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <?php if (consulting_get_header_style() == 'header_style_4' && $header_phone = get_theme_mod('header_phone', '')): ?>
                                                <div class="icon_text big clearfix">
                                                    <div class="icon"><i
                                                            class="fa <?php echo esc_attr(get_theme_mod('header_phone_icon', 'fa-phone')); ?>"></i>
                                                    </div>
                                                    <div class="text">
                                                        <?php printf(_x('%s', 'Header phone', 'consulting'), $header_phone); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($header_hours = get_theme_mod('header_working_hours', '')): ?>
                                                <div class="icon_text clearfix">
                                                    <div class="icon"><i
                                                            class="fa <?php echo esc_attr(get_theme_mod('header_working_hours_icon', 'fa-clock-o')); ?>"></i>
                                                    </div>
                                                    <div class="text">
                                                        <?php printf(_x('%s', 'Header hours', 'consulting'), $header_hours); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($header_address = get_theme_mod('header_address', '')): ?>
                                                <div class="icon_text clearfix">
                                                    <div class="icon"><i
                                                            class="fa <?php echo esc_attr(get_theme_mod('header_address_icon', 'fa-map-marker')); ?>"></i>
                                                    </div>
                                                    <div class="text stm_st_address_1">
                                                        <?php printf(_x('%s', 'Header address', 'consulting'), $header_address); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="top_nav">
                                    <div class="container">
                                        <div class="top_nav_wrapper clearfix">
                                            <?php

                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'consulting-primary_menu',
                                                    'container' => false,
                                                    'depth' => 4,
                                                    'menu_class' => 'main_menu_nav'
                                                )
                                            );
                                            ?>
                                            <?php if (consulting_get_header_style() != 'header_style_4' && $header_phone = get_theme_mod('header_phone', '')): ?>
                                                <div class="icon_text clearfix">
                                                    <div class="icon"><i
                                                            class="fa <?php echo esc_attr(get_theme_mod('header_phone_icon', 'fa-phone')); ?>"></i>
                                                    </div>
                                                    <div class="text">
                                                        <?php printf(_x('%s', 'Header phone', 'consulting'), $header_phone); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (consulting_get_header_style() == 'header_style_4'): ?>
                                                <?php if ($consulting_config['layout'] == 'layout_2') : ?>
                                                    <div class="header_search">
                                                        <a class="js-open-search-box" href="#"><i class="fa fa-search"></i></a>
                                                        <div class="pop-search-box">
                                                            <form method="get" class="pop-search-box_form"
                                                                action="<?php echo esc_url(home_url('/')); ?>">
                                                                <input type="search" class="form-control"
                                                                    placeholder="<?php esc_attr_e('Search...', 'consulting'); ?>"
                                                                    value="<?php echo esc_attr(get_search_query()); ?>"
                                                                    name="s" />
                                                                <button type="submit"><i class="fa fa-search"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <?php if (consulting_get_header_style() == 'header_style_4' && ($consulting_config['layout'] == 'layout_13' || $consulting_config['layout'] == 'layout_barcelona') && class_exists('WooCommerce') && !$wc_cart_hide): ?>
                                                <div class="header_socials">
                                                    <a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="cart_count"><i
                                                            class="stm-cart_13"></i><?php get_template_part('partials/mini', 'cart'); ?>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                            <?php if (consulting_get_header_style() == 'header_style_4' and $socials = consulting_get_socials()): ?>
                                                <div class="header_socials">
                                                    <?php foreach ($socials as $key => $val): ?>
                                                        <a target="_blank" href="<?php echo esc_attr($val); ?>"><i
                                                                class="fa fa-<?php echo esc_attr($key); ?>"></i></a>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif (consulting_get_header_style() == 'header_style_2'): ?>
                                <div class="header_top clearfix">
                                    <div class="container">
                                        <div class="logo media-left media-middle">
                                            <?php if ($logo = get_theme_mod('dark_logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_dark.svg')): ?>
                                                <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                        src="<?php echo esc_url($logo); ?>"
                                                        style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                        alt="<?php bloginfo('name'); ?>" /></a>
                                            <?php else: ?>
                                                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                            <?php endif; ?>
                                        </div>
                                        <div class="top_nav media-body media-middle">
                                            <?php if ($socials = consulting_get_socials()): ?>
                                                <div class="header_socials">
                                                    <?php foreach ($socials as $key => $val): ?>
                                                        <a target="_blank" href="<?php echo esc_attr($val); ?>"><i
                                                                class="fa fa-<?php echo esc_attr($key); ?>"></i></a>
                                                    <?php endforeach; ?>
                                                    <?php if (class_exists('WooCommerce') && !$wc_cart_hide): ?>
                                                        <a href="<?php echo esc_url(wc_get_cart_url()); ?>"
                                                            class="cart_count"><i
                                                                class="stm-cart-2"></i><?php get_template_part('partials/mini', 'cart'); ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            <?php else: ?>
                                                <?php if (class_exists('WooCommerce') && !$wc_cart_hide): ?>
                                                    <div class="header_socials">
                                                        <a href="<?php echo esc_url(wc_get_cart_url()); ?>"
                                                            class="cart_count"><i
                                                                class="stm-cart-2"></i><?php get_template_part('partials/mini', 'cart'); ?>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <div class="top_nav_wrapper clearfix">
                                                <?php
                                                wp_nav_menu(
                                                    array(
                                                        'theme_location' => 'consulting-primary_menu',
                                                        'container' => false,
                                                        'depth' => 4,
                                                        'menu_class' => 'main_menu_nav'
                                                    )
                                                );
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif (consulting_get_header_style() == 'header_style_5') : ?>
                                <div class="header_top clearfix">
                                    <div class="container">
                                        <?php if ($header_phone = get_theme_mod('header_phone', __("<strong>212 714 0177</strong>\n<span>Free call</span>", 'consulting'))): ?>
                                            <div class="info-text __phone-number">
                                                <?php printf(_x('%s', 'Header Phone', 'consulting'), $header_phone); ?>
                                            </div>
                                        <?php endif; ?>
                                        <?php
                                        if (get_theme_mod('wpml_switcher', true) && $consulting_config['layout'] != 'layout_budapest') {
                                            if (function_exists('icl_object_id')) {
                                                if (get_theme_mod('wpml_switcher_style', true) == 'wpml_default') {
                                                    do_action('wpml_add_language_selector');
                                                } else {
                                                    consulting_topbar_lang();
                                                }
                                            }
                                        }
                                        ?>
                                        <div class="logo">
                                            <?php
                                            $page_ID = consulting_page_id();
                                            $header_inverse = get_post_meta($page_ID, 'header_inverse', true);
                                            ?>
                                            <?php if ($header_inverse && $logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_default.svg')): ?>
                                                <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                        src="<?php echo esc_url($logo); ?>"
                                                        style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                        alt="<?php bloginfo('name'); ?>" /></a>
                                            <?php elseif ($logo = get_theme_mod('dark_logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_dark.svg')): ?>
                                                <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                        src="<?php echo esc_url($logo); ?>"
                                                        style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                        alt="<?php bloginfo('name'); ?>" /></a>
                                            <?php else: ?>
                                                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="top_nav">
                                    <div class="container">
                                        <div class="top_nav_wrapper clearfix">
                                            <?php
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'consulting-primary_menu',
                                                    'container' => false,
                                                    'depth' => 4,
                                                    'menu_class' => 'main_menu_nav'
                                                )
                                            );
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            <?php elseif (consulting_get_header_style() == 'header_style_6') : ?>

                                <div class="header_top clearfix">
                                    <div class="container">
                                        <div class="header_top_wrapper">
                                            <?php if (stm_check_layout('layout_19')): ?>
                                                <div class="logo media-left media-middle">
                                                    <?php
                                                    $page_ID = consulting_page_id();
                                                    $header_inverse = get_post_meta($page_ID, 'header_inverse', true);
                                                    ?>
                                                    <?php if ($header_inverse && $logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_default.svg')): ?>
                                                        <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                                src="<?php echo esc_url($logo); ?>"
                                                                style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                                alt="<?php bloginfo('name'); ?>" /></a>
                                                    <?php elseif ($logo = get_theme_mod('dark_logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_dark.svg')): ?>
                                                        <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                                src="<?php echo esc_url($logo); ?>"
                                                                style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                                alt="<?php bloginfo('name'); ?>" /></a>
                                                    <?php else: ?>
                                                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            <?php else: ?>
                                                <div class="logo media-left media-middle">
                                                    <?php if ($logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_default.svg')): ?>
                                                        <?php if (stm_check_layout('layout_16')) {
                                                            $page_ID = consulting_page_id();
                                                            $header_inverse = get_post_meta($page_ID, 'header_inverse', true);
                                                            if ($header_inverse && $logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_default.svg')): ?>
                                                                <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                                        src="<?php echo esc_url($logo); ?>"
                                                                        style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                                        alt="<?php bloginfo('name'); ?>" /></a>
                                                            <?php elseif ($logo = get_theme_mod('dark_logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_dark.svg')): ?>
                                                                <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                                        src="<?php echo esc_url($logo); ?>"
                                                                        style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                                        alt="<?php bloginfo('name'); ?>" /></a>
                                                            <?php else: ?>
                                                                <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                                            <?php endif;
                                                        } else { ?>
                                                            <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                                    src="<?php echo esc_url($logo); ?>"
                                                                    style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                                    alt="<?php bloginfo('name'); ?>" /></a>
                                                        <?php } ?>
                                                    <?php else: ?>
                                                        <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="top_nav media-body media-middle">
                                                <?php if (stm_check_layout('layout_16')): ?>
                                                    <?php
                                                    $header_l16_btn_text = get_theme_mod('header_l16_btn_text', '');
                                                    $header_l16_btn_link = get_theme_mod('header_l16_btn_link', '');
                                                    if (!empty($header_l16_btn_link) and !empty($header_l16_btn_text)):
                                                    ?>
                                                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-block vc_btn3-icon-left vc_btn3-color-theme_style_2"
                                                            href="<?php printf(_x('%s', 'Header button link - ' . $header_l16_btn_link, 'consulting'), $header_l16_btn_link); ?>"
                                                            title="<?php printf(_x('%s', 'Header button text - ' . $header_l16_btn_text, 'consulting'), $header_l16_btn_text); ?>">
                                                            <?php printf(_x('%s', 'Header button text - ' . $header_l16_btn_text, 'consulting'), $header_l16_btn_text); ?>
                                                        </a>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                                <div class="top_nav_wrapper clearfix">
                                                    <?php
                                                    wp_nav_menu(
                                                        array(
                                                            'theme_location' => 'consulting-primary_menu',
                                                            'container' => false,
                                                            'depth' => 4,
                                                            'menu_class' => 'main_menu_nav'
                                                        )
                                                    );
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php elseif (consulting_get_header_style() == 'header_style_7') : ?>
                                <?php
                                $socials = consulting_get_socials();
                                $header_side_class = '';
                                if (!empty($socials) && is_array($socials)) {
                                    $header_side_class .= ' has-socials';
                                }
                                ?>
                                <div class="header_side clearfix <?php echo esc_attr($header_side_class); ?>">
                                    <div class="container">
                                        <div class="header_side_wrapper">
                                            <div class="logo">
                                                <?php
                                                if ($consulting_config['layout'] == 'layout_9') {
                                                    $logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_dark.svg');
                                                } else {
                                                    $logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_default.svg');
                                                }
                                                ?>
                                                <?php if ($logo): ?>
                                                    <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                            src="<?php echo esc_url($logo); ?>"
                                                            style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                            alt="<?php bloginfo('name'); ?>" /></a>
                                                <?php else: ?>
                                                    <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="side_nav">
                                                <div class="side_nav_wrapper clearfix">
                                                    <?php
                                                    wp_nav_menu(
                                                        array(
                                                            'theme_location' => 'consulting-primary_menu',
                                                            'container' => false,
                                                            'depth' => 4,
                                                            'menu_class' => 'main_menu_nav'
                                                        )
                                                    );
                                                    ?>
                                                </div>
                                            </div>
                                            <?php if ($socials = consulting_get_socials()): ?>
                                                <div class="header_socials">
                                                    <?php foreach ($socials as $key => $val): ?>
                                                        <a target="_blank" href="<?php echo esc_attr($val); ?>"><i
                                                                class="fa fa-<?php echo esc_attr($key); ?>"></i></a>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($copyright = get_theme_mod('header_copyright', __("Theme by <a href='http://stylemixthemes.com/' target='_blank'>Stylemix Themes</a> <br>2016 &copy; All rights reserved.", 'consulting'))): ?>
                                                <div class="header_copyright">
                                                    <?php printf(_x('%s', 'Copyright', 'consulting'), $copyright); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                            <?php elseif (consulting_get_header_style() == 'header_style_8') : ?>
                                <?php
                                $socials = consulting_get_socials();
                                $header_side_class = '';
                                if (!empty($socials) && is_array($socials)) {
                                    $header_side_class .= ' has-socials';
                                }
                                ?>

                                <div id="menu_toggle_button">
                                    <button></button>
                                </div>
                                <div class="header_side clearfix <?php echo esc_attr($header_side_class); ?>">
                                    <div class="container">
                                        <div class="header_side_wrapper">
                                            <div class="side_nav">
                                                <div class="side_nav_wrapper clearfix">
                                                    <?php
                                                    wp_nav_menu(
                                                        array(
                                                            'theme_location' => 'consulting-primary_menu',
                                                            'container' => false,
                                                            'depth' => 4,
                                                            'menu_class' => 'main_menu_nav'
                                                        )
                                                    );
                                                    ?>
                                                </div>
                                                <?php
                                                if (get_theme_mod('wpml_switcher', true)) {
                                                    if (function_exists('icl_object_id')) {
                                                        if (get_theme_mod('wpml_switcher_style', true) == 'wpml_default') {
                                                            do_action('wpml_add_language_selector');
                                                        } else {
                                                            consulting_topbar_lang();
                                                        }
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <div class="header_bottom_info_box">
                                                <?php if ($socials = consulting_get_socials()): ?>
                                                    <div class="header_socials">
                                                        <?php foreach ($socials as $key => $val): ?>
                                                            <a target="_blank" href="<?php echo esc_attr($val); ?>"><i
                                                                    class="fa fa-<?php echo esc_attr($key); ?>"></i></a>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($copyright = get_theme_mod('header_copyright', __("Theme by <a href='http://stylemixthemes.com/' target='_blank'>Stylemix Themes</a> <br>2016 &copy; All rights reserved.", 'consulting'))): ?>
                                                    <div class="header_copyright">
                                                        <?php printf(_x('%s', 'Copyright', 'consulting'), $copyright); ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endif; ?>
                            <div class="mobile_header">
                                <div class="logo_wrapper clearfix">
                                    <div class="logo">
                                        <?php if ($logo = get_theme_mod('dark_logo', get_template_directory_uri() . '/assets/images/tmp/' . $logo_tmp_src . 'logo_dark.svg')): ?>
                                            <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                                    src="<?php echo esc_url($logo); ?>"
                                                    style="width: <?php echo esc_attr(get_theme_mod('logo_width')) ?>px; height: <?php echo esc_attr(get_theme_mod('logo_height')) ?>px;"
                                                    alt="<?php bloginfo('name'); ?>" /></a>
                                        <?php else: ?>
                                            <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
                                        <?php endif; ?>
                                    </div>
                                    <div id="menu_toggle">
                                        <button></button>
                                    </div>
                                </div>
                                <div class="header_info">
                                    <div class="top_nav_mobile">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'consulting-primary_menu',
                                                'container' => false,
                                                'depth' => 4,
                                                'menu_class' => 'main_menu_nav'
                                            )
                                        );
                                        ?>
                                    </div>
                                    <?php
                                    $header_phone = get_theme_mod('header_phone', __("<strong>212 714 0177</strong>\n<span>Free call</span>", 'consulting'));
                                    $header_hours = get_theme_mod('header_working_hours', __("<strong>Mon - Sat 8.00 - 18.00</strong>\n<span>Sunday CLOSED</span>", 'consulting'));
                                    $header_address = get_theme_mod('header_address', __("<strong>1010 Avenue of the Moon</strong>\n<span>New York, NY 10018 US.</span>", 'consulting'));
                                    if (!empty($header_phone) || !empty($header_hours) || !empty($header_address)) : ?>
                                        <div class="icon_texts">
                                            <?php if ($header_phone): ?>
                                                <div class="icon_text clearfix">
                                                    <div class="icon"><i
                                                            class="fa <?php echo esc_attr(get_theme_mod('header_phone_icon', 'fa-phone')); ?>"></i>
                                                    </div>
                                                    <div class="text">
                                                        <?php printf(_x('%s', 'Header phone', 'consulting'), $header_phone); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($header_hours): ?>
                                                <div class="icon_text clearfix">
                                                    <div class="icon"><i
                                                            class="fa <?php echo esc_attr(get_theme_mod('header_working_hours_icon', 'fa-clock-o')); ?>"></i>
                                                    </div>
                                                    <div class="text">
                                                        <?php printf(_x('%s', 'Header hours', 'consulting'), $header_hours); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($header_address): ?>
                                                <div class="icon_text clearfix">
                                                    <div class="icon"><i
                                                            class="fa <?php echo esc_attr(get_theme_mod('header_address_icon', 'fa-map-marker')); ?>"></i>
                                                    </div>
                                                    <div class="text">
                                                        <?php printf(_x('%s', 'Header address', 'consulting'), $header_address); ?>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (get_theme_mod('mobile_socials_show_hide', false) && $socials = consulting_get_socials()): ?>
                                        <div class="header_socials">
                                            <?php foreach ($socials as $key => $val): ?>
                                                <a target="_blank" href="<?php echo esc_attr($val); ?>"><i
                                                        class="fa fa-<?php echo esc_attr($key); ?>"></i></a>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </header>
                <div id="main" <?php if (get_theme_mod('footer_show_hide', false)): ?>class="footer_hide" <?php endif; ?>>

                    <?php /* Solar Finance Facility  */
                    if ($post->ID == 5922) { ?>
                        <img src="/wp-content/uploads/2023/banner/SBSolarFinanceFacilityBanner1920x640.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                      <?php /* Solar Finance Facility  */
                    if ($post->ID == 17601) { ?>
                        <img src="https://sindhbank.com.pk/wp-content/uploads/2025/10/SB-MGMA-1920x640-Web-Banner-C.jpg"/>
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>



                    <?php /* Trade Services  */
                    if ($post->ID == 16384) { ?>
                        <img src="/wp-content/uploads/2025/08/SB-Trade-Services-1920x640-Product-Web-Banner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* RAPID FINANCE FACILITY  */
                    if ($post->ID == 6169) { ?>
                        <img src="/wp-content/uploads/2023/banner/SB_Rapid_Finance_Facility-1920x640Banner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* PM YOUTH BUSINESS LOAN  */
                    if ($post->ID == 7951) { ?>
                        <img src="/wp-content/uploads/2023/banner/SB_PMYB_ALS_ProductWebBanner1920x640.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* 1Bill SMS Service */
                    if ($post->ID == 7376) { ?>
                        <img src="/wp-content/uploads/2022/banner/SB_1Bill_SMS_Service-1920x640_Banner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* Haya Digital Account */
                    if ($post->ID == 834) { ?>
                        <img src="/wp-content/uploads/2022/banner/SB_Haya_Digital_Account-1920x640_WebBanner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* Haya Asaan Account */
                    if ($post->ID == 176) { ?>
                        <img src="/wp-content/uploads/2022/banner/SB_Haya_Asaan_Account-1920x640_WebBanner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>
                    <?php /* Azadi Salary Loan */
                    if ($post->ID == 8504) { ?>
                        <img src="/wp-content/uploads/2022/banner/SB_Azadi_Salary_Loan-1920x640_WebBanner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>
                    <?php /* Mera Gari Auto Finance */
                    if ($post->ID == 8233) { ?>
                        <img src="/wp-content/uploads/2022/banner/SB_Meri_Gari_AF-1920x640_WebBanner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* Mera Ghar Home Finance */
                    if ($post->ID == 6385) { ?>
                        <img src="/wp-content/uploads/2022/banner/SB_Mera_Ghar_HF-1920x640_WebBanner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* Training Gender Diversity */
                    if ($post->ID == 324) { ?>
                        <img src="/wp-content/uploads/2022/banner/SB_Gender_Diversity_Training.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /*   8703  GOD FLOOD RELIEF FUND */
                    if ($post->ID == 8703) { ?>
                        <style>
                            .page_title {}
                        </style>
                    <?php } ?>

                    <?php /* SAADAT HOME FINANCE */
                    if ($post->ID == 4751) { ?>
                        <img src="/wp-content/uploads/2022/banner/SBIB_House Finance_1920x640_Web_Banner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* SAADAT MERA PAKISTAN MERA GHAR */
                    if ($post->ID == 8232) { ?>
                        <img src="/wp-content/uploads/2022/banner/SBIB_MPMG_1920x640_Web_Banner_B.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* BRANCHES AND ATM NETWORKS */
                    if ($post->ID == 6356) { ?>
                        <img src="/wp-content/uploads/2022/banner/SB_ATM_Network_1920x553_Web_Banner.jpg" />

                    <?php } ?>

                    <?php /* BRANCHES AND ATM NETWORKS */
                    if ($post->ID == 16184) { ?>
                        <img src="/wp-content/uploads/2025/10/SB-ATM-Network-1920x640-Web-Banner.jpg" />

                    <?php } ?>

                    <?php /* SAADAT SALARY SUKOON FINANCE */
                    if ($post->ID == 7239) { ?>
                        <img src="/wp-content/uploads/2022/banner/Saadat_SSF_Web_Banner-1920x640.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* SUKOON PERSONAL LOAN SECURED */
                    if ($post->ID == 16152) { ?>
                        <img src="/wp-content/uploads/2025/Banner/SB SPLS 1920x640 Product Web Banner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* SAADAT MOHTARMA ACCOUNT */
                    if ($post->ID == 979) { ?>
                        <img src="/wp-content/uploads/2022/banner/SBIB_1920x640_Mohtarma_Banner_B.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* WOMEN EMPOWERMENT EVENTS */
                    if ($post->ID == 7333) { ?>
                        <img src="/wp-content/uploads/2021/home-products/EmpoweringWomen_Banner_1920x533_Web_E.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* WOMEN EMPOWERMENT PRODUCTS */
                    if ($post->ID == 6951) { ?>
                        <img src="/wp-content/uploads/2025/10/product.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* WOMEN EMPOWERMENT ACCOUNT */
                    if ($post->ID == 6531) { ?>
                        <img src="/wp-content/uploads/2025/07/SB-Women-Empowerment-Account-Web-1920x640-Banner-A.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>
                    <?php /* EMPOWERING WOMEN */
                    if ($post->ID == 10456) { ?>
                        <img src="/wp-content/uploads/2021/home-products/EmpoweringWomen-banner-1920x533.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* CONVERSION TO ISLAMIC BANKING */
                    if ($post->ID == 16151) { ?>
                        <img src="/wp-content/uploads/ConversionToIslamic/SBIB-Conversion-to-IB-Web-Banner-1920x640.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* MOHTARMA ACCOUNT  */
                    if ($post->ID == 6494) { ?>
                        <img src="/wp-content/uploads/2021/home-products/SBMohtarmaEngBanner1920x533-Nov19.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /*  PERSONAL LOAN */
                    if ($post->ID == 1501) { ?>
                        <img src="/wp-content/uploads/2021/home-products/SB_PL_1920x553_C_Sept28.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* SUKOON SALARY LOAN */
                    if ($post->ID == 1483) { ?>
                        <img src="/wp-content/uploads/2021/home-products/SB_Sukoon_Salary_Loan_1920_553_Banner.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* SAADAT  CONSUMER BANKING */
                    if ($post->ID == 601) { ?>
                        <img src="/wp-content/uploads/2021/home-products/Consumer_Bnking_1920x640_A.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* SAADAT NASHEMAN HOME FINANCING */
                    if ($post->ID == 2916) { ?>
                        <img src="/wp-content/uploads/2021/home-products/Saadat_Home_Finance_1920x640.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* SAADAT AUTO FINANCING */
                    if ($post->ID == 12397) { ?>
                        <img src="/wp-content/uploads/2021/home-products/SBIB_Auto_Finance_Banner_1920x640_Dec_02.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>


                    <?php /* COVID-19 */
                    if ($post->ID == 8536) { ?>
                        <img src="/wp-content/uploads/2020/06/SB-Corona-Post-C-scaled.jpg" />
                    <?php } ?>

                    <?php /* CAREERS */
                    if ($post->ID == 6158) { ?>
                        <img src="/wp-content/uploads/2020/03/thumbnail_Careers.jpg" />
                    <?php } ?>

                    <?php /* ISLAMIC CAREERS */
                    if ($post->ID == 7953) { ?>
                        <img src="/wp-content/uploads/2020/03/thumbnail_Careers.jpg" />
                    <?php } ?>
                    <?php /* WISTLE BLOWING */
                    if ($post->ID == 6088) { ?>
                        <img src="/wp-content/uploads/2020/04/Whistle-Blowing-1920x553-B.jpg" />
                    <?php } ?>

                    <?php /* COMPLAINTS */
                    if ($post->ID == 6118) { ?>
                        <img src="/wp-content/uploads/2020/03/Complaints-1920x553-A.jpg" />
                    <?php } ?>

                    <?php /* CORE VALUES */
                    if ($post->ID == 6849) { ?>
                        <img src="/wp-content/uploads/2020/03/Core-Values-1920x553-1.jpg" />
                    <?php } ?>


                    <?php /* STATEMENT OF ETHICS */
                    if ($post->ID == 7004) { ?>
                        <img src="/wp-content/uploads/2020/03/Statement-of-Ethics-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* MANAGEMENT */
                    if ($post->ID == 6188) { ?>
                        <img src="/wp-content/uploads/2020/03/BOD-1920x553-2.jpg" />
                    <?php } ?>

                    <?php /* BOARD OF DIRECTORS */
                    if ($post->ID == 6050) { ?>
                        <img src="/wp-content/uploads/2020/03/BOD-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* CORPORATE INFORMATION */
                    if ($post->ID == 6800) { ?>
                        <img src="/wp-content/uploads/2020/03/Corporate-Info-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* COMPANY HISTORY OVERVIEW */
                    if ($post->ID == 5921) { ?>
                        <img src="/wp-content/uploads/2020/03/History-Overview-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* FINANCIALS */
                    if ($post->ID == 6214) { ?>
                        <img src="/wp-content/uploads/2020/03/Financials-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* TENDERS */
                    if ($post->ID == 6912) { ?>
                        <img src="/wp-content/uploads/2020/03/Tenders-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* PRINT ADS */
                    if ($post->ID == 6909) { ?>
                        <img src="/wp-content/uploads/2020/03/Print-Ads-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* CONTACT US */
                    if ($post->ID == 6175) { ?>
                        <img src="/wp-content/uploads/2021/04/contact-us.jpg" />
                    <?php } ?>


                    <?php /* ISLAMIC CONTACT US */
                    if ($post->ID == 8140) { ?>
                        <img src="/wp-content/uploads/2021/04/contact-us.jpg" />
                    <?php } ?>

                    <?php /* FOREX RATES */
                    if ($post->ID == 7825) { ?>
                        <img src="/wp-content/uploads/2020/03/Forex-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* KIBOR RATES */
                    if ($post->ID == 8727) { ?>
                        <img src="/wp-content/uploads/2020/04/Kibor-Rate-1920x553-B.jpg" />
                    <?php } ?>

                    <?php /* IBAN GENERATOR */
                    if ($post->ID == 7309) { ?>
                        <img src="/wp-content/uploads/2020/03/IBAN-Generator-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* ISLAMIC IBAN GENERATOR */
                    if ($post->ID == 7948) { ?>
                        <img src="/wp-content/uploads/2020/03/IBAN-Generator-1920x553-1.jpg" />
                    <?php } ?>
                    <?php /* QUICK LINKS */
                    if ($post->ID == 6486) { ?>
                        <img src="/wp-content/uploads/2020/03/Quick-Links-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* ISLAMIC QUICK LINKS */
                    if ($post->ID == 7551) { ?>
                        <img src="/wp-content/uploads/2020/03/Quick-Links-1920x553-2.jpg" />
                    <?php } ?>

                    <?php /* PRESS RELEASE */
                    if ($post->ID == 6919) { ?>
                        <img src="/wp-content/uploads/2020/03/Press-Releases-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* ISLAMIC PRESS RELEASE */
                    if ($post->ID == 7945) { ?>
                        <img src="/wp-content/uploads/2020/03/Press-Releases-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* PUBLIC NOTICES */
                    if ($post->ID == 6917) { ?>
                        <img src="/wp-content/uploads/2020/03/Public-Notice-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* ATM DEBIT CARDS */
                    if ($post->ID == 6925) { ?>
                        <img src="/wp-content/uploads/2025/11/SB-ATM-Cards-1920x640-Web-Banner.jpg" />
                    <?php } ?>
                    <?php /* SMS BANKING - MOBILE BANKING */
                    if ($post->ID == 6358) { ?>
                        <img src="/wp-content/uploads/2020/03/Sms-Banking-1920x553-1.jpg" />
                    <?php } ?>
                    <?php /* HOME REMITTANCE */
                    if ($post->ID == 6897) { ?>
                        <img src="/wp-content/uploads/2021/home-products/SBHRWebBanner1920x553-Nov18.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php /* ATTRACTIVE DEPOSIT SCHEME */
                    if ($post->ID == 6759) { ?>
                        <img src="/wp-content/uploads/2020/03/Deposit-Schemes-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* CURRENT ACCOUNTS*/
                    if ($post->ID == 6887) { ?>
                        <img src="/wp-content/uploads/2020/03/Current-Account-1920x553-A.jpg" />
                    <?php } ?>

                    <?php /* SAVING ACCOUNTS*/
                    if ($post->ID == 6874) { ?>
                        <img src="/wp-content/uploads/2020/03/Saving-Account-1920x553-A.jpg" />
                    <?php } ?>

                    <?php /* AGRICULTURE LOAN*/
                    if ($post->ID == 6379) { ?>
                        <img src="/wp-content/uploads/2020/03/Agri-Loan-1920x553-1.jpg" />
                    <?php } ?>

                    <?php /* SME FINANCE*/
                    if ($post->ID == 6342) { ?>
                        <img src="/wp-content/uploads/2023/banner/SB-SME-1920x640.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>
                    <?php /* AUTO FINANCE*/
                    if ($post->ID == 8770) { ?>
                        <img src="/wp-content/uploads/2020/03/Auto-Finance-1920x553-3.jpg" />
                    <?php } ?>

                    <?php /* HOME FINANCE*/

                    if ($post->ID == 6967) { ?>
                        <img src="/wp-content/uploads/2021/04/homefinance.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>


                    <?php /* CONSUMER BANKING*/

                    if ($post->ID == 6338) { ?>
                        <img src="/wp-content/uploads/2020/04/Consumer-Banking-1920x553-A.jpg" />
                    <?php } ?>

                    <?php /* NASHEMAN HOME FINANCE*/

                    if ($post->ID == 6545) { ?>
                        <img src="/wp-content/uploads/2021/04/SB-Home-Finance-nasheman.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>
                    <?php /* NASHEMAN HOME FINANCE*/

                    if ($post->ID == 7705) { ?>
                        <img src="/wp-content/uploads/2021/home-products/Saadat_Corporate_1920x640.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>
                    <?php /* FOR JUNAID FROM SHERAZ - Mera Pakistan Mera Ghr*/

                    if ($post->ID == 5189) { ?>
                        <img src="/wp-content/uploads/2021/04/MeraPakistanMeraGhr.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>

                    <?php } ?>


                    <?php /* FOR JUNAID FROM SHERAZ - Mera Pakistan Mera Ghr*/

                    if ($post->ID == 16831) { ?>
                        <img src="/wp-content/uploads/2025/10/SB-MGMA-1920x640-Web-Banner-C.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>

                    <?php } ?>
                    <?php /* FOR JUNAID FROM SHERAZ - Mera Pakistan Mera Ghr*/

                    if ($post->ID == 7545) { ?>
                        <img src="/wp-content/uploads/2021/home-products/Saadat_SME_1920x640.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>

                    <?php } ?>


                    <?php /* NASHEMAN HOME FINANCE*/

                    if ($post->ID == 16626) { ?>
                        <img src="/wp-content/uploads/2025/09/SB-WED-2025-1920x640-Product-Web-Banner-2.jpg" />
                        <style>
                            .page_title {
                                visibility: hidden;
                            }
                        </style>
                    <?php } ?>

                    <?php
                    /*$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
      
                echo '<a href="'.esc_url($featured_img_url).'" >'; 
                    the_post_thumbnail('full');
                echo '</a>';*/

                    ?>


                    <?php get_template_part('partials/title_box'); ?>
                    <div class="container">
                    <?php endif; ?>