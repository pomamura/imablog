</div>
<!-- /container -->
<!-- footer -->
<div id="footer">
<hr style="visibility:hidden;clear:both;" />
<ul>
<li>
<a href="https://www.facebook.com/shinnosuke.imamura.10"><span class="giga-octicon icon-facebook"></span>
</a>
</li>
<li>
<a href="https://twitter.com/1122ima"><span class="giga-octicon icon-twitter"></span>
</a>
</li>
<li>
<a href="https://plus.google.com/117234936237259021010/about"><span class="giga-octicon octicon-mark-github"></span>
</a>
</li>
</ul>
<div style="clear:both;"><?php wp_nav_menu(array('theme_location'=>'footer-navi')); ?></div>
<span id="copyright" class="wrapper">Copyright © <?php bloginfo('name'); ?> 2015 All Rights Reserved.</span>
</div>
<!--wp_footerを必ず記述。jsファイルなどページに必要なコードを出力。-->
<?php wp_footer(); ?>
<p id="page-top">
    <a href="#" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-chevron-up"></a>
</p>
</body>
</html>