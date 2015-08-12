<?php get_header();?>
   
    <!-- main -->
    <div id="main">

      <!-- post -->
<?php if(have_posts() ) :
      while(have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID();?>" <?php post_class(); ?>>
<!--      the_permalink記事のパーマリンクを出力-->
<!--     the_title記事のタイトルを表示-->
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post-meta">
<!--         the_date記事の日付を表示-->
          <span class="post-date"><?php echo get_the_date(); ?></span>
<!--          the_category記事のカテゴリーを表示-->
          <span class="category">Category-<?php the_category(',') ?></span>
          <span class="comment-num">
<!--           comment_popup_linkコメント数を表示-->
            <?php comments_popup_link('Comment : 0','Comment : 1','Comments : %');?>
          </span>
        </p>
<!--        the_contentコンテンツ（画像を含む）、続きを読むのリンクを表示-->
        <?php the_content('続きを読む &raquo;'); ?>
        
      </div>
      <?php
//この部分で記事を表示する処理をしています。
endwhile;//繰り返し処理終了
else: ?>
     <div class="post">
       <h2>記事はありません</h2>
       <p>お探しの記事は見つかりませんでした</p>
      </div>
      <?php endif;?>
      <!-- pager -->
<!--      1ページより多かったらtrue（条件分岐）-->
<?php if($wp_query -> max_num_pages > 1):?>
      <div class="navigation">
<!--       前の（古い）ページ編リンクを表示-->
        <div class="alignleft"><?php next_posts_link('<< PREV');?></div>
<!--        次の（新しい）ページへのリンクを表示-->
        <div class="alignright"><?php previous_posts_link('NEXT >>');?></div>

      <!-- /pager	 -->

    </div>
        <?php endif; ?>
  
</div>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>
    <!-- /main -->

