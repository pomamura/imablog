<?php if(have_posts()):?>
    <div class="related-post">
    <?php while(have_posts()) : the_post(); ?>
	<?php if(has_post_thumbnail()):?>
	<div class="related-entry">
		<a href="<?php the_permalink() ?>"rel="bookmark"title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail("thumbnail"); ?></a>
	<div class="related-words"><p><a href="<?php the_permalink() ?>"rel="bookmark"title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p></div><!-- / .related-words -->
	</div><!-- / .related-entry -->
          <?php endif; ?>
     <?php endwhile; ?>
     </div><!-- / .related-post -->
<?php else: ?>
<!-- 関連記事がないときのHTMLをここに書く-->
<?php endif; ?>