<!DOCTYPE html> 
<html lang="ko" class="no-js">

<head>
  <title>공지사항</title>
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
              <a href="index.php" target="_blank" title="새창열기"><span>충남대학교</span></a>
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

            <li class="">
              <a href="board2.php" class="jwxe_5735 ">QnA</a>



            </li>

            <li class="active">
              <a href="board3.php" class="jwxe_22276 active">자유게시판</a>



            </li>

          </ul>


        </div>
      </div>
      <div class="content-wrap">
        <div class="title">
          <div class="jwxe_mnu_template">

            <h3>공지사항</h3>


          </div>

        </div>
        <div class="tab"></div>
        <div class="content" id="jwxe_main_content">











          <div class="ko board list co-board type01">








            <div class="college_notice">

              <?php
              //error_reporting(E_ALL);
              //ini_set("display_errors",1);
              
              if (isset($_GET['page'])) {
                $page = $_GET['page'];
              } else {
                $page = 1;
              }

              $connect = mysqli_connect('localhost', 'root', '40314031', 'board') or die("connect failed");
              $query = "SELECT * FROM board3 ORDER BY board_no DESC"; //역순 출력
              $sql = mysqli_query($connect, $query);
              //$result = $connect->query($query);
              $total = mysqli_num_rows($sql); //result set 의 총 레코드(행) 수 반환
              


              $list = 10;
              $block_cnt = 5;
              $block_num = ceil($page / $block_cnt);
              $block_start = (($block_num - 1) * $block_cnt) + 1; // 블럭 시작 번호 1, 11, 21
              $block_end = $block_start + $block_cnt - 1; // 블럭 마지막 번호 10, 20, 30
              
              $total_page = ceil($total / $list);
              if ($block_end > $total_page) {
                $block_end = $total_page;
              }
              $total_block = ceil($total_page / $block_cnt);
              $page_start = ($page - 1) * $list;
              $total_rst = $total - ($page - 1) * $list;

              //게시글 정보 가져오기
              $result = mysqli_query($connect, "SELECT * FROM board3 ORDER BY board_no DESC LIMIT $page_start, $list");
              ?>


              <!--검색창 시작-->
              <div class="bn-search01 type01">
                <form method="get" action="search_result3.php">
                  <fieldset class="b-search-wrap">
                    <legend class="hide">게시글 검색</legend>
                    <input type="hidden" name="mode" value="list" />
                    <div class="b-sel-box b-cate-basic">
                    <select name="category" class="categorysz">
<option value="title">제목</option>
<option value="name">작성자</option>
<option value="contents">내용</option>
</select>
                    </div>
                    <label for="search_val" class="b-sel-label">
                      <span>검색어</span>
                    </label>
                    <input type="text" id="search_val" name="search" value="" placeholder="검색어를 입력해 주세요" />
                    <button type="submit" class="b-sel-btn">검색</button>
                  </fieldset>
                </form>
              </div>
              <!-- 검색창 끝 -->




              <div class="bn-list-common01 type01 bn-common">
                <div class="b-top-info-wrap">
                  <div class="total-wrap">
                    
                  </div>
                </div>







                <table summary="공지사항" class="board-table">
                  <caption class="hide">공지사항</caption>
                  <thead align="center">
                    <tr>
                      <td width="50" align="center">번호</td>
                      <td width="500" align="center">제목</td>
                      <td width="100" align="center">작성자</td>
                      <td width="250" align="center">날짜</td>
                      <td width="50" align="center">조회수</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    while ($rows = mysqli_fetch_assoc($result)) { //result set에서 레코드(행)를 1개씩 리턴
                      if ($total % 2 == 0) {
                    ?>
                    <tr class="even">
                      <!--배경색 진하게-->
                      <?php } else {
                      ?>
                    <tr>
                      <!--배경색 그냥 -->
                      <?php } ?>

                      <td width="50" align="center">
                        <?php echo $total_rst; ?>
                      </td>
                      <td class="etc" align="left"><a href="read3.php?board_no=<?php echo $rows['board_no'] ?>">
                          <?php echo $rows['title']; ?>
                      </td>
                      <td width="100" align="left">
                        <?php echo $rows['name']; ?>
                      </td>
                      <td width="250" align="center">
                        <?php if ($rows['updated_time']) {
                        echo $rows['updated_time'];
                        echo "(수정됨)";
                      } else {
                        echo $rows['created_time'];
                      } ?>
                      </td>
                      <td width="50" align="center">
                        <?php echo $rows['counts']; ?>
                      </td>
                    </tr>
                    <?php
                      $total_rst--;
                    }
                    ?>
                  </tbody>
                </table>
                <div id="page_num" style="text-align: center;">
                  <?php
                  if ($page <= 1) {
                    echo "<a href='board3.php?page=1'>◀  이전</a>";
                  } else {
                    $pre = $page - 1;
                    echo "<a href='board3.php?page=$pre'>◀  이전</a>";
                  }
                  for ($i = $block_start; $i <= $block_end; $i++) {
                    if ($page == $i) {
                      echo "<b> $i </b>";
                    } else {
                      echo "<a href='board3.php?page=$i'> $i</a>";
                    }
                  }
                  if ($page >= $total_page) {
                    //빈값
                  } else {
                    $next = $page + 1;
                    echo "<a href='board.php3?page=$next'>다음  ▶</a>";
                  }
                  if ($page >= $total_page) {
                    //빈 값
                  } else {
                    echo "<a href='board.php3?page=$total_page'> 마지막</a>";
                  }
                  ?>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class=text style="float:right">
          <button style="cursor:hand" onClick="location.href='./write.php'">글쓰기</button>
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
            <li><a href="intro.php" title="충남대학교 개인정보 처리방침 새창열림"
                target="_blank">개인정보 처리방침</a></li>
            <li><a href="intro.php" title="충남대학교 이메일무단수집거부 새창열림"
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