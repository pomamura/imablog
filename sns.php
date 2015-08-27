<h2>シェアする</h2>
<a class="facebook-iine" href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>"
onClick="window.open(encodeURI(decodeURI(this.href)),
      'sharewindow',
      'width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!'
      ); return false;">
Facebook</a>

<a class="twitter-tweet" href="http://twitter.com/intent/tweet?text=【<?php the_title(); ?> | <?php the_permalink(); ?>】"
      onClick="window.open(encodeURI(decodeURI(this.href)),
      'tweetwindow',
      'width=550, height=450, personalbar=0, toolbar=0, scrollbars=1, resizable=!'
      ); return false;">
    twitter</a>


<a class="pocketbtn" href="http://getpocket.com/edit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" onclick="window.open(this.href, 'PCwindow', 'width=550, height=350, menubar=no, toolbar=no, scrollbars=yes'); return false;">Pocket</a>

<a class="hatenabtn2" href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">はてぶ</a>

<a class="gplusbtn" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="window.open(this.href, 'Gwindow', 'width=650, height=450, menubar=no, toolbar=no, scrollbars=yes'); return false;">Google＋</a>

<a class="feedlybtn" href='http://cloud.feedly.com/#subscription%2Ffeed%2Fhttp://value-innovator.biz/feed' target='blank'>Feedly</a>