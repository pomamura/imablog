<?php get_header();?>
   
    <!-- main -->
<!--    横幅指定用のクラスを追加（ページ左側の幅）-->
<!--   col-sm-768px以上なら8カラムにする(レスポンシブデザイン)-->
    <div id="content" class="col-sm-8" role="main">

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
      <div class="navigation">
      <!--      1ページより多かったらtrue（条件分岐）-->
<?php if($wp_query -> max_num_pages > 1):?>
<?php 
$args = array(
  'prev_text' => '前へ',     //「前へ」のテキスト。
  'next_text' => '次へ',   //「次へ」のテキスト
  'class_name' => 'pagination'  //これはdiv要素のクラスなので必須ではない
);
pagenavi($args);
?>
      <!-- /pager	 -->
    </div>
        <?php endif; ?>
 </div>
<div id="container" class="row">
    <?php get_sidebar(); ?>
      </div>
<div id="container">
<?php get_footer(); ?>
</div>
    <!-- /main -->
 
