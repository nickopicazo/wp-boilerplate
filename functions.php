<?php

error_reporting( E_ALL );

require_once( get_template_directory() . '/inc/class-app.php' );

$app = new App;

$input = get_template_directory() . '/less/main.less';
$output = get_template_directory() . '/css/main.css';

$app->app_less_compile( $input, $output );

$app->app_register_nav_menu( array( 'primary' => 'Primary Navigation', 'secondary' => 'Secondary Navigation' ) );

?>
