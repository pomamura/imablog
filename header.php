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
    <!--  ※重要！function.phpから読み込んだjsを出力する際に必要。あと、プラグイン使用時など-->
    <?php wp_head();?>
      <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
</head>

<!--<body>タグに自動的にクラスを付けてくれるテンプレートタグ-->

<body <?php body_class();?>>
  <!-- 全体をcontainerで囲う-->
  <div id="wrapper" class="hfeed container">

    <!-- header -->
    <div id="header" class="clearfix">
      <!--logo-->
      <div class="alignleft">
        <h1 id="logo">
<!--        トップページのurlはhome_urlで取得-->
<!--          ブログの名前、紹介分はbloginfoで表示-->
						<a href="<?php echo home_url('/'); ?>"><span><?php bloginfo('name'); ?></span></a>
					</h1>
        <p id="description">
          <?php bloginfo('description'); ?>
        </p>
      </div>
      <!--      search-->
      <div class="alignright">
        <?php get_search_form(); ?>
      </div>
      <!--      snsボタン-->
      <img src="images/flat_web_icon_set/color/Facebook.png">
       <ul class="share-buttons">
        <li>
          <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Fwordpress%2F&t=imablog" title="Share on Facebook" target="_blank"><img src="images/flat_web_icon_set/color/Facebook.png"></a>
        </li>
        <li>
          <a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Flocalhost%2Fwordpress%2F&text=imablog:%20http%3A%2F%2Flocalhost%2Fwordpress%2F" target="_blank" title="Tweet"><img src="images/flat_web_icon_set/color/Twitter.png"></a>
        </li>
        <li>
          <a href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2Fwordpress%2F" target="_blank" title="Share on Google+"><img src="images/noimage.png"></a>
        </li>
      </ul>
      <!-- Navigation -->
      <nav class="navbar navbar-inverse" role="navigation">
        <!--    トグルとナビゲーションのサイズを適正化-->

        <div class="navbar-header">
          <!--     トグルボタンの表示-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <!--               スクリーンリーダーの記述(アクセシビリティ)-->
            <span class="sr-only">toggle navigation</span>
            <!--                ボタンの横棒の線（３本）-->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!--        ナビゲーションメニューがトグルボタンに収納-->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <!--      ナビゲーションバーの出力（固定ページのタイトル）-->
          <!--wp_nav_menu ナビゲーションを表示する-->
          <!--divタグにmenuというクラスがつく-->
          <!--          事前にメニューを作成しておく必要がある。外観→メニュー-->

          <?php wp_nav_menu(array('theme_location'=>'header-navi',
                                 'container'=>'ul',
                                  'menu_class'=>'nav navbar-nav'
                                  
                                 ));?>


            <!-- /Navigation -->

      </nav>

      </div>

      <!-- /header -->
