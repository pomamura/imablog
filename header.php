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
<!--  octicons(GITHUB)のWEBフォントCSS-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/octicons/octicons.css" media="screen">
    <!--   [style.css]sheet_uriのURIを取得-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/icomoon/style.css">
    <!--    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->
    <!--  ※重要！function.phpから読み込んだjsを出力する際に必要。あと、プラグイン使用時など-->
    <?php wp_head();?>
</head>

<!--<body>タグに自動的にクラスを付けてくれるテンプレートタグ-->
<body>
<?php include_once("analyticstracking.php") ?>
  <!-- 全体をcontainerで囲う-->
  <div id="wrapper" class="container">

    <!-- header -->
    <div id="header" class="clearfix">
      <!--logo-->
      <div class="logo">
<a href="<?php echo home_url('/'); ?>">
<p style="display:inline; position:absolute; padding:10px 10px 90px 10px;">　　　　　　　　　　　　　　　　　</p>
</a>
<?php get_template_part('svglogo'); //svglogo.phpの読み込み ?>
      </div>
      <!--ナビゲーションメニュー-->
      <nav class="navbar navbar-default">
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
            <a class="navbar-brand" href="http://imablog.xyz/"><span class="glyphicon glyphicon-home" aria-hidden="true" style="color:#777;"></span></a>
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
                <ul class="share-buttons">
                  <li>
                    <div class="sns_circle facebook"><span class="icon-facebook"></span>
                      <a href="https://www.facebook.com/shinnosuke.imamura.10"></a>
                    </div>
                  </li>
                  <li>
                    <div class="sns_circle twitter"><span class="icon-twitter"></span>
                      <a href="https://twitter.com/1122ima"></a>
                    </div>
                  </li>
                  <li>
                    <div class="sns_circle google"><span class="icon-google-plus"></span>
                      <a href="https://plus.google.com/117234936237259021010/about"></a>
                    </div>
                  </li>
                </ul>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </div>
    <!-- /header -->