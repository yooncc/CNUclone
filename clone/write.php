<!DOCTYPE html>
<html lang="ko" class="no-js">

<head>
  <title>글쓰기</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  <link rel="stylesheet" type="text/css" href="./css/my.css" />
  <link rel="stylesheet" type="text/css" href="./css/cms.css" />
  <!--  <link rel="stylesheet" type="text/css" href="./css/owl.css" />
  <link rel="stylesheet" type="text/css" href="./css/scroll.css" /> -->
  <link rel="stylesheet" type="text/css" href="./css/board.css" />
  <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/ckeditor.js"></script>

  <style>
    .ck-editor__editable {
      height: 400px;
    }

    table.table2 {
      border-collapse: separate;
      border-spacing: 1px;
      text-align: left;
      line-height: 1.5;
      border-top: 1px solid #ccc;
      margin: 20px 10px;
    }

    table.table2 tr {
      
      
      font-weight: bold;
      vertical-align: top;
      border-bottom: 1px solid #ccc;
    }

    table.table2 td {
      
      
      vertical-align: top;
      border-bottom: 1px solid #ccc;
    }
  </style>
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

                  <li><a href="#">공지사항</a></li>

                  <li><a href="#">QnA</a></li>

                  <li><a href="#">자유게시판</a></li>

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
              <a href="board2.php" class="jwxe_5745 ">공지사항</a>



              </li>
		
			<li class="">
				<a href="/math/community/job.do" class="jwxe_5735 " >QnA</a>
					
				
				
			</li>
		
			<li class="">
				<a href="/math/community/seminars.do" class="jwxe_22276 " >자유게시판</a>
					
				
				
			</li>

          </ul>


        </div>
      </div>
      <div class="content-wrap">
        <div class="title">
          <div class="jwxe_mnu_template">

            <h3>게시글 작성하기</h3>


          </div>
          <!--<div class="navi-box">
	<div class="jwxe_navigator jw-relative" style=""><ul><li>Home</li><li>커뮤니티</li><li><span style="font-weight:bold">수학과공지사항</span></li></ul>
		</div>
</div>-->
        </div>
        <div class="tab"></div>
        <div class="content" id="jwxe_main_content">




          <?php
          session_start();
          if (!isset($_SESSION['userid'])) { ?>
          <script>
            alert("권한이 없습니다.");
		   window.history.back();	
          </script>
          <?php } ?>

          <form method="post" action="write_action.php" enctype="multipart/form-data">
            <!-- method: POST-->
            <table  align=center width=auto border=0 cellpadding=2>
              <tr>
                <td style="height: 40; float:center; background-color:#014fa2;">
                  <p style="font-size:25px; text-align:center; color:white; margin-top:15px; margin-bottom:15px;"><b>게시글
                      작성하기</b></p>
                </td>
              </tr>
              <tr>
                <td bgcolor=white>
                  <table class="table2">
                    <tr>
                      <td>작성자</td>
                      <td><input type="hidden" name="user_id" size=30px; value="<?= $_SESSION['userid'] ?>">
                        <?= $_SESSION['username'] ?>
                      </td>
                    </tr>
                    <tr>
                      <td>제목</td>
                      <td><input type="text" name="title" size=70px;></td>
                    </tr>
                    <tr>
                      <td>작성위치</td>
                      <td>
                        <select name="category">
                          <option value="board1">공지사항</option>
                          <option value="board2">QnA</option>
                          <option value="board3">자유게시판</option>
                          
                        </select>
                      </td>
                    </tr>

                    <tr>
                      <td>내용</td>
                      <td><textarea name="contents" id="contents" cols=75 rows=15></textarea></td>
                    </tr>
                    <input type="file" name="upload" id="uplaod">
          </form>
          </form>
          <script src="https://cdn.ckeditor.com/ckeditor5/35.2.0/classic/translations/ko.js"></script>
          <script type="text/javascript">
            ClassicEditor.create(document.querySelector('#contents'), {
              language: "ko"
            });

          </script>

          <!--<tr>
<td>비밀번호</td>
<td><input type="password" name="pwd" size=15px; maxlength=15></td>
</tr>-->
          </table>

          <center>
            <input style="height:26px; width:47px; font-size:16px;" type="submit" value="작성">
          </center>
          </td>
          </tr>
          </table>
          </form>












          <div class="ko board list co-board type01">








           
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
            <li><a href="intro.php" title="충남대학교 포털 새창열림" target="_blank">충남대학교 포털</a></li>
            <li><a href="intro.php" title="충남대학교 개인정보 처리방침 새창열림" target="_blank">개인정보 처리방침</a></li>
            <li><a href="intro.php" title="충남대학교 이메일무단수집거부 새창열림" target="_blank">이메일무단수집거부</a></li>
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