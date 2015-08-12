<div id="comment-area">
<!--コメントがあったら-->
<?php if(have_comments()):?>
<h3 id="comments">Comment</h3>
<ol class="comments-list">
<!-- アバターの画像のサイズは55pxで指定-->
  <?php wp_list_comments('avatar_size=55');?>
</ol>
<?php endif;?>
<!--コメントページネーションのタグ-->
<div class="comment-page-link">
 <?php paginate_comments_links();?>
  </div>
<!--コメントフォームを表示-->
<?php $args=array(
  'title_reply' => 'Leave a Reply',
  'label_submit' => 'Submit Comment',
  );
comment_form($args);?>

</div>

