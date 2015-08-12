<!--検索フォームはsearchform.phpで部品化しておく。-->
<!--       トップページのURL→home_url-->
<form method="get" id="searchform" action="<?php echo home_url(); ?>">
  <!--         検索のキーワードは「s」というパラメーターで送られる。-->
  <input type="text" placeholder="検索" name="s" id="s">
  <input type="submit" id="searchsubmit" value="">
</form>
