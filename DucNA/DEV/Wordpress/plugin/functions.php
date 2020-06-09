<?php 
/** 
 * Thiết lập các hằng dữ liệu quan trọng
 * THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
 * CORE = thư mục /core của theme, chứa các file nguồn quan trọng. **/
define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );

/** 
 * Load file /core/init.php
 * Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này **/
require_once( CORE . '/init.php' );

if ( ! isset( $content_width ) ) {
    $content_width = 620;
}

/**
 * Thiết lập các chức năng sẽ được theme hỗ trợ **/
if ( ! function_exists( 'theme_setup' ) ) {

    function theme_setup() {
            /* Thiết lập theme có thể dịch được*/
            $language_folder = THEME_URL . '/languages';
            load_theme_textdomain( 'anhduc', $language_folder );

            /* Tự chèn RSS Feed links trong <head>*/
            add_theme_support( 'automatic-feed-links' );

            /* Thêm chức năng post thumbnail*/
            add_theme_support( 'post-thumbnails' );

            /*Thêm chức năng title-tag để tự thêm <title>*/
            add_theme_support( 'title-tag' );

            /* Thêm chức năng post format*/
            add_theme_support( 'post-formats',
                    array(
                            'video',
                            'image',
                            'audio',
                            'gallery'
                    )
             );

            /*Thêm chức năng custom background*/
            $default_background = array(
                    'default-color' => '#e8e8e8',
            );
            add_theme_support( 'custom-background', $default_background );

            /*Tạo menu cho theme*/
             register_nav_menu ( 'primary-menu', __('Primary Menu', 'anhduc') );

            /*Tạo sidebar cho theme */
             $sidebar = array(
                'name' => __('Main Sidebar', 'anhduc'),
                'id' => 'main-sidebar',
                'description' => 'Main sidebar for anhduc theme',
                'class' => 'main-sidebar',
                'before_title' => '<h3 class="widgettitle">',
                'after_sidebar' => '</h3>'
             );
             register_sidebar( $sidebar );
    }
    add_action ( 'init', 'theme_setup' );
}
/*Tạo logo cho header */
if ( ! function_exists( 'theme_logo' ) ) {
        function theme_logo() {?>
          <div class="logo">
       
            <div class="site-name">
              <?php if ( is_home() ) {
                printf(
                  '<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
                  get_bloginfo( 'url' ),
                  get_bloginfo( 'description' ),
                  get_bloginfo( 'sitename' )
                );
              } else {
                printf(
                  '</p><a href="%1$s" title="%2$s">%3$s</a></p>',
                  get_bloginfo( 'url' ),
                  get_bloginfo( 'description' ),
                  get_bloginfo( 'sitename' )
                );
              }  ?>
            </div>
            <div class="site-description"><?php bloginfo( 'description' ); ?></div>
       
          </div>
        <?php }
}

/*Tạo hàm hiển thị menu cho header */
if ( ! function_exists( 'theme_menu' ) ) {
        function theme_menu( $menu ) {
          $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu,
          );
          wp_nav_menu( $menu );
        }
}