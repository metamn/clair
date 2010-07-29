<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<title>
		  <?php bloginfo('description') ?>		  
		</title>
		
		
    <!-- Blueprint -->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/blueprint/print.css" type="text/css" media="print">	
    <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/clair.css" type="text/css" media="screen" />		
		
		<!-- jQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<!-- init all jquery functions -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.init.js"></script>
        
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts RSS Feed', 'buddypress' ) ?>" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> <?php _e( 'Blog Posts Atom Feed', 'buddypress' ) ?>" href="<?php bloginfo('atom_url'); ?>" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

		<?php wp_head(); ?>
	</head>
	<body>
	  <div class="container"> <!-- closed in footer -->
	    
	    <div id="header" class="column span-24 last">
	      <div id="logo" class="column span-12 last">
	        <a href="<?php bloginfo('home'); ?>" alt="Home" title="Home">
	          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-csepp.jpg">
	          <h2><?php bloginfo('description') ?></h2>
	        </a>
	      </div>
	      <div class="column span-12 last">	        
	        <div id="search">
	          <?php get_search_form(); ?>
	        </div>
	      </div>
	    </div>
	    
	    <div id="intro" class="column span-24 last">
	      <?php echo get_page_by('about'); ?>
	    </div>
	    		  	
	    
