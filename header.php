<!doctype html>
<html 
<?php language_attributes(); ?> class="no-js">
<head>

<link href="https://fonts.googleapis.com/css?family=Lobster|Montserrat+Subrayada|Poiret+One|Raleway|Six+Caps" rel="stylesheet">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<meta charset="<?php bloginfo('charset'); ?>
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

</head>
	<body <?php body_class(); ?>>
<!-- header -->
<header class="header clear" role="banner">
<a name="Home"></a>
<div class="container">
  <div class="fixed-bg">
    <div id="name">
      <h1>Carmen Smith</h1>
    </div>
 <div id="icon">
      <span class="glyphicon glyphicon-chevron-left" style="inline-block"></span>
      <span class="glyphicon glyphicon-heart">     
</span>
      <span class="glyphicon glyphicon-chevron-right"></span>
    </div>
 </header>
<!-- nav -->
<div class="container-fluid navbar-fixed-top">
    <ul id="nav">
      <li class="navoptions">
        <a href="#Home">Home</a></li>
      <li class="navoptions">
        <a href="#About">About</a></li>
      <li class="navoptions">
        <a href="#Projects">Projects</a>
      </li>
      <li class="navoptions">
        <a href="#Contact">Contact</a></li>
    </ul>
  </div>
</div>
<!-- /nav -->
	