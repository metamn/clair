<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
  <div id="body" class="column span-16 last">
	  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	  <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
    <div class="entry">
	    <?php the_content('Read the rest of this entry &raquo;'); ?>
    </div>				    
  </div> 
  <div id="meta" class="column span-8 last">
    <div class="postmetadata">
    <?php
      echo '<ul class="categories">'; 
      post_categories($post->ID);
      echo '</ul>';
      echo '<div id="tags">';
      the_tags('', ', ', '');
      echo '</div>';
      echo '<div id="excerpt">';
      echo get_post_meta($post->ID, 'Excerpt', true);
      echo '</div>';            
      comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); 
    ?>
    </div>
  </div> 				    
</div>
