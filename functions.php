<!--サイドバーのウィジェットを使えるようにします。-->
<?php
register_sidebar( array(
'name' => 'サイドバーウィジェット-1',
  'id' => 'sidebar-1',
  'description' => 'サイドバーのウィジェットエリアです。',
//  サイドバーでウィジェットを表示する際の記述
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
) );

?>
