<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<?php if ( $_SERVER['SERVER_NAME'] == 'wp.dev' ) { ?>
<script>
less = {
env: "development"
};
</script>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/less/main.less" rel="stylesheet/less" type="text/css" />
<script src="<?php echo get_template_directory_uri(); ?>/js/less.min.js"></script>
<?php } ?>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
