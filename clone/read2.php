<!DOCTYPE html>
<html lang="ko" class="no-js">

<head>
	<title>QnA</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport"
		content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="./css/my.css" />
	<link rel="stylesheet" type="text/css" href="./css/cms.css" />
	<!--  <link rel="stylesheet" type="text/css" href="./css/owl.css" />
  <link rel="stylesheet" type="text/css" href="./css/scroll.css" /> -->
	<link rel="stylesheet" type="text/css" href="./css/board.css" />

</head>

<body id="item_body" class="main pc">


	<div class="wrap">
		<header>
			<!-- top-header 시작 -->
			<div class="top-header-wrap">
				<div class="top-header-box">
					<ul>
						<li>
							<a href="" target="_blank" title="새창열기"><span>충남대학교</span></a>
						</li>
						<li>
							<a href="#" title="새창열기" target="_blank" class="cic-btn">정보화본부</a>
						</li>
						<li>
							<a href="#" title="새창열기" target="_blank" class="with-btn">CNU With U</a>
						</li>
						<li>
							<a href="#" title="새창열기" target="_blank" class="lib-btn">도서관</a>
						</li>
						<li>
							<a href="#" title="새창열기" target="_blank" class="fund-btn">발전기금</a>
						</li>

						<li class="login">
							<?php session_start();

              if (isset($_SESSION['userid'])) { ?><a>
								<b>
									<?php echo $_SESSION['userid']; ?>
								</b>님 반갑습니다.<button onclick="location.href='./logout-action.php'"
									style="float:right; font-size:15.5px;">로그아웃</button><br /></a>
							<?php
              } else {
              ?>
							<a><button onclick="location.href='./login.php'" style="float:right; font-size:15.5px;">로그인</button></a>
							<br />
							<?php
              }
              ?>
							<!-- <a href="login.php">로그인</a> -->
						</li>

						<li>
							<a href="#" title="사이트맵 바로가기" class="sitemap-btn">사이트맵</a>
						</li>
						<li>
							<div class="translation" id="google_translate_element"></div>

						</li>
					</ul>
				</div>
			</div>
			<!-- bomttom-header 시작 -->
			<div class="bottom-header-wrap">
				<div class="bottom-header-box">
					<a class="btn-menu" href="#a"><span class="hide">모바일 메뉴 열기</span></a>
					<h1>
						<a href="index.php" title="충남대학교 디자인창의학과">
							<p>
								<img src="./image/logo-cnu-w.png" alt="충남대학교">
							</p>
							<div>
								<img src="./image/logo-cnu-text-w.png" alt="충남대학교">
								<span>수 학 과</span>
							</div>
						</a>
					</h1>
					<div class="gnb">
						<ul class="gnb-ul">

							<li>
								<a href="#">학과안내</a>

								<ul class="sub-mn">

									<li><a href="intro.php">소개</a></li>

								</ul>

							</li>

							<li>
								<a href="#">학과 사람들</a>

								<ul class="sub-mn">

									<li><a href="#">교수소개</a></li>

									<li><a href="#">시간강사 소개</a></li>

									<li><a href="#">대학원생 소개</a></li>

									<li><a href="#">학생회 소개</a></li>

									<li><a href="#">동아리 소개</a></li>

								</ul>

							</li>

							<li>
								<a href="#">학사정보</a>

								<ul class="sub-mn">

									<li><a href="#">학사일정</a></li>

									<li><a href="#">스터디룸</a></li>

									<li><a href="#">교육과정</a></li>

									<li><a href="#">발전기금 장학금안내</a></li>

								</ul>

							</li>

							<li>
								<a href="#">커뮤니티</a>

								<ul class="sub-mn">

									<li><a href="board1.php">공지사항</a></li>

									<li><a href="board2.php">QnA</a></li>

									<li><a href="board3.php">자유게시판</a></li>

								</ul>

							</li>

							<li>
								<a href="#">자료실 / 온라인접수</a>

								<ul class="sub-mn">

									<li><a href="#">취업신청</a></li>

									<li><a href="#">자료실</a></li>

									<li><a href="#">강의별 게시판</a></li>

									<li><a href="#">정원외 수강신청</a></li>

									<li><a href="#">스터디룸신청 및 접수</a></li>

									<li><a href="#">장학금신청 및 접수</a></li>

									<li><a href="#">시간강사신청 및 접수</a></li>

								</ul>

							</li>

						</ul>
					</div>
				</div>
			</div>


		</header>
		<div class="sub-visual-wrap"></div>
		<div class="path-wrap"></div>
		<div class="sub-container">
			<div class="lnb-wrap">
				<div class="lnb">
					<div class="lnb-title-box">
						<div class="jwxe_mnu_template">

							<h2>커뮤니티</h2>
						</div>
					</div>




					<ul class="lnb-menu">

						<li class="">
							<a href="board1.php" class="jwxe_5745 ">공지사항</a>



						</li>

						<li class="active">
							<a href="board2.php" class="jwxe_5735 active">QnA</a>



						</li>

						<li class="">
							<a href="board3.php" class="jwxe_22276 ">자유게시판</a>



						</li>

					</ul>



				</div>
			</div>
			<div class="content-wrap">
				<div class="content" id="jwxe_main_content">



					<?php
        //error_reporting(E_ALL);
