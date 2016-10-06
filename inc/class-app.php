<?php

class App {

  public function __construct() {

    add_action( 'init', array( $this, 'app_init' ) );

    add_action( 'wp_enqueue_scripts', array( $this, 'app_enqueue_styles' ) );
    add_action( 'wp_enqueue_scripts', array( $this, 'app_enqueue_scripts' ) );

  }

  public function app_init() {

    $this->app_add_theme_support( array( 'menus', 'post-thumbnails', 'title-tag', 'html5' ) );

    $this->app_register_nav_menu( array( 'main' => 'Main Navigation', 'sub' => 'Sub Navigation' ) );

  }

  public function app_enqueue_styles() {

    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all' );

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

}

?>
