<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Page Title -->
<title>Home</title>

<!-- Favicon and Touch Icons -->
<link href="<?=base_url();?>images/favicon.png" rel="shortcut icon" type="image/png">
<link href="<?=base_url();?>images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?=base_url();?>images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?=base_url();?>images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?=base_url();?>images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?=base_url();?>css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="<?=base_url();?>css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="<?=base_url();?>css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="<?=base_url();?>css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="<?=base_url();?>css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="<?=base_url();?>css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="<?=base_url();?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="<?=base_url();?>js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="<?=base_url();?>js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="<?=base_url();?>css/colors/theme-skin-color-set3.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="<?=base_url();?>js/jquery-2.2.4.min.js"></script>
<script src="<?=base_url();?>js/jquery-ui.min.js"></script>
<script src="<?=base_url();?>js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="<?=base_url();?>js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?=base_url();?>js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?=base_url();?>js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="has-fixed-footer">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="<?=base_url();?>images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header header-floating">
    <div class="header-nav navbar-sticky navbar-sticky-animated">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default no-bg">
            <a class="menuzord-brand switchable-logo pull-left flip mb-15" href="index-mp-layout1.html">
              <img class="logo-default" src="<?=base_url();?>images/logo-wide-white.png" alt="">
              <img class="logo-scrolled-to-fixed" src="<?=base_url();?>images/logo-wide.png" alt="">
            </a>
            <ul class="menuzord-menu">
              <li class="active"><a href="#home">Home</a></li>
              
              <li><a href="#">Pages</a>
                <ul class="dropdown">
                  <li><a href="#">About</a>
                    <ul class="dropdown">
                      <li><a href="page-about1.html">About Style 1</a></li>
                      <li><a href="page-about2.html">About Style 2</a></li>
                    </ul>
                  </li>
                  <li><a href="#home">Teachers</a>
                    <ul class="dropdown">
                      <li><a href="page-teachers-style1.html">Teachers style 1</a></li>
                      <li><a href="page-teachers-style2.html">Teachers style 2</a></li>
                      <li><a href="page-teacher-details.html">Teachers Details</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Profile</a>
                    <ul class="dropdown">
                      <li><a href="page-account.html">Account</a></li>
                      <li><a href="page-account-edit.html">Edit Account</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Gallery</a>
                    <ul class="dropdown">
                      <li><a href="page-gallery-3col.html">3 Columns</a></li>
                      <li><a href="page-gallery-4col.html">4 Columns</a></li>
                      <li><a href="page-gallery-3col-only-image.html">3 Columns Only Image</a></li>
                      <li><a href="page-gallery-4col-only-image.html">4 Columns Only Image</a></li>
                      <li><a href="page-gallery-grid.html">Grids (2-10 Columns)</a></li>
                      <li><a href="page-gallery-grid-animation.html">Grids with Animation (2-10 Columns)</a></li>
                      <li><a href="page-gallery-masonry-tiles.html">Tiles (2-10 Columns)</a></li>
                      <li><a href="page-gallery-masonry-tiles-animation.html">Tiles with Animation (2-10 Columns)</a></li>
                      <li><a href="page-gallery-prettyphoto.html">Pretty Photo Gallery</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Pricing</a>
                    <ul class="dropdown">
                      <li><a href="page-pricing-style1.html">Pricing style1</a></li>
                      <li><a href="page-pricing-style2.html">Pricing style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Calender</a>
                    <ul class="dropdown">
                      <li><a href="page-calendar1.html">Calendar Style1</a></li>
                      <li><a href="page-calendar2.html">Calendar Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Events</a>
                    <ul class="dropdown">
                      <li><a href="#">Events Grid</a>
                        <ul class="dropdown">
                          <li><a href="events-grid-2column.html">Grid 2column</a></li>
                          <li><a href="events-grid-3column.html">Grid 3column</a></li>
                          <li><a href="events-grid-4column.html">Grid 4column</a></li>
                          <li><a href="events-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                          <li><a href="events-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Events List</a>
                        <ul class="dropdown">
                          <li><a href="events-list-left-sidebar.html">List Left Sidebar</a></li>
                          <li><a href="events-list-right-sidebar.html">List Right Sidebar</a></li>
                          <li><a href="events-list-no-sidebar.html">List No Sidebar</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Events Details</a>
                        <ul class="dropdown">
                          <li><a href="events-details-style1.html">Details Style1</a></li>
                          <li><a href="events-details-style2.html">Details Style2</a></li>
                          <li><a href="events-details-style3.html">Details Style3</a></li>
                        </ul>
                      </li>
                      <li><a href="events-table.html">Events Table</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Job</a>
                    <ul class="dropdown">
                      <li><a href="job-list.html">Job List</a></li>
                      <li><a href="job-details-style1.html">Job Details Style1</a></li>
                      <li><a href="job-details-style2.html">Job Details Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Shop</a>
                    <ul class="dropdown">
                      <li><a href="shop-category.html">Category</a></li>
                      <li><a href="shop-category-sidebar.html">Category Sidebar</a></li>
                      <li><a href="shop-product-details.html">Product Details</a></li>
                      <li><a href="shop-cart.html">Cart</a></li>
                      <li><a href="shop-checkout.html">Checkout</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Contact</a>
                    <ul class="dropdown">
                      <li><a href="page-contact1.html">Contact style 1</a></li>
                      <li><a href="page-contact2.html">Contact style 2</a></li>
                      <li><a href="page-contact3.html">Contact style 3</a></li>
                      <li><a href="page-contact4.html">Contact style 4</a></li>
                      <li><a href="page-contact5-with-multiple-marker.html">Contact 5 - Multiple Marker</a></li>
                      <li><a href="page-contact6-with-multiple-marker.html">Contact 6 - Multiple Marker</a></li>
                      <li><a href="page-contact7-google-recaptcha.html">Contact 7 - reCAPTCHA</a></li>
                    </ul>
                  </li>
                  <li><a href="#">FAQ</a>
                    <ul class="dropdown">
                      <li><a href="page-faq-style1.html">FAQ Style1</a></li>
                      <li><a href="page-faq-style2.html">FAQ Style2</a></li>
                      <li><a href="page-faq-style3.html">FAQ Style3</a></li>
                      <li><a href="page-faq-style4.html">FAQ Style4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Page 404</a>
                    <ul class="dropdown">
                      <li><a href="page-404-style1.html">Style1</a></li>
                      <li><a href="page-404-style2.html">Style2</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Coming Soon</a>
                    <ul class="dropdown">
                      <li><a href="page-coming-soon-style1.html">style 1</a></li>
                      <li><a href="page-coming-soon-style2.html">style 2</a></li>
                      <li><a href="page-coming-soon-style3.html">style 3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Under Construction</a>
                    <ul class="dropdown">
                      <li><a href="page-under-construction-style1.html">Style1</a></li>
                      <li><a href="page-under-construction-style2.html">Style2</a></li>
                      <li><a href="page-under-construction-style3.html">Style3</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#home">Courses</a>
                <ul class="dropdown">
                  <li><a href="page-course-gird.html">Course Gird</a></li>
                  <li><a href="page-course-list.html">Course List</a></li>
                  <li><a href="page-course-details.html">Course Details</a></li>
                </ul>
              </li>
              <li><a href="#">Blog</a>
                <ul class="dropdown">
                  <li><a href="#">Blog Classic</a>
                    <ul class="dropdown dropdown-left">
                      <li><a href="blog-classic-no-sidebar.html">Blog Classic No Sidebar</a></li>
                      <li><a href="blog-classic-left-sidebar.html">Blog Classic Left Sidebar</a></li>
                      <li><a href="blog-classic-right-sidebar.html">Blog Classic Right Sidebar</a></li>
                      <li><a href="blog-classic-both-sidebar.html">Blog Classic Both Sidebar</a></li>
                      <li><a href="blog-classic-left-thumbs.html">Blog Classic Left Thumbs</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Grid</a>
                    <ul class="dropdown dropdown-left">
                      <li><a href="blog-grid-2-column.html">Blog Grid 2 Column</a></li>
                      <li><a href="blog-grid-3-column.html">Blog Grid 3 Column</a></li>
                      <li><a href="blog-grid-4-column.html">Blog Grid 4 Column</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Masonry</a>
                    <ul class="dropdown dropdown-left">
                      <li><a href="blog-masonry-2-column.html">Blog Masonry 2 Column</a></li>
                      <li><a href="blog-masonry-3-column.html">Blog Masonry 3 Column</a></li>
                      <li><a href="blog-masonry-4-column.html">Blog Masonry 4 Column</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Single</a>
                    <ul class="dropdown dropdown-left">
                      <li><a href="blog-single-no-sidebar.html">Blog Single No Sidebar</a></li>
                      <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                      <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                      <li><a href="blog-single-both-sidebar.html">Blog Single Both Sidebar</a></li>
                      <li><a href="blog-single-disqus-comments.html">Blog Single Discuss Comments</a></li>
                      <li><a href="blog-single-facebook-comments.html">Blog Single Facebook Comments</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Infinity Scroll</a>
                    <ul class="dropdown dropdown-left">
                      <li><a href="blog-extra-infinity-scroll.html">Blog Infinity Scroll Default</a></li>
                      <li><a href="blog-extra-infinity-scroll-lazyload.html">Blog Infinity Scroll Lazyload</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Blog Timeline</a>
                    <ul class="dropdown dropdown-left">
                      <li><a href="blog-timeline.html">Blog Timeline Default</a></li>
                      <li><a href="blog-timeline-masonry.html">Blog Timeline Masonry</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="javascript:void(0)">Mega Menu <span class="label label-danger">New</span></a>
                <div class="megamenu megamenu-bg-img">
                  <div class="megamenu-row">
                    <div class="col3">
                      <h4 class="megamenu-col-title">Latest News:</h4>
                      <div class="widget">
                        <div class="latest-posts">
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Post Title Here</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Industrial Coatings</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Storefront Installations</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                          <article class="post media-post clearfix pb-0 mb-10">
                            <a href="blog-single-right-sidebar.html" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                              <h5 class="post-title mt-0 mb-5"><a href="blog-single-right-sidebar.html">Industrial Coatings</a></h5>
                              <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                          </article>
                        </div>
                      </div>
                    </div>
                    <div class="col3">
                      <h4 class="megamenu-col-title">Featured News:</h4>
                      <article class="post clearfix">
                        <div class="entry-header">
                          <div class="post-thumb"> <img class="img-responsive" src="http://placehold.it/372x246" alt=""> </div>
                        </div>
                        <div class="entry-content">
                          <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna et sed aliqua</p>
                          <a class="btn btn-dark btn-theme-colored" href="#">read more..</a> </div>
                      </article>
                    </div>
                    <div class="col3">
                      <h4 class="megamenu-col-title">Promotional Offer:</h4>
                      <img src="http://placehold.it/270x244" alt="">
                    </div>
                    <div class="col3">
                      <h4 class="megamenu-col-title">Quick Links:</h4>
                      <ul class="list-dashed list-icon">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Disclaimer</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Copyright Notice</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li><a href="javascript:void(0)">Shortcodes <span class="label label-danger">New</span></a>
                <div class="megamenu">
                  <div class="megamenu-row">
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-accordion.html"><i class="fa fa-list-ul"></i> Accordion</a></li>
                        <li><a href="shortcode-alerts.html"><i class="fa fa-exclamation-circle"></i> Alerts</a></li>
                        <li><a href="shortcode-animations.html"><i class="fa fa-magic"></i> Animations</a></li>
                        <li><a href="shortcode-background-html5-video.html"><i class="fa fa-video-camera"></i> HTML5 Background Video</a></li>
                        <li><a href="shortcode-before-after-slider.html"><i class="fa fa-window-restore"></i> Before/After Slider</a></li>
                        <li><a href="shortcode-blockquotes.html"><i class="fa fa-quote-right"></i> Blockquotes</a></li>
                        <li><a href="shortcode-box-hover-effect.html"><i class="fa fa-picture-o"></i> Box Hover Effects</a></li>
                        <li><a href="shortcode-button-groups-and-dropdowns.html"><i class="fa fa-link"></i> Button Groups</a></li>
                        <li><a href="shortcode-button-hover-effect.html"><i class="fa fa-flag-o"></i> Button Hover Effect</a></li>
                        <li><a href="shortcode-buttons.html"><i class="fa fa-external-link"></i> Buttons</a></li>
                        <li><a href="shortcode-call-to-actions.html"><i class="fa fa-plus-square"></i> Call To Actions</a></li>
                        <li><a href="shortcode-charts.html"><i class="fa fa-pie-chart"></i> Charts</a></li>
                        <li><a href="shortcode-columns-grids.html"><i class="fa fa-columns"></i> Columns Grids</a></li>
                        <li><a href="shortcode-divider.html"><i class="fa fa-indent"></i> Divider</a></li>
                        <li><a href="shortcode-dropcaps.html"><i class="fa fa-bold"></i> Dropcaps</a></li>
                        <li><a href="shortcode-datetime-datepicker.html"><i class="fa fa-calendar"></i> Date Picker</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-datetime-timepicker.html"><i class="fa fa-calendar"></i> Time Picker</a></li>
                        <li><a href="shortcode-datetime-datetimepicker.html"><i class="fa fa-calendar"></i> Bootstrap Date-Time Picker</a></li>
                        <li><a href="shortcode-datetime-datepair.html"><i class="fa fa-calendar"></i> Date Pair</a></li>
                        <li><a href="shortcode-flickr-feed.html"><i class="fa fa-flickr"></i> Flickr Feed</a></li>
                        <li><a href="shortcode-flipbox.html"><i class="fa fa-square"></i> Flipbox</a></li>
                        <li><a href="shortcode-forms.html"><i class="fa fa-align-justify"></i> Forms</a></li>
                        <li><a href="shortcode-funfacts.html"><i class="fa fa-bell-o"></i> Funfacts</a></li>
                        <li><a href="shortcode-iconbox.html"><i class="fa fa-unsorted"></i> Icon Box</a></li>
                        <li><a href="shortcode-icon-7stroke.html"><i class="fa fa-circle-o"></i> Icons 7stroke</a></li>
                        <li><a href="shortcode-icon-elegant-icons.html"><i class="fa fa-eye-slash"></i> Icons Elegant</a></li>
                        <li><a href="shortcode-icon-flat-color-icons.html"><i class="fa fa-i-cursor"></i> Icons Flat Color</a></li>
                        <li><a href="shortcode-icon-fontawesome.html"><i class="fa fa-fort-awesome"></i> Icons FontAwesome</a></li>
                        <li><a href="shortcode-icon-fontawesome-tutorial.html"><i class="fa fa-fonticons"></i> Icons FontAwesome Tutorial</a></li>
                        <li><a href="shortcode-icon-strokegap.html"><span class="strokegap-icon strokegap-icon-WorldWide"></span> Icons Strokegap</a></li>
                        <li><a href="shortcode-image-box.html"><i class="fa fa-file-image-o"></i> Image Box</a></li>
                        <li><a href="shortcode-instagram.html"><i class="fa fa-instagram"></i> Instagram Feed</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-labels-badges.html"><i class="fa fa-check-square-o"></i> Labels Badges</a></li>
                        <li><a href="shortcode-listgroup-panels.html"><i class="fa fa-th-list"></i> Listgroup Panels</a></li>
                        <li><a href="shortcode-lists.html"><i class="fa fa-list"></i> Lists</a></li>
                        <li><a href="shortcode-maps.html"><i class="fa fa-map-o"></i> Maps</a></li>
                        <li><a href="shortcode-media-embed.html"><i class="fa fa-play-circle-o"></i> Media Embed</a></li>
                        <li><a href="shortcode-modal-bootstrap.html"><i class="fa fa-search-plus"></i> Modal</a></li>
                        <li><a href="shortcode-modal-lightbox.html"><i class="fa fa-expand"></i> Lightbox</a></li>
                        <li><a href="shortcode-navigation.html"><i class="fa fa-navicon"></i> Navigation</a></li>
                        <li><a href="shortcode-owl-carousel.html"><i class="fa fa-sliders"></i> Owl Carousel</a></li>
                        <li><a href="shortcode-odometer.html"><i class="fa fa-tachometer"></i> Odometer</a></li>
                        <li><a href="shortcode-pagination.html"><i class="fa fa-arrow-circle-o-right"></i> Pagination</a></li>
                        <li><a href="shortcode-progressbar.html"><i class="fa fa-tasks"></i> Progress Bars</a></li>
                        <li><a href="shortcode-piechart.html"><i class="fa fa-sun-o"></i> Pie Charts</a></li>
                        <li><a href="shortcode-responsive.html"><i class="fa fa-tablet"></i> Responsive</a></li>
                        <li><a href="shortcode-separator.html"><i class="fa fa-minus-square-o"></i> Separator</a></li>
                        <li><a href="shortcode-sitemap.html"><i class="fa fa-sitemap"></i> Sitemap</a></li>
                        <li><a href="shortcode-sliders.html"><i class="fa fa-sliders"></i> Sliders</a></li>
                      </ul>
                    </div>
                    <div class="col3">
                      <ul class="list-unstyled list-dashed">
                        <li><a href="shortcode-smoothscrolling.html"><i class="fa fa-binoculars"></i> Smoothscrolling</a></li>
                        <li><a href="shortcode-styled-icons.html"><i class="fa fa-facebook-square"></i> Styled Icons</a></li>
                        <li><a href="shortcode-subscribe.html"><i class="fa fa-user-plus"></i> Subscribe</a></li>
                        <li><a href="shortcode-tables.html"><i class="fa fa-table"></i> Tables</a></li>
                        <li><a href="shortcode-tabs.html"><i class="fa fa-indent"></i> Tabs</a></li>
                        <li><a href="shortcode-textblock.html"><i class="fa fa-bold"></i> Textblock</a></li>
                        <li><a href="shortcode-thumbnails-carousels.html"><i class="fa fa-sliders"></i> Thumbnails/carousels</a></li>
                        <li><a href="shortcode-title.html"><i class="fa fa-text-height"></i> Title</a></li>
                        <li><a href="shortcode-timer-final-countdown.html"><i class="fa fa-text-height"></i> Timer Final Countdown</a></li>
                        <li><a href="shortcode-timer-flipclock.html"><i class="fa fa-text-height"></i> Timer Flipclock</a></li>
                        <li><a href="shortcode-timer-slick-circular.html"><i class="fa fa-text-height"></i> Timer Slick Circular</a></li>
                        <li><a href="shortcode-twitter.html"><i class="fa fa-twitter-square"></i> Twitter Feed</a></li>
                        <li><a href="shortcode-typography.html"><i class="fa fa-font"></i> Typography</a></li>
                        <li><a href="shortcode-vertical-timeline.html"><i class="fa fa-arrows-v"></i> Vertical Timeline</a></li>
                        <li><a href="shortcode-widgets.html"><i class="fa fa-gift"></i> Widgets</a></li>
                        <li><a href="shortcode-working-process.html"><i class="fa fa-exchange"></i> Working Process</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34" style="margin:0px auto; background-color:#ffffff; padding:0px; margin-top:0px; margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x820" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="http://placehold.it/1920x1280" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-3" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-1-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Best <span class="text-theme-colored2">Online</span> Course
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">We provides always our best educational services for our all students <br> and  always try to achieve our students trust and satisfaction
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Our Service</a><a class="btn btn-default btn-transparent btn-bordered btn-lg btn-flat font-weight-600 pl-30 pr-30" href="#">Get a Quote</a>
                </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x820" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="http://placehold.it/1920x820" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" 
                  id="slide-2-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-2-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Welcome To<span class="text-theme-colored2"> Learpro</span>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">We provides always our best educational services for our all students <br> and  always try to achieve our students trust and satisfaction
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-2-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Our Service</a><a class="btn btn-default btn-transparent btn-bordered btn-lg btn-flat font-weight-600 pl-30 pr-30" href="#">Get a Quote</a>
                </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x820" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="http://placehold.it/1920x820" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" 
                  id="slide-3-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-3-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Leading<span class="text-theme-colored2"> University</span>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;">We provides always our best educational services for our all students <br> and  always try to achieve our students trust and satisfaction
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-3-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Our Service</a><a class="btn btn-default btn-transparent btn-bordered btn-lg btn-flat font-weight-600 pl-30 pr-30" href="#">Get a Quote</a>
                </div>
              </li>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.2);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
          var tpj=jQuery;
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:5000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->

      </div>
    </section>

    <!-- Section: home-boxes -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto" data-bg-color="#5D9CEC">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fa fa-graduation-cap font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">Popular Courses</a></h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adpisici elit. Obcaec atdistinc tio quaerat iusto, accusa ntumeos nsect eturpers piciatis minima tempore!</p>
                  <div class="shadow-icon"><i class="pe-7s-mail-open"></i></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto" data-bg-color="#EF5861">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fa fa-book font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">Modern Library</a></h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adpisici elit. Obcaec atdistinc tio quaerat iusto, accusa ntumeos nsect eturpers piciatis minima tempore!</p>
                  <div class="shadow-icon"><i class="pe-7s-mail-open"></i></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto" data-bg-color="#E79800">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fa fa-user-o font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">Qualified Teachers</a></h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adpisici elit. Obcaec atdistinc tio quaerat iusto, accusa ntumeos nsect eturpers piciatis minima tempore!</p>
                  <div class="shadow-icon"><i class="pe-7s-mail-open"></i></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto" data-bg-color="#43B14B">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fa fa-certificate font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">Certification</a></h4>
                  <p class="text-white">Lorem ipsum dolor sit amet, consectetur adpisici elit. Obcaec atdistinc tio quaerat iusto, accusa ntumeos nsect eturpers piciatis minima tempore!</p>
                  <div class="shadow-icon"><i class="pe-7s-mail-open"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section About -->
    <section>
      <div class="container pt-50 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-4">
              <h3 class="text-uppercase font-weight-600 mt-0">About <span class="text-theme-colored2">Learnpro</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="font-16 mt-20">Lorem ipsum dolor sit amet, consecte turadipie sicing elit. Quas voluptatem maiores eaques Quasvolu ptatem maiores</p>
              <ul class="list theme-colored2 angle-double-right">
                <li>We achieved most leading universtiy award 2017</li>
                <li>We always try to provide our best quality education</li>
                <li>Over 2000+ students has completed graduation</li>
                <li>Best online course provide university this year</li>
              </ul>
              <a href="#" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-10">Read More</a>
            </div>
            <div class="col-md-4">
              <h3 class="text-uppercase font-weight-600 mt-0 mt-sm-30">Video <span class="text-theme-colored2">Tour</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <div class="box-hover-effect about-video">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/360x260" alt="project">
                  </div>
                  <div class="video-button"></div>
                  <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?v=F3QpgXBtDeo" title="Youtube Video">Youtube Video</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <h3 class="text-uppercase font-weight-600 mt-0 mt-sm-30">Upcoming <span class="text-theme-colored2">Events</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <article>
                <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">28</li>
                      <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">Admission Fair Spring 2017</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm - 7.30 pm</span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> 25 Newyork City.</span>
                  </div>
                </div>
              </article>
              <article>
                <div class="event-small media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">28</li>
                      <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">Learning Spoken English</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm - 7.30 pm</span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> 25 Newyork City.</span>
                  </div>
                </div>
              </article>
              <article>
                <div class="event-small media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">28</li>
                      <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">Workshop Online Marketing</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm - 7.30 pm</span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> 25 Newyork City.</span>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Courses -->
    <section id="courses" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="text-uppercase title">Popular <span class="text-theme-colored2">Courses</span></h2>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>              
              <p class="text-uppercase">Choose Your Desired Course</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="owl-carousel-3col" data-nav="true">
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="http://placehold.it/360x250">
                  <div class="price-tag">$290</div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="page-course-details.html"><h4 class="mt-0 mb-5">Nural Networking Course</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="http://placehold.it/54x54" alt="" class="img-circle">
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio.</p>
                  <ul class="list-inline course-meta mt-15">
                    <li>
                      <h6>4 year</h6>
                      <span> Course</span>
                    </li>
                    <li>
                      <h6>35</h6>
                      <span> Class Size</span>
                    </li>
                    <li>
                      <h6><span class="course-time">2 hours 30 min</span></h6>
                      <span> Class Duration</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="http://placehold.it/360x250">
                  <div class="price-tag">$290</div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="page-course-details.html"><h4 class="mt-0 mb-5">Nural Networking Course</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                      </li>
                      <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="http://placehold.it/54x54" alt="" class="img-circle">
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio.</p>
                  <ul class="list-inline course-meta mt-15">
                    <li>
                      <h6>3 year</h6>
                      <span> Course</span>
                    </li>
                    <li>
                      <h6>20</h6>
                      <span> Class Size</span>
                    </li>
                    <li>
                      <h6><span class="course-time">1 hour 45 min</span></h6>
                      <span> Class Duration</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="http://placehold.it/360x250">
                  <div class="price-tag">Free</div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="page-course-details.html"><h4 class="mt-0 mb-5">Nural Networking Course</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="http://placehold.it/54x54" alt="" class="img-circle">
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio.</p>
                  <ul class="list-inline course-meta mt-15">
                    <li>
                      <h6>2 year</h6>
                      <span> Course</span>
                    </li>
                    <li>
                      <h6>30</h6>
                      <span> Class Size</span>
                    </li>
                    <li>
                      <h6><span class="course-time">2 hours 30 min</span></h6>
                      <span> Class Duration</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="http://placehold.it/360x250">
                  <div class="price-tag">$290</div>
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="page-course-details.html"><h4 class="mt-0 mb-5">Nural Networking Course</h4></a>
                    <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                      </li>
                      <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>
                  </div>
                  <div class="author-thumb">
                    <img src="http://placehold.it/54x54" alt="" class="img-circle">
                  </div>
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio.</p>
                  <ul class="list-inline course-meta mt-15">
                    <li>
                      <h6>1 year</h6>
                      <span> Course</span>
                    </li>
                    <li>
                      <h6>45</h6>
                      <span> Class Size</span>
                    </li>
                    <li>
                      <h6><span class="course-time">3 hours 20 min</span></h6>
                      <span> Class Duration</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--start Funfacts Section-->
    <section class="parallax layer-overlay overlay-theme-colored-9" data-bg-img="http://placehold.it/1920x820" data-parallax-ratio="0.4">
      <div class="container pt-90 pb-90">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="5100" data-theme="minimal">0</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Happy Students</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="200" data-theme="minimal">0</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Approved Courses</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="20" data-theme="minimal">0</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Certified Teachers</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="600" data-theme="minimal">0</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Graduate Students</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Team -->
    <section id="team">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="text-uppercase title">Qualified <span class="text-theme-colored2">Teachers</span></h2>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>              
              <p class="text-uppercase mb-0">We Have Highly Qualified Teachers</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="team-members">
            <div class="col-md-3">
              <div class="team-members maxwidth400 mb-30">
                <div class="team-thumb">
                  <img src="http://placehold.it/275x370" alt="" class="img-fullwidth">
                </div>
                <div class="team-bottom-part bg-silver-deep p-15 pb-0">
                  <h4 class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0">Oliver Queen <span class="text-gray font-13 ml-5">- LLB</span></h4>                  
                  <p class="font-13 mt-10 mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                  <ul class="styled-icons icon-theme-colored2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="team-members maxwidth400 mb-30">
                <div class="team-thumb">
                  <img src="http://placehold.it/275x370" alt="" class="img-fullwidth">
                </div>
                <div class="team-bottom-part bg-silver-deep p-15 pb-0">
                  <h4 class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0">John Diggle <span class="text-gray font-13 ml-5">- CSE</span></h4>                  
                  <p class="font-13 mt-10 mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                  <ul class="styled-icons icon-theme-colored2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="team-members maxwidth400 mb-30">
                <div class="team-thumb">
                  <img src="http://placehold.it/275x370" alt="" class="img-fullwidth">
                </div>
                <div class="team-bottom-part bg-silver-deep p-15 pb-0">
                  <h4 class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0">Laurel Lance <span class="text-gray font-13 ml-5">- Civil</span></h4>                  
                  <p class="font-13 mt-10 mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                  <ul class="styled-icons icon-theme-colored2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="team-members maxwidth400 mb-30">
                <div class="team-thumb">
                  <img src="http://placehold.it/275x370" alt="" class="img-fullwidth">
                </div>
                <div class="team-bottom-part bg-silver-deep p-15 pb-0">
                  <h4 class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0">Echo Kellum <span class="text-gray font-13 ml-5">- English</span></h4>                  
                  <p class="font-13 mt-10 mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                  <ul class="styled-icons icon-theme-colored2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Testimonials -->
    <section class="parallax Divider layer-overlay overlay-theme-colored-9" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.4">
      <div class="container pt-70 pb-30">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="text-uppercase text-white title">What <span class="text-theme-colored2">People </span>Say</h2>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>              
              <p class="text-uppercase mb-0">Student and Parents Opinion</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-30">
            <div class="owl-carousel-2col boxed" data-dots="true">
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="http://placehold.it/100x100" width="110">
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="http://placehold.it/100x100" width="110">
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="http://placehold.it/100x100" width="110">
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="http://placehold.it/100x100" width="110">
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Events -->
    <section>
      <div class="container pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
              <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-question-circle-o mr-10"></i>Frequently Asked <span class="text-theme-colored2">Questions</span></h3>
              <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="accordion6" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headin1">
                    <h6 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                        Why LearnPro University is Best?
                      </a>
                    </h6>
                  </div>
                  <div id="collaps1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headin1">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Why LearnPro University is Best?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Why LearnPro University is Best?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                        Why LearnPro University is Best?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-photo mr-10"></i>See Our <span class="text-theme-colored2">Gallery</span></h3>
              <div class="gallery-isotope default-animation-effect grid-4 gutter clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg1.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg2.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg3.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg4.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg5.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg6.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg7.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg8.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg9.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg10.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg11.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="images/gallery/gallery-lg12.jpg"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
    <section id="blog" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Latest <span class="text-theme-colored2">News </span></h2>              
              <p class="text-uppercase mb-0">See All Time Latest News</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-8">
              <div class="owl-carousel-2col owl-nav-top" data-nav="true">
                <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="http://placehold.it/372x246" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content bg-white p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                              <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                              <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
											<a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="http://placehold.it/372x246" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content bg-white p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                              <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                              <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
											<a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="http://placehold.it/372x246" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content bg-white p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                              <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                              <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
                      <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="http://placehold.it/372x246" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content bg-white p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                              <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                              <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
											<a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <h2 class="mt-0 line-height-1"><span class="text-theme-colored2">Contact us</span></h2>
                  <div class="double-line-bottom-theme-colored-2 mt-15 mb-10"></div>
                  <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio cum autem assumenda.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Our Office Location</h5>
                      <p>#405, Lan Streen, Los Vegas, USA</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Contact Number</h5>
                      <p>+325 12345 65478</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Email Address</h5>
                      <p>supporte@yourdomin.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Map -->
    <section>
      <!-- Google Map HTML Codes -->
      <div 
        data-address="121 King Street, Melbourne Victoria 3000 Australia"
        data-popupstring-id="#popupstring1"
        class="map-canvas autoload-map"
        data-mapstyle="style1"
        data-height="400"
        data-latlng="40.7807400,-74.0210890"
        data-title="sample title"
        data-zoom="12"
        data-marker="images/map-marker.png">
      </div>
      <div class="map-popupstring hidden" id="popupstring1">
        <div class="text-center">
          <h3>Kempt Central Office</h3>
          <p>121 King Street, Melbourne Victoria 3000 Australia</p>
        </div>
      </div>
      <!-- Google Map Javascript Codes -->
      <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
      <script src="js/google-map-init.js"></script>
    </section>

    <!-- Divider: Call To Action -->
    <section class="bg-theme-colored2">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="call-to-action sm-text-center">
            <div class="col-md-7">
              <h4 class="text-white mb-0">Are you ready to get start?</h4>
              <h2 class="text-white mt-0">Subscribe Newsletter for Get in Touch!</h2>
            </div>
            <div class="col-md-5">
              <!-- Mailchimp Subscription Form Starts Here -->
              <form id="mailchimp-subscription-form-footer" class="newsletter-form mt-20 pt-5">
                <div class="input-group">
                  <input value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" style="height: 45px;" type="email">
                  <span class="input-group-btn">
                    <button data-height="45px" class="btn btn-theme-colored text-white btn-xs m-0 font-14" type="submit" style="height: 45px;">Subscribe</button>
                  </span>
                </div>
              </form>
              <!-- Mailchimp Subscription Form Validation-->
              <script type="text/javascript">
                $('#mailchimp-subscription-form-footer').ajaxChimp({
                    callback: mailChimpCallBack,
                    url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;amp;amp;id=49d6d30e1e'
                });

                function mailChimpCallBack(resp) {
                    // Hide any previous response text
                    var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                        $response = '';
                    $mailchimpform.children(".alert").remove();
                    if (resp.result === 'success') {
                        $response = '&amp;lt;div class="alert alert-success"&amp;gt;&amp;lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&amp;gt;&amp;lt;span aria-hidden="true"&amp;gt;&amp;amp;times;&amp;lt;/span&amp;gt;&amp;lt;/button&amp;gt;' + resp.msg + '&amp;lt;/div&amp;gt;';
                    } else if (resp.result === 'error') {
                        $response = '&amp;lt;div class="alert alert-danger"&amp;gt;&amp;lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&amp;gt;&amp;lt;span aria-hidden="true"&amp;gt;&amp;amp;times;&amp;lt;/span&amp;gt;&amp;lt;/button&amp;gt;' + resp.msg + '&amp;lt;/div&amp;gt;';
                    }
                    $mailchimpform.prepend($response);
                }
              </script>
              <!-- Mailchimp Subscription Form Ends Here -->
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>
  <!-- Footer -->
  <footer id="footer" class="footer fixed-footer" data-bg-color="#212331">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="images/logo-white-footer.png">
            <p>203, Envato Labs, Behind Alis Steet, Melbourne, Australia.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">123-456-789</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">contact@yourdomain.com</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
            </ul>            
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-vk"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Useful Links</h4>
            <ul class="angle-double-right list-border">
              <li><a href="#">Home Page</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Mission</a></li>
              <li><a href="#">Terms and Conditions</a></li>
              <li><a href="#">FAQ</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Top News</h4>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">PHP Learning</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Web Development</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Spoken English</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right bg-theme-colored2 text-white closed"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2b2d3b">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy;2017 ThemeMascot. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="<?=base_url();?>js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?=base_url();?>js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>