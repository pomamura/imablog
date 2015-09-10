<h3><span class="glyphicon glyphicon-check" aria-hidden="true"></span>記事の概要</h3>
<p>wordpressの自作テーマについて解説しています。
第一回目は、header.phpを作成します。
テーマのスタイルはBootstrapを使用しています。</p>
<hr style="visibility:hidden;clear:both;" />
<h3><span class="glyphicon glyphicon-check" aria-hidden="true"></span>ワークフロー</h3>
①<a href="#1">head要素を作ります。</a>
②<a href="#2">ヘッダー部分を作ります</a>
③<a href="#3">ナビゲーションメニューの作ります。</a>
<hr style="visibility:hidden;clear:both;" />
<h3 id="1">①head要素の作成。</h3>
<p>下記サンプルコードは、htmlをwordpressのテンプレートタグに書き換えたものです。</p>
[html]
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
  <meta charset="UTF-8">
  <title>
    <?php wp_title('|',true,'right'); bloginfo('name');?>
  </title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
  　<?php if(is_singular() ) wp_enqueue_script("comment-reply");?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <?php wp_head();?>
</head>
[/html]
<hr style="visibility:hidden;clear:both;" />
<div style="border:1px dotted #000000; padding:20px;">
<h3>TEMPLATE TAG</h3> 
<hr style="visibility:hidden;clear:both;" />
<p>・get_template_directory_uri()･･･テーマのディレクトリ（ファイル）までの場所を指定します。
 </p>
<div style="border:1px dotted #000000; padding:20px;">
<h5><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>URIとURLの違いは？</h5>
<h5>URLを拡張したものをURIと呼び、統一資源識別子とも呼ばれます。</h5>
<hr style="visibility:hidden;clear:both;" />
<h5><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>ファビコンの作り方。</h3> 
<h5>ファビコンの画像を用意します。
画像の拡張子は[favicon.ico]にしておいて下さい。 
テーマ内のimagesフォルダにファビコンの画像を追加し、下記の記述をします。</h5>
[html]
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
[/html]
</div>
<hr style="visibility:hidden;clear:both;" />
<p>・language_attributes()･･･lang属性(lang="ja")を出力します。自作テーマを公式テーマとして登録する場合必須のタグです。個人での使用が目的なら不要です。</p>
<p>・wp_title('|',true,'right'); bloginfo('name')･･･ページタイトルと、ブログ名の間に「|」で区切りを入れています。</p>
<p>・wp_enqueue_script("comment-reply")･･･コメントの返信をクリックすると、コメントフォームに移動します。</p>
<p>・get_stylesheet_uri()･･･テーマのスタイルシートのURIを返す関数です。style.cssのパスを読み込みます。</p>
<p>・wp_head()･･･RSSフィード情報、function.phpのjsやcss、プラグインを読み込みます。</p>
</div>
<hr style="visibility:hidden;clear:both;" />
<h3 id="2">②ヘッダー部分の作成。</h3>
<p>body要素の開始タグのすぐ下に以下のコードを記述してください。</p>
  [html]
        <h1>
          <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <p id="description">
          <?php bloginfo('description'); ?>
        </p>
  [/html]
<hr style="visibility:hidden;clear:both;" />
<div style="border:1px dotted #000000; padding:20px;">
<h3>TEMPLATE TAG</h3> 
<hr style="visibility:hidden;clear:both;" />
  <p>・home_url('/')…ブログのホーム（トップページ）のURIを返します。</p>
  <p>・bloginfo('name')…ブログのタイトルを表示します。</p>
  <p>・bloginfo('description')…ブログの紹介文を表示します。</p>
</div>
<hr style="visibility:hidden;clear:both;" />
<h3 id="3">③ナビゲーションメニューの作成。</h3>
<p>サンプルコードでは、<a href="http://getbootstrap.com/components/#navbar" target="_blank">Bootstrap/Navbar</a>のスタイルを適応しています。</p>
<h5>※このメニューを使用するには、あらかじめbootstrapのスタイルシートを読み込んでおく必要があります。</h5>
<hr style="visibility:hidden;clear:both;" />
  [html]
  <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WEB制作<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <?php wp_nav_menu( array( 'header-sub-navi' => 'header-navi' ) ); ?>
                </ul>
              </li>
              </ul>
                <?php wp_nav_menu(array('theme_location'=>'header-navi','container'=>'ul','menu_class'=>'nav navbar-nav'));?>
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <?php get_search_form(); ?>
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <i class=" icon-thumbs-up (&#xf164;)"></i>
            </ul>
          </div>
        </div>
      </nav>
  [/html]
<hr style="visibility:hidden;clear:both;" />
<h3>カスタムメニューの有効化をする。</h3>
<p>function.phpに以下を記述すれば、カスタムメニューを有効化できます。
カスタムメニューは、ダッシュボードの「外観→メニュー」から作成できます。</p>
  [html]
<?php
add_theme_support('menus');
register_nav_menu('header-navi','ヘッダーのナビゲーション');
register_nav_menu( 'header-sub-navi', 'サブナビゲーション' );
[/html]
<hr style="visibility:hidden;clear:both;" />
<div style="border:1px dotted #000000; padding:20px;">
<h3>TEMPLATE TAG</h3> 
<p>・add_theme_support('menus')･･･カスタムメニュー機能を有効にする。
<p>・register_nav_menu()･･･カスタムメニューを追加します。</p>
</div>
<hr style="visibility:hidden;clear:both;" />
<h3><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>フッターにカスタムメニューを作る。</h3>
<p>①footer.phpに以下の記述をします。</p>
[html]
<?php wp_nav_menu(array('theme_location'=>'footer-navi')); ?>
[/html]
<p>②function.phpに以下の記述をします。</p>
[html]
<?php register_nav_menu( 'footer-navi', 'フッターのナビゲーション' );
[/html]
<hr style="visibility:hidden;clear:both;" />
<div style="border:1px dotted #000000; padding:20px;">
<h3>TEMPLATE TAG</h3> 
<hr style="visibility:hidden;clear:both;" />
<p>・wp_nav_menu()…カスタムメニューを出力します。</p>
<div style="border:1px dotted #000000; padding:20px;">
<h5><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>パラメータの指定</h5>
<h5>・'theme_location'=>'header-navi'･･･テーマの場所。ヘッダーのナビゲーションを指定しています。</h5>
<h5>・'container'=>'ul'…ulタグでラップします。初期値→div。</h5>
<h5>・'menu_class'=>'nav navbar-nav'･･･nav navbarでクラスの指定を指定をします。</h5>
</div>
<hr style="visibility:hidden;clear:both;" />
<p>・get_search_form()･･･search.phpの検索フォームを出力します。インクルードタグ。</p>
</div>