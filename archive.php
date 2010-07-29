<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<div id="content" class="archive column span-24 last">

		<?php if (have_posts()) : 
		  $post = $posts[0]; // Hack. Set $post so that the_date() works.
 	    if (is_category()) { 
 	      $title = single_cat_title('', false); 
 	      $content = get_page_by($title); 	      
 	    } elseif( is_tag() ) { 
 	      $title = single_tag_title('', false);
 	      $content = get_page_by($title); 
 	    } elseif (is_day()) { 
 	      $title = get_the_time('F jS, Y'); 
 	    } elseif (is_month()) { 
 	      $title =  get_the_time('F, Y');
 	    } elseif (is_year()) { 
 	      $title =  get_the_time('Y'); 
 	    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
		    $title = "Archives";  
		  } ?>
		
		<div id="content" class="blog column span-24 last">	
		  <div class="block post">
		    <div id="body" class="column span-16 last">
		      <?php echo $content; ?>
		      <br/>
		    </div>
		    <div id="meta" class="column span-8 last">
		      <h1><?php echo $title ?></h1>
		    </div>
		  </div>	
		  		  
    
      <?php while (have_posts()) : the_post();   
        include "post.php";
		  endwhile; ?>
		</div>		

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>		
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

</div>



<?php get_footer(); ?>
