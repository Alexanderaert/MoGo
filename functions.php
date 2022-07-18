<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/menu/wp-bootstrap-navwalker.php';

// Меню сайта
register_nav_menus(
   array(
      'menu-1' => 'Main menu',
      'menu-2' => 'Footer menu',
   )
);
// Привью поста
function zatyshok_theme_setup(){
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'zatyshok_theme_setup' );

//bootstrap_css
function my_bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'my_bootstrap_css');

//not_slim
function my_jqwery_not_slim_js() {

	wp_enqueue_script( 'jqwery_not_slim_js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
}
add_action( 'wp_enqueue_scripts', 'my_jqwery_not_slim_js');

//my_swiper_js
function my_swiper_js() {

	wp_enqueue_script( 'swiper_js', 'https://unpkg.com/swiper@8/swiper-bundle.min.js');
}
add_action( 'wp_enqueue_scripts', 'my_swiper_js');

//swiper_styles
function swiper_styles() {

	wp_enqueue_style( 'swiper_styles', 'https://unpkg.com/swiper@8/swiper-bundle.min.css' );
}
add_action( 'wp_enqueue_scripts', 'swiper_styles');

//scrol counter
function my_jqwery_scrol_counter() {

	wp_enqueue_script( 'my_jqwery_scrol_counter', get_template_directory_uri() . '/js/viewportChecker.js' );
}
add_action( 'wp_enqueue_scripts', 'my_jqwery_scrol_counter');

//bootstrap_js
function my_bootstrap_js() {

	wp_enqueue_script( 'bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js' );
}
add_action( 'wp_enqueue_scripts', 'my_bootstrap_js');

//script_js
function my_script_js() {

	wp_enqueue_script( 'script_js', get_template_directory_uri() . '/app.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_script_js');

//styles
function my_styles() {

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_styles');

//Логотип
add_theme_support( 'custom-logo', [
   'height'      => 42,
   'width'       => 214,
   'flex-width'  => false,
   'flex-height' => false,
   'header-text' => '',
   'unlink-homepage-logo' => true, // WP 5.5
] );

//Кастомные поля для телефона, почты, аддреса 
function cml_customize_inform( $wp_customize ) {

      $wp_customize->add_section(
          'information_section',
          array(
              'title' => 'Контактные данные',
              'description' => "Тут можно указать контактные данные"
          )
      );
   
   $wp_customize->add_setting(
       'telephone',
       array(
           'default' => '',
           'type' => 'option'
       )
   );
   $wp_customize->add_control(
       'telephone',
       array(
           'type' => 'text',
           'label' => "Телефон обязательно",
           'section' => 'information_section',
           // This last one must match setting ID from above
           'settings' => 'telephone'
       )
   );
   $wp_customize->add_setting(
       'email',
       array(
           'default' => '',
           'type' => 'option'
       )
   );
   $wp_customize->add_control(
       'email',
       array(
           'type' => 'text',
           'label' => "Почта (E-mail)",
           'section' => 'information_section',
           // This last one must match setting ID from above
           'settings' => 'email'
       )
   );
   }
   
   add_action( 'customize_register', 'cml_customize_inform' );

//Социальные сети
function cml_customize_register( $wp_customize ) {
   $wp_customize->add_section(
       'social_media_section',
       array(
           'title' => 'Социальные сети',
           'description' => "Тут можно указать ссылки на Ваши Соц. сети"
       )
   );
   
   $wp_customize->add_setting(
       'facebook',
       array(
           'default' => '',
           'type' => 'option'
       )
   );
   $wp_customize->add_control(
       'facebook',
       array(
           'type' => 'text',
           'label' => "Ссылка на Facebook",
           'section' => 'social_media_section',
           // This last one must match setting ID from above
           'settings' => 'facebook'
       )
   );
   $wp_customize->add_setting(
      'whatsApp',
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      'whatsApp',
      array(
          'type' => 'text',
          'label' => "Ссылка на WhatsApp",
          'section' => 'social_media_section',
          // This last one must match setting ID from above
          'settings' => 'whatsApp'
      )
  );
   $wp_customize->add_setting(
       'instagram',
       array(
           'default' => '',
           'type' => 'option'
       )
   );
   $wp_customize->add_control(
       'instagram',
       array(
           'type' => 'text',
           'label' => "Ссылка на Instagram",
           'section' => 'social_media_section',
           // This last one must match setting ID from above
           'settings' => 'instagram'
       )
   );
   $wp_customize->add_setting(
      'telegram',
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      'telegram',
      array(
          'type' => 'text',
          'label' => "Ссылка на Telegram",
          'section' => 'social_media_section',
          // This last one must match setting ID from above
          'settings' => 'telegram'
      )
  );
  $wp_customize->add_setting(
   'viber',
   array(
       'default' => '',
       'type' => 'option'
   )
   );
   $wp_customize->add_control(
      'viber',
      array(
          'type' => 'text',
          'label' => "Ссылка на Viber",
          'section' => 'social_media_section',
          // This last one must match setting ID from above
          'settings' => 'viber'
      )
   );
   }
   add_action( 'customize_register', 'cml_customize_register' );


   add_action( 'init', 'register_post_types' );

      
function register_post_types(){
	register_post_type( 'post_type_work', [
		'label'  => null,
		'labels' => [
			'name'               => 'Works',
			'singular_name'      => 'Work',
			'add_new'            => 'Add work',
			'add_new_item'       => 'Adding work',
			'edit_item'          => 'Editing work',
			'new_item'           => 'New work',
			'view_item'          => 'Watch work',
			'search_items'       => 'Search work',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in cart', 
			'parent_item_colon'  => '',
			'menu_name'          => 'Work',
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null,
		// 'exclude_from_search' => null,
		// 'show_ui'             => null,
		// 'show_in_nav_menus'   => null,
		'show_in_menu'        => null, 
		// 'show_in_admin_bar'   => null,
		'show_in_rest'        => true, 
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post',
		//'map_meta_cap'      => null, 
		'hierarchical'        => false,
		'supports'            => [ 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' ], 
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

   register_post_type( 'post_type_blog', [
		'label'  => null,
		'labels' => [
			'name'               => 'Blogs',
			'singular_name'      => 'Blog',
			'add_new'            => 'Add blog',
			'add_new_item'       => 'Adding blog',
			'edit_item'          => 'Editing blog',
			'new_item'           => 'New blog',
			'view_item'          => 'Watch blog',
			'search_items'       => 'Search blog',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in cart', 
			'parent_item_colon'  => '',
			'menu_name'          => 'Blog',
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null,
		// 'exclude_from_search' => null,
		// 'show_ui'             => null,
		// 'show_in_nav_menus'   => null,
		'show_in_menu'        => null, 
		// 'show_in_admin_bar'   => null,
		'show_in_rest'        => true, 
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post',
		//'map_meta_cap'      => null, 
		'hierarchical'        => false,
		'supports'            => [ 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' ], 
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );

   register_post_type( 'post_type_team', [
		'label'  => null,
		'labels' => [
			'name'               => 'Teams',
			'singular_name'      => 'Team',
			'add_new'            => 'Add team',
			'add_new_item'       => 'Adding team',
			'edit_item'          => 'Editing team',
			'new_item'           => 'New team',
			'view_item'          => 'Watch team',
			'search_items'       => 'Search team',
			'not_found'          => 'Not found',
			'not_found_in_trash' => 'Not found in cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Team',
		],
		'description'         => '',
		'public'              => true,
		// 'publicly_queryable'  => null,
		// 'exclude_from_search' => null,
		// 'show_ui'             => null,
		// 'show_in_nav_menus'   => null,
		'show_in_menu'        => null,
		// 'show_in_admin_bar'   => null,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post',
		//'map_meta_cap'      => null,
		'hierarchical'        => false,
		'supports'            => [ 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' ],
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	] );
}

function link_main_page() {
   if( is_front_page() ) {
      return '<p>' . get_bloginfo('name') . '</p>';
   } else {
      return '<a href="' . get_home_url() . '">' . get_bloginfo('name') . '</a>';
   }
}

add_filter( 'get_search_form', 'my_search_form' );
function my_search_form( $form ) {

	$form = '
	<form role="search" class="button_item_search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
		<input type="text" placeholder="Search" autocomplete="off" value="' . get_search_query() . '" name="s" id="s" />
      <button type="submit" id="searchsubmit">
         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 18 18"><g><g><path fill="#fff" d="M17.8 16.15a1.65 1.65 0 0 1-2.817 1.166l-4.836-4.835c-.982.58-2.124.919-3.347.919a6.6 6.6 0 1 1 6.6-6.6 6.558 6.558 0 0 1-.919 3.347l4.836 4.836c.298.298.483.71.483 1.167zm-11-14.3a4.95 4.95 0 1 0 0 9.9 4.95 4.95 0 0 0 0-9.9z"/></g></g></svg>
      </button>
	</form>';

	return $form;
}

function getPostViews($postID){
   $count_key = 'post_views_count';
   $count = get_post_meta($postID, $count_key, true);
   if($count==''){
       delete_post_meta($postID, $count_key);
       add_post_meta($postID, $count_key, '0');
       return "0";
   }
   return $count;
}
function setPostViews($postID) {
   $count_key = 'post_views_count';
   $count = get_post_meta($postID, $count_key, true);
   if($count==''){
       $count = 0;
       delete_post_meta($postID, $count_key);
       add_post_meta($postID, $count_key, '0');
   }else{
       $count++;
       update_post_meta($postID, $count_key, $count);
   }
}
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
   $defaults['post_views'] = __('Просмотры');
   return $defaults;
}
function posts_custom_column_views($column_name, $id){
       if($column_name === 'post_views'){
       echo getPostViews(get_the_ID());
   }
}

?>