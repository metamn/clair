<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>

  <?php
  
      $params = str_replace("%5B%5D", "", $_SERVER['QUERY_STRING']);	
		  $subs = explode("&", $params);
		  
		  $tmp = explode("=", $subs[0]);
		  $text = $tmp[1];
  
  ?>

	<div id="content" class="search column span-24 last">
	  <div class="block post">
	    <div id="body" class="column span-16 last">
	      <?php echo $content; ?>
	      <br/>
	    </div>
	    <div id="meta" class="column span-8 last">
	      <h1><?php echo $text ?></h1>
	    </div>
	  </div>

	<?php if (have_posts()) : 
	  while (have_posts()) : the_post();   
      include "post.php";
		endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2>No posts found. Try a different search? Or browse the Archives ...</h2>
		<div class="column span-8 last colborder">
		  <ul>
        <?php wp_list_categories('show_count=1&feed=RSS'); ?> 
      </ul>
      <ul>
        <?php wp_list_pages(); ?> 
      </ul>
      <ul>
        <?php wp_get_archives(); ?> 
      </ul>
    </div>
    <div class="column span-15 last">
      <?php wp_tag_cloud(); ?>
    </div>


	<?php endif; ?>

	</div>



<?php get_footer(); ?>
