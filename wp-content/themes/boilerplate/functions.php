<?php

error_reporting( E_ALL );

require_once( get_template_directory() . '/lib/aristath/kirki/kirki.php' );

require_once( get_template_directory() . '/inc/class-app.php' );
require_once( get_template_directory() . '/inc/class-app-kirki.php' );
require_once( get_template_directory() . '/inc/class-app-customize.php' );

$app = new App();
$app_kirki = new App_Kirki();
$app_customize = new App_Customize();

$input = get_template_directory() . '/less/main.less';
$output = get_template_directory() . '/css/main.css';

//$app->app_less_compile( $input, $output );

$app->app_register_nav_menu( array( 'primary' => 'Primary Navigation', 'secondary' => 'Secondary Navigation' ) );

?>
