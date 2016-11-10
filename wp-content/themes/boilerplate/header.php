<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700|Playfair+Display:400,400i,700,700i" rel="stylesheet">
<?php if ( $_SERVER['SERVER_NAME'] == 'cygnalinc.dev' ) { ?>
<script>
less = {
env: "development"
};
</script>
<link href="<?php bloginfo('template_url'); ?>/less/main.less" rel="stylesheet/less" type="text/css" />
<script src="<?php bloginfo('template_url'); ?>/js/less.min.js"></script>
<?php } ?>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<?php get_template_part( 'templates/main', 'header' ); ?>
