<?php
//*load font awesome
function wpb_load_fa() {
wp_enqueue_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.cs' );
}
add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );

//*load google fonts used in html theme
function wpb_add_google_fonts() { 
wp_enqueue_style( 'wpb-google-fonts', 'fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,400,400italic,600', false ); 
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

//*register sidebar
$args = array(
	'name'          => __( 'Main_Left_Sidebar'),
	'id'            => 'left',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
    'class'         => '4u 12u(mobile)',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar($args);

$args_1 = array(
	'name'          => __( 'Bottom_Sidebar'),
	'id'            => 'bottom1',    // ID should be LOWERCASE  ! ! !
	'description'   => '',
    'class'         => 'bottom_sidebar_1',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar($args_1);

$args_2 = array(
	'name'          => __( 'Bottom_Sidebar_2'),
	'id'            => 'bottom2',    // ID should be LOWERCASE  ! ! !
	'description'   => 'bottom_sidebar_2',
    'class'         => 'bottom_sidebar_2',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar($args_2);

$args_3 = array(
	'name'          => __( 'Carousel_Sidebar_1'),
	'id'            => 'carousel1',    // ID should be LOWERCASE  ! ! !
	'description'   => 'carousel1',
    'class'         => 'carousel1',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar($args_3);

$args_4 = array(
	'name'          => __( 'Carousel_Sidebar_2'),
	'id'            => 'carousel2',    // ID should be LOWERCASE  ! ! !
	'description'   => 'carousel2',
    'class'         => 'carousel2',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar($args_4);

$args_5 = array(
	'name'          => __( 'Carousel_Sidebar_3'),
	'id'            => 'carousel3',    // ID should be LOWERCASE  ! ! !
	'description'   => 'carousel3',
    'class'         => 'carousel3',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar($args_5);

$args_6 = array(
	'name'          => __( 'Carousel_Sidebar_4'),
	'id'            => 'carousel4',    // ID should be LOWERCASE  ! ! !
	'description'   => 'carousel4',
    'class'         => 'carousel4',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar($args_6);

$args_7 = array(
	'name'          => __( 'Carousel_Sidebar_5'),
	'id'            => 'carousel5',    // ID should be LOWERCASE  ! ! !
	'description'   => 'carousel5',
    'class'         => 'carousel5',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar($args_7);

$args_8 = array(
	'name'          => __( 'Carousel_Sidebar_6'),
	'id'            => 'carousel6',    // ID should be LOWERCASE  ! ! !
	'description'   => 'carousel6',
    'class'         => 'carousel6',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar($args_8);

$args_9 = array(
	'name'          => __( 'Carousel_Sidebar_7'),
	'id'            => 'carousel7',    // ID should be LOWERCASE  ! ! !
	'description'   => 'carousel7',
    'class'         => 'carousel7',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' ); 
register_sidebar($args_9);

//register main menu
//register_nav_menu('header-menu','Main_Header_Menu');
//register_nav_menus( array(
//		'header' => __( 'Main Header Menu',      'helios' ),
//		'social'  => __( 'Social Links Menu', 'helios' ),
//	) );
function wpb_custom_new_menu() {
  register_nav_menu('header-menu',__( 'Main_Header_Menu'));
}
add_action( 'init', 'wpb_custom_new_menu' );




