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
 	      $title = single_cat_title(); 
 	      $content = get_page_by($title);
 	    } elseif( is_tag() ) { 
 	      $title = single_tag_title(); 
 	    } elseif (is_day()) { 
 	      $title = the_time('F jS, Y'); 
 	    } elseif (is_month()) { 
 	      $title =  the_time('F, Y');
 	    } elseif (is_year()) { 
 	      $title =  the_time('Y'); 
 	    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
		    $title = "Archives";  
		  } ?>
		
		<?php if ($content) { ?>  
    <div class="details" class="block">      
      <?php echo $content; ?>
    </div>
    <?php } ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<div class="entry">
					<?php the_content() ?>
				</div>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>

			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	<?php else :

		get_search_form();

	endif;
?>

	</div>



<?php get_footer(); ?>
