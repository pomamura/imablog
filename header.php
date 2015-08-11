<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
<!--  wp_titleでページのタイトルを表示させる-->
<!-- ページタイトルの'right'に'|'の区切りを入れる-->
  <title><?php wp_title('|',true,'right'); bloginfo('name');?></title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
  <link href="http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,700" rel="stylesheet">
<!--  javascriptファイルの読み込み-->
  <?php if(is_singular() ) wp_enqueue_script("comment-reply");?>
<!--  ※重要！head部分を出力する際に必要。プラグイン使用時など。-->
  <?php wp_head();?>
</head>

<body>
  <div id="container">

    <!-- header -->
    <div id="header" class="clearfix">

      <div class="alignleft">
        <h1 id="logo">
<!--        トップページのurlはhome_urlで取得-->
<!--          ブログの名前、紹介分はbloginfoで表示-->
						<a href="<?php echo home_url('/'); ?>"><span><?php bloginfo('name'); ?></span></a>
					</h1>
        <p id="description"><?php bloginfo('description'); ?></p>
      </div>

      <div class="alignright">
<!--      searchform.phpを読み込む-->
<?php get_search_form(); ?>
      </div>

      <!-- Navigation -->
<!--      ナビゲーションバーの出力（固定ページのタイトル）-->
<!--wp_nav_menu ナビゲーションを表示する-->
<!--divタグにmenuというクラスがつく-->
<?php wp_nav_menu(array('theme_location'=>'header-navi'));?>
      <!-- /Navigation -->
    </div>
    <!-- /header -->
