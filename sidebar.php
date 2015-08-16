<!--ウィジェットを表示するコードを記述-->
        <!-- sidebar -->
<!--        横幅指定用のクラスを追加（ページ右側）-->
    <div id="sidebar" class="col-sm-4" role="complementary">
<?php if(is_active_sidebar('sidebar-1')):
//sidebar-1に設定してあるウィジェットが表示
dynamic_sidebar('sidebar-1');
//ウィジェットが表示されてなければ↓の処理
else: ?>
      <div class="widget">
        <h2>No Widget</h2>
        <p>ウィジェットは設定されていません。</p>
      </div>
      <?php endif;?>
</div>
    <!-- /sidebar -->
