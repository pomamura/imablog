<?php if(have_posts()):?>
	<h2>関連記事</h2>
    <div class="related-post">
    <?php while(have_posts()) : the_post(); ?>
	<?php if(has_post_thumbnail()):?>
	<div class="related-entry">
		<a href="<?php the_permalink() ?>"rel="bookmark"title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail("thumbnail"); ?></a>
	<a href="<?php the_permalink() ?>"rel="bookmark"title="<?php the_title_attribute(); ?>"><div class="related-words"><p><?php the_title(); ?></p></div></a><!-- / .related-words -->

	</div><!-- / .related-entry -->
          <?php endif; ?>
     <?php endwhile; ?>
     </div><!-- / .related-post -->
<?php else: ?>
<p>関連記事はありません。</p>
<?php endif; ?>