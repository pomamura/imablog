<!DOCTYPE html>
<!--公式テーマとして登録する場合、lang属性を出力するテンプレートタグが必須。個人なら不要。-->
<html <?php language_attributes();?>>

<head>
  <meta charset="UTF-8">
  <!--  効いてるかどうか後で確認。viewportを変更-->
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!--  wp_titleでページのタイトルを表示させる-->
  <!-- ページタイトルの'right'に'|'の区切りを入れる-->
  <title>
    <?php wp_title('|',true,'right'); bloginfo('name');?>
  </title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">

  <link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
  <!--  コメントの返信をクリックすると、コメントフォームに移動。jsファイル読み込み-->

  <?php if(is_singular() ) wp_enqueue_script("comment-reply");?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <!--  ※重要！function.phpから読み込んだjsを出力する際に必要。あと、プラグイン使用時など-->
    <?php wp_head();?>
</head>

<!--<body>タグに自動的にクラスを付けてくれるテンプレートタグ-->

<body>
  <!-- 全体をcontainerで囲う-->
  <div id="wrapper" class="container">

    <!-- header -->
    <div id="header" class="clearfix">
      <!--logo-->
      <div class="logo">
        <h1 id="logo">
<!--        トップページのurlはhome_urlで取得-->
<!--          ブログの名前、紹介分はbloginfoで表示-->
          <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
</h1>
        <p id="description">
          <?php bloginfo('description'); ?>
        </p>
      </div>
      <!--ナビゲーションメニュー-->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <!--               スクリーンリーダーの記述(アクセシビリティ)-->
              <span class="sr-only">Toggle navigation</span>
              <!--        トグルの３本線-->
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
                  <!--           サブメニュー（タイトル）出力-->
                  <?php wp_nav_menu( array( 'header-sub-navi' => 'header-navi' ) ); ?>
                </ul>
              </li>
              </ul>
              <!--        メインメニュー出力-->
              <!--wp_nav_menu ナビゲーションを表示する-->
              <!--divタグにmenuというクラスがつく-->
              <!--          事前にメニューを作成しておく必要がある。外観→メニュー-->
              
                <?php wp_nav_menu(array('theme_location'=>'header-navi',
                                 'container'=>'ul',
                                  'menu_class'=>'nav navbar-nav'
                                   ));?>
              
            
            <form class="navbar-form navbar-left" role="search">
              <div class="form-group">
                <?php get_search_form(); ?>
              </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
              <!--      snsボタン-->
              <div id="sns">
                <ul class="share-buttons">
                  <li>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fwordpress%2F&t=imablog" title="Share on Facebook" target="_blank"><img src="//localhost/wordpress/wp-content/themes/imablog/images/flat_web_icon_set/color/Facebook.png"></a>
                  </li>
                  <li>
                    <a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Flocalhost%2Fwordpress%2F&text=imablog:%20http%3A%2F%2Flocalhost%2Fwordpress%2F" target="_blank" title="Tweet"><img src="//localhost/wordpress/wp-content/themes/imablog/images/flat_web_icon_set/color/Twitter.png"></a>
                  </li>
                  <li>
                    <a href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Fwordpress%2F" target="_blank" title="Share on Google+"><img src="//localhost/wordpress/wp-content/themes/imablog/images/Google+.png"></a>
                  </li>
                </ul>
              </div>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </div>
    <!-- /header -->
