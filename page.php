<?php get_header(); ?>
<div id="content" class="col-sm-8" role="main">
<!--記事の枠線-->
<?php if (have_posts()) : // WordPress ループ
while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
<div id="article2">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
<!--続きを読むを削除し記事全文を表示-->
<?php the_content(); ?>
<!--投稿画面で複数のページに分ける設定（ページャー）。次ページを指定するタグ。<!--nextpages-->
<?php $args=array(
'before'=>'<div class="page-link">',
'after'=>'</div>',
'link_before'=>'<span>',
'link_after'=>'</span>',
);
wp_link_pages($args);
  ?>
<p class="footer-post-meta">
<!--テンプレートタグthe_tagsでタグを呼び出し。タグが複数の場合,で区切る。-->
<?php the_tags('Tag : ',', '); ?>
<!--もし複数の投稿者の登録があれば、作成者を表示（条件分岐）-->
<?php if ( is_multi_author() ): ?>
<!--
get_author_posts_urlで投稿者ページのurlを取得。
get_the_author_metaで色々な投稿者情報を取得
-->
<!--the_authorで投稿者の名前を表示-->
<span class="post-author">作成者 : <a href="<?php echo
  get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php
the_author(); ?></a></span>
<?php endif; ?>
</p>
</div>

</div>
<?php endwhile; // 繰り返し処理終了
else : // ここから記事が見つからなかった場合の処理 ?>
<div class="post">
<h2>記事はありません</h2>
<p>お探しの記事は見つかりませんでした。</p>
</div>
<?php endif; // WordPress ループ終了 ?>
  
  
<!-- comment area -->
    <!-- /main -->
    <!-- 一番上に戻るボタン-->

</div>


<div id="container" class="row">
    <?php get_sidebar(); ?>
      </div>
<div id="container">
<?php get_footer(); ?>
</div>