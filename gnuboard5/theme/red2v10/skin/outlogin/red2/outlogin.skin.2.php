<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$outlogin_skin_url.'/style.css">', 0);
?>

<!-- 로그인 후 아웃로그인 시작 { -->
<section id="ol_after" class="ol">
    <header id="ol_after_hd">
        <h2>나의 회원정보</h2>
        <strong><?php echo $nick ?>님</strong>
        <?php if ($is_admin == 'super' || $is_auth) {  ?><a href="<?php echo G5_ADMIN_URL ?>" class="btn_admin">관리자</a><?php }  ?>
    </header>
    <ul id="ol_after_private" class="list-unstyled">
        <li>
            <a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" id="ol_after_memo" class="win_memo">
                <i class="fa fa-envelope-o" aria-hidden="true"></i> <span class="sound_only">안 읽은 </span>쪽지
                <strong><?php echo $memo_not_read ?></strong>
            </a>
			
			&nbsp; <i class="fa fa-user-plus" aria-hidden="true"></i> 레벨 <strong><?php echo $member['mb_level'] ?></strong>
        </li>
		<!-- <li></li> -->
    </ul>
    <footer id="ol_after_ft">
        <a href="<?php echo G5_BBS_URL ?>/logout.php?url=<?=$urlencode?>" id="ol_after_logout"><i class="fa fa-sign-out" aria-hidden="true"></i> 로그아웃</a>
        <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=register_form.php" id="ol_after_info"><i class="fa fa-cog" aria-hidden="true"></i> 정보수정</a>
		
		<div class="ol_after_cancel"><a href="javascript:member_leave();"><i class="fa fa-ban" aria-hidden="true"></i> 회원탈퇴</a></div>
    </footer>
</section>

<script>
// 탈퇴의 경우 아래 코드를 연동하시면 됩니다.
function member_leave()
{
    if (confirm("정말 회원에서 탈퇴 하시겠습니까?"))
        location.href = "<?php echo G5_BBS_URL ?>/member_confirm.php?url=member_leave.php";
}
</script>
<!-- } 로그인 후 아웃로그인 끝 -->
