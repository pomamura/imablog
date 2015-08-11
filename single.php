<?php get_header();?>

  <!-- main -->
  <div id="main">

    <!-- post -->
    <?php 
if(have_posts() ) :
      while(have_posts() ) : the_post(); ?>
      <div id="post-<?php the_ID();?>" <?php post_class(); ?>>
        <!--      the_permalink記事のパーマリンクを出力-->
        <!--     the_title記事のタイトルを表示-->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="post-meta">
          <!--         the_date記事の日付を表示-->
          <span class="post-date"><?php echo get_the_date(); ?></span>
          <!--          the_category記事のカテゴリーを表示-->
          <span class="category">Category-<?php the_category(',') ?></span>
          <span class="comment-num">
<!--           comment_popup_linkコメント数を表示-->
            <?php comments_popup_link('Comment : 0','Comment : 1','Comments : %');?>
          </span>
        </p>
        <!--        the_contentコンテンツ（画像を含む）、続きを読むのリンクを表示-->
        <?php the_content(); ?>
          <!--      タグの出力。なにもない場合は表示されない。-->
          <p class="footer-post-meta">
            <?php the_tags('Tag:',',');?>
              <!--  if(is_multi_author()):複数投稿者がいる場合、「作成者」を表示。-->
              <?php if(is_multi_author()):?>
                <!--
  投稿者の出力。
  get_author_posts_url投稿者ページのURLを取得。
  get_the_author_metaいろいろな投稿者情報を取得・
-->
                <span class="post-author">作成者：<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author(); ?></a></span>
                <?php endif;?>
          </p>
      </div>
      <!--      ↓8.4.wordpressループの中に記述できない？？？？？？？？？？-->
      <?php
//この部分で記事を表示する処理をしています。
endwhile;//繰り返し処理終了
else: ?>
        <!--       ↑？？？？？？？？？？？？？？？？-->
        <div class="post">
          <h2>記事はありません</h2>
          <p>お探しの記事は見つかりませんでした</p>
        </div>
        <?php endif;?>
          <!-- post navigation -->
          <div class="navigation">
            <!--          もし前の記事があったら表示する-->
            <?php if(get_previous_post()): ?>
              <div class="alignleft">
                <?php previous_post_link('%link','<< %title');?>
              </div>
<!--              もし次の記事があったら表示する-->
              <?php endif;
if(get_next_post()): ?>
                <div class="alignright">
                  <?php next_post_link('%link','%title >>');?>
                    <?php endif;?>
                </div>
                <!-- /post navigation -->
                <?php comments_template();?>
                <!-- comment area -->
                <div id="comment-area">

                  <h3 id="comments">Comment</h3>

                  <ol class="commets-list">
                    <!-- comment -->
                    <li class="comment parent">
                      <div class="comment-body">
                        <div class="comment-author">
                          <img alt="" src="images/mysteryman.gif" class="avatar" height="55" width="55">
                          <cite>佐藤はなこ</cite><span>より:</span>
                        </div>
                        <div class="comment-meta commentmetadata">
                          <a href="#">2012年11月13日 11:55 PM</a>
                        </div>
                        <p>
                          こんにちは！ 私もフルーツタルトは大好きです！
                        </p>
                        <div class="reply">
                          <a class="comment-reply-link" href="#">返信</a>
                        </div>
                      </div>

                      <!-- child comment -->
                      <ul class="children">
                        <li class="comment bypostauthor">
                          <div class="comment-body">
                            <div class="comment-author">
                              <img alt="" src="images/avatar.gif" class="avatar" height="55" width="55">
                              <cite>高橋 のり</cite> <span>より:</span>
                            </div>
                            <div class="comment-meta commentmetadata">
                              <a href="#">2012年11月25日 5:22 PM</a>
                            </div>
                            <p>
                              佐藤はなこさん、コメントありがとうございます！
                            </p>
                            <div class="reply">
                              <a class="comment-reply-link" href="#">返信</a>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <!-- /child comment -->
                    </li>
                    <!-- /comment -->
                  </ol>

                  <!-- comment form -->
                  <div id="respond">
                    <h3>Leave a Reply</h3>

                    <form action="#" method="post" id="commentform">

                      <p class="comment-notes">
                        メールアドレスが公開されることはありません。
                        <span class="required">*</span> が付いている欄は必須項目です
                      </p>

                      <p class="comment-form-author">
                        <label for="author">名前 <span class="required">*</span></label>
                        <input id="author" name="author" type="text" value="" size="30" />
                      </p>

                      <p class="comment-form-email">
                        <label for="email">メールアドレス <span class="required">*</span></label>
                        <input id="email" name="email" type="text" value="" size="30" />
                      </p>

                      <p class="comment-form-url">
                        <label for="url">ウェブサイト</label>
                        <input id="url" name="url" type="text" value="" size="30" />
                      </p>

                      <p class="comment-form-comment">
                        <label for="comment">コメント</label>
                        <textarea id="comment" name="comment" cols="45" rows="8"></textarea>
                      </p>

                      <p class="form-submit">
                        <input name="submit" type="submit" id="submit" value="Submit Comment">
                      </p>

                    </form>
                  </div>
                  <!-- /comment form -->

                </div>
                <!-- /comment area -->
          </div>
          <!-- /main -->

          <!-- sidebar -->
          <div id="sidebar">

            <div class="widget">
              <h2>Category</h2>
              <ul>
                <li><a href="#">ケーキ</a></li>
                <li><a href="#">コーヒー</a></li>
              </ul>
            </div>

            <div class="widget">
              <h2>Recent Posts</h2>
              <ul>
                <li><a href="#">フルーツパンナコッタ</a></li>
                <li><a href="#">いちごショート</a></li>
                <li><a href="#">カプチーノ</a></li>
                <li><a href="#">生チョコレートケーキ</a></li>
                <li><a href="#">フルーツタルト</a></li>
              </ul>
            </div>

            <div class="widget">
              <h2>Archive</h2>
              <ul>
                <li><a href="#">2012年12月</a></li>
                <li><a href="#">2012年11月</a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar -->

  </div>
  <!-- /container -->

  <!-- footer -->
  <div id="footer">
    <p id="copyright" class="wrapper">&copy; Simple x Simple All Rights Reserved.</p>
  </div>
  <!-- /footer -->
  </body>

  </html>
