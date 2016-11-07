<?php

class App {

  public function __construct() {

    add_action( 'init', array( $this, 'app_init' ) );

    add_action( 'wp_enqueue_scripts', array( $this, 'app_enqueue_styles' ) );
    add_action( 'wp_enqueue_scripts', array( $this, 'app_enqueue_scripts' ) );

    add_filter( 'wp_nav_menu_items', array( $this, 'app_nav_items' ), 1, 2 );

  }

  public function app_init() {

    $this->app_add_theme_support( array( 'menus', 'post-thumbnails', 'title-tag', 'html5' ) );

  }

  public function app_enqueue_styles() {

    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all' );
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array( 'bootstrap' ), '4.6.3', 'all' );
    wp_enqueue_style( 'main', get_bloginfo('template_url') . '/css/main.css', array( 'bootstrap' ), '4.6.3', 'all' );

  }

  public function app_enqueue_scripts() {

    wp_deregister_script( 'jquery' );

    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-2.2.4.min.js', array(), '2.2.4', true );
    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );

  }

  public function app_add_theme_support( $features = array() ) {

    for ( $x = 0; $x <= count( $features ) - 2; $x++ ) {

      add_theme_support( $features[ $x ] );

    }

  }

  public function app_register_nav_menu( $navs = array() ) {

    foreach ( $navs as $key => $value ) {

      register_nav_menu( $key, $value );

    }

  }

  public function app_less_compile( $input, $output ) {

    require_once( get_template_directory() . '/lib/less.php/lessc.inc.php' );

    try {

      $url = '';
  		$options = array( 'compress' => true );
  		$parser = new Less_Parser( $options );

  		$parser->parseFile( $input, $url );

  		$css = $parser->getCss();

  		file_put_contents( $output, $css );

  	} catch( Exception $e ) {

  		$error = $e->getMessage();
  		print_r( $error );

  	}

  }

  public function app_nav_items( $items, $menu ) {

    if ( $menu->menu == 'primary' ) {

      if ( is_user_logged_in() ) {

        $item = '<li><a href="' . get_bloginfo('url') . '"><i class="fa fa-home fa-fw"></i></a></li>';

        $items = $item . $items;

      }

    }

    return $items;

  }

}

?>
