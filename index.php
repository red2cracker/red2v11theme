<?php
include_once('./_common.php');

//$g5['title'] = "링크";
//$gr_id ='test';
include_once('./_head.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
?>

<h2 class="sound_only">최신글</h2>

<div class="latest_wr_rwd">
<?php echo latest('theme/red2v2', 'news', 4, 24); ?>
<?php echo latest('theme/red2v2', 'notice', 4, 24); ?>
</div>

<div class="latest_wr_rwd">
<?php echo latest('theme/red2v2', 'free', 4, 24); ?>
<?php echo latest('theme/red2v2', 'cnc', 4, 24); ?>
</div>

<div class="latest_wr_rwd">
<?php echo latest('theme/red2v2', 'qna', 4, 24); ?>
<?php echo latest('theme/red2v2', 'mod', 4, 24); ?>
</div>

<div class="latest_wr_rwd">
<?php echo latest('theme/red2v2', 'tip', 4, 24); ?>
<?php echo latest('theme/red2v2', 'mod_tutorial', 4, 24); ?>
</div>

<div class="latest_wr_rwd">
<?php echo latest('theme/red2v2', 'game', 4, 24); ?>
<?php echo latest('theme/red2v2', 'movie', 4, 24); ?>
</div>



<!-- SNS 링크(목록대신 문단과 | 사용) -->
<!-- https://www.youtube.com/yt/about/brand-resources/#logos-icons-colors -->
<ul class="sns-link">
  <li class="sns_logo_twitter"><a href="https://twitter.com/red2cracker" title="트위터">트위터</a></li>
  <li class="sns_logo_facebook"><a href="https://www.facebook.com/red2network/">페이스북</a></li>
  <li class="sns_logo_blog"><a href="http://blog.naver.com/scabbard2" title="블로그">블로그</a></li>
  <li class="sns_logo_youtube"><a href="http://www.youtube.com/red2cracker" title="유튜브">유튜브</a></li>
  <li class="sns_logo_discord"><a href="https://discord.gg/F5ZcCwC" title="디스코드">디스코드</a></li>
  <li class="sns_logo_moddb"><a href="http://www.moddb.com/mods/korean-war-2" title="모드DB">모드DB</a></li>
</ul>

<?php
include_once('./_tail.php');
?>