<!--検索フォームはsearchform.phpで部品化しておく。-->
<!--       トップページのURL→home_url-->
 <form method="get" class="form-search" action="<?php echo home_url('/'); ?>">
  <div class="row">
    <div>
      <div class="input-group">
       <!--         検索のキーワードは「s」というパラメーターで送られる。-->
        <input type="text" class="form-control search-query" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="Go"><span class="glyphicon glyphicon-search"></span></button>
        </span>
      </div>
    </div>
  </div>
</form>