//ini_set("display_errors",1);
        
        $connect = mysqli_connect('localhost', 'root', '40314031', 'board');
        $number = $_GET['board_no']; //GET사용
        session_start();
        $query = "SELECT title, contents, user_id, counts, name from board2 where board_no = $number";
        $result = $connect->query($query);
        $rows = mysqli_fetch_assoc($result);

        $counts = "update board2 set counts = counts + 1 where board_no = $number";
        $connect->query($counts);
							?>




        


					<table class="read_table" align=center>
						<tr>
							<td colspan="4" class="read_title">
								<?php echo $rows['title'] ?>
							</td>
						</tr>
						<tr>
							<td class="read_id">작성자</td>
							<td class="read_id2">
								<?php echo $rows['name'] ?>
							</td>
							<td class="read_hit">조회수</td>
							<td class="read_hit2">
								<?php echo $rows['counts'] + 1 ?>
							</td>
						</tr>
						<?php
          $query3 = "select * from board2 where board_no='$number'";
          $result3 = $connect->query($query3);
          $files = mysqli_fetch_assoc($result3);
          ?>

						<tr>
							<td style="height: 50px;"><a href="./upload/<?php echo $files['file']; ?>" download>
									<?php echo $files['file']; ?>
								</a></td>
						<tr>
							<td colspan="4" class="read_content" valign="top">
								<?php echo nl2br($rows['contents']) ?>
							</td>
						</tr>
					</table>

					<!-- 댓글 보기 -->
					<div class="comment_view">
						<h4 style="padding:10px 0 15px 0; border-bottom: solid 1px gray;">댓글</h4>
						<?php
          $query2 = "SELECT * FROM comment where c_no=$number";
          $result2 = $connect->query($query2);
          while ($reply = mysqli_fetch_assoc($result2)) {
          ?>
						<div class="dat_view">
							<div><b>
									<?= $reply['name'] ?>
										<?= $reply['date'] ?>
											<?= $reply['idx'] ?>
												<?= $reply['c_no'] ?>
								</b>
								<form action="comment_del_action.php" method="post">
									<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden"
										name="b_no" value="<?php echo $reply['c_no']; ?>">
									<button style="border:1px solid border; radius:5px;" a onclick="ask1();">삭제</button>
								</form>
							</div>
							<div class="dap_to comt_deit">
								<?php echo nl2br("$reply[content]"); ?>
							</div>
							<?php }
          $c_no = $reply['c_no'];
          $idx = $reply['idx']; ?>
						</div>
					</div>
					<!-- 	댓글 삭제 모달창 -->




					<!-- 댓글 작성 -->
					<div class="dat_ins">
						<form method="post" action="comment_action.php">
							<input type="hidden" name="board_no" class="board_no" value="<?= $number ?>">
							<input type="hidden" name="c_no" class="c_no" value=<?= $c_no ?>>
							<input type="hidden" name="idx" class="idx" value=<?= $idx ?>>
							<div>작성자 <b><?php echo $_SESSION['username']?></b></div>
				<!--	<input type="text" name="dat_user" id="dat_user" class="dat_user" placeholder="작성자" value=<?= $USER_ID ?>>
							<input type="password" name="dat_pw" id="dat_pw" class="dat_pw" size="15" placeholder="비밀번호"> -->
							<div style="margin-top:10px;">
								<textarea name="content" class="rep_con" id="rep_con"></textarea>
								<input id="rep_btn" class="rep_btn" type="submit" value="댓글입력">
							</div>
						</form>
					</div>




					<!--MODIFY & DELETE 추후 세션처리 보완 -->
					<div class="read_btn">
						<button class="read_btn1" onclick="location.href='./board2.php'">목록</button>&nbsp;&nbsp;
						<button class="read_btn1"
							onclick="location.href='./modify2.php?board_no=<?= $number ?>'">수정</button>&nbsp;&nbsp;
						<button class="read_btn1" a onclick="ask();">삭제</button>
						<script>
							function ask() {
								if (confirm("게시글을 삭제하시겠습니까?")) {
									window.location = "./delete_action2.php?board_no=<?= $number ?>"
								}
							}
						</script>
					</div>
				</div>
			</div>
		</div>
	</div>
	

	<footer>
		<div class="top-footer-wrap">
			<div class="top-footer-box">
				<div class="related-wrap">
					<div class="related-title-wrap">
						<p>세계로 도약하는 대표대학 <span>충남대 기관사이트</span></p>
						<a href="#a" class="btn-related" title="기관사이트 펼치기"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer-wrap">
			<div class="bottom-footer-box">
				<div class="footer-ul-wrap">
					<a href="#a" class="">충남대학교 포털</a>
					<ul class="footer-ul">
						<li><a href="http://portal.cnu.ac.kr/" title="충남대학교 포털 새창열림" target="_blank">충남대학교 포털</a></li>
						<li><a href="http://plus.cnu.ac.kr/html/kr/guide/guide_080501.html" title="충남대학교 개인정보 처리방침 새창열림"
								target="_blank">개인정보 처리방침</a></li>
						<li><a href="http://plus.cnu.ac.kr/html/kr/guide/guide_0806.html" title="충남대학교 이메일무단수집거부 새창열림"
								target="_blank">이메일무단수집거부</a></li>
					</ul>
				</div>
				<div class="footer-info-box">
					<div class="footer-logo-wrap">
						<div>
							<p>
								<img src="./image/foot-logo-g.png" alt="충남대학교">
							</p>
							<div>
								<img src="./image/logo-cnu-text-g.png" alt="충남대학교">
								<span>수학과</span>
							</div>
						</div>
					</div>
					<ul class="footer-info">
						<li>
							<ul class="footer-contact">
								<li>(34134) 대전광역시 유성구 대학로 99 자연과학대학 1 호관(건물번호: W5) 수학과 학과사무실 자1215</li>
								<li>TEL : <a href="tel:042-821-5421" title="전화걸기">042)821 - 5421</a> / FAX : 042)823 - 1856</li>
							</ul>
						</li>
						<li>Copyright 2019. CHUNGNAM UNIVERSITY All Rights Reserved.</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	</div>
	<noscript>
		<p>이 사이트는 자바스크립트를 지원하지 않으면 정상적으로 보이지 않을수 있습니다.</p>
	</noscript>
</body>

</html>