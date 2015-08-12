<!--サイドバーのウィジェットを使えるようにする機能。-->
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
<!--サイトのメインナビゲーションをカスタムメニューで設定する機能-->
<?php
//カスタムメニューを有効化
add_theme_support('menus');
//カスタムメニューの「場所」を設定するコード
//header.phpのheader-naviに設定したカスタムメニューを反映させる
register_nav_menu('header-navi','ヘッダーのナビゲーション');
//カスタムメニューは複数作れる。footer.phpにwp_nav_menu(array('theme_location'=>'footer-navi'));を書き加えればOK。
//register_nav_menu( 'footer-navi', 'フッターのナビゲーション' );
?>
<!--バグチェックで引っかかった項目-->
<!--必須：コンテンツ幅が設定されていません。-->
<?php
if(!isset($content_width))$content_width=600;
?>
<!--RSS2のフィードリンクを表示してくれる機能。-->
<?php
add_theme_support('automatic-feed-links');
?>