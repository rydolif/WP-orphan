<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
	<meta name="theme-color" content="#000">

	<link rel="stylesheet" href="css/main.min.css?v=1">
	<link href="https://fonts.googleapis.com/css?family=Lora|Montserrat:300,400,500,600,700,800&display=swap" rel="stylesheet">

</head>

<?php wp_head(); ?>

<body>

	<?php get_template_part( 'parts/header' ); ?>

	<?php get_template_part( 'parts/nav' ); ?>

