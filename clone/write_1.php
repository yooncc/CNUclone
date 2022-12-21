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
      width: 50px;
      padding: 10px;
      font-weight: bold;
      vertical-align: top;
      border-bottom: 1px solid #ccc;
    }

    table.table2 td {
      width: 100px;
      padding: 10px;
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

            <li class="active">
              <a href="board2.php" class="jwxe_5745 active">공지사항</a>



              <!--</li>
		
			<li class="">
				<a href="/math/community/job.do" class="jwxe_5735 " >취업게시판</a>
					
				
				
			</li>
		
			<li class="">
				<a href="/math/community/seminars.do" class="jwxe_22276 " >세미나 및 강연회</a>
					
				
				
			</li>-->

          </ul>


        </div>
      </div>
      <div class="content-wrap">
        <div class="title">
          <div class="jwxe_mnu_template">

            <h3></h3>


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
		alert(            한이 없습니다.");
		   window.history.back();	
          </script>
          <?php } ?>

          <form method="post" action="write_action.php" enctype="multipart/form-data">
            <!-- method: POST-->
            <table style="padding-top:50px" align=center width=auto border=0 cellpadding=2>
              <tr>
                <td style="height: 40; float:center; background-color:#3C3C3C;">
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
                        <?= $_SESSION['userid'] ?>
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








            <!--<div class="college_notice">
              <div class="bn-search01 type01">
                <form method="get" action="?">
                  <fieldset class="b-search-wrap">
                    <legend class="hide">게시글 검색</legend>
                    <input type="hidden" name="mode" value="list" />
                    <div class="b-sel-box b-cate-basic">
                      <label for="search_key" class="hide">검색분류선택</label>
                      <a href="#search" class="b-sel-title">
                        전체
                      </a>
                      <input type="hidden" name="srSearchKey" id="search_key" value="" />
                      <ul>
                        <li>
                          <a href="#search" class="searchOption" title="전체" data-value="">
                            전체
                          </a>
                        </li>
                        <li>
                          <a href="#search" class="searchOption" title="제목" data-value="article_title">
                            제목
                          </a>
                        </li>
                        <li>
                          <a href="#search" class="searchOption" title="내용" data-value="article_text">
                            내용
                          </a>
                        </li>
                        <li>
                          <a href="#search" class="searchOption" title="작성자" data-value="writer_nm">
                            작성자
                          </a>
                        </li>
                      </ul>
                    </div>
                    <label for="search_val" class="b-sel-label">
                      <span>검색어</span>
                    </label>
                    <input type="text" id="search_val" name="srSearchVal" value="" placeholder="검색어를 입력해 주세요" />
                    <button type="submit" class="b-sel-btn">검색</button>
                  </fieldset>
                </form>
              </div>
              <div class="bn-list-common01 type01 bn-common">
                <div class="b-top-info-wrap">
                  <div class="total-wrap">
                    총<span>1484</span>건 /
                    금일<span>0</span>건
                  </div>
                </div>
                <table summary="공지사항" class="board-table">
                  <caption class="hide">공지사항</caption>
                  <colgroup>
                    <col class="b-col01" />
                    <col />
                    <col class="b-col04" />
                    <col class="b-col05" />
                    <col class="b-col06" />
                    <col class="b-col07" />
                  </colgroup>
                  <thead>
                    <tr>
                      <th scope="col">번호</th>
                      <th scope="col">제목</th>
                      <th scope="col">첨부</th>
                      <th scope="col">작성자</th>
                      <th scope="col">등록일</th>
                      <th scope="col" class="b-no-right">
                        조회수
                      </th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>-->
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
            <div class="related-list-wrap">
              <div class="related-box row06">
                <div class="scrollert">
                  <div class="scrollert-content">
                    <ul>
                      <li>
                        <p><a href="#a">주요사이트</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="http://plus.cnu.ac.kr/html/hub/" target="_blank" title="3처1국 부서홈페이지 새창열림">3처1국
                                부서</a></li>
                            <li><a href="http://portal.cnu.ac.kr/" target="_blank" title="CNU포털홈페이지 새창열림">CNU포털</a></li>
                            <li><a href="http://ipsi.cnu.ac.kr/" target="_blank" title="입학홈페이지 새창열림">입학</a></li>
                            <li><a href="http://www.icnu.net/" target="_blank" title="동문홈페이지 새창열림">동문</a></li>
                            <li><a href="https://cnufund.cnu.ac.kr/" target="_blank" title="발전기금홈페이지 새창열림">발전기금</a></li>
                            <li><a href="http://plus.cnu.ac.kr/_prog/recruit/?menu_dvs_cd=07080401&amp;site_dvs_cd=kr"
                                target="_blank" title="구인구직홈페이지 새창열림">구인구직</a></li>
                            <li><a
                                href="http://plus.cnu.ac.kr/_prog/_board/?code=sub07_070801&amp;site_dvs_cd=kr&amp;menu_dvs_cd=070801"
                                target="_blank" title="대학문화마당홈페이지 새창열림">대학문화마당</a></li>
                            <li><a href="http://iuc.cnu.ac.kr/" target="_blank" title="산학협력단홈페이지 새창열림">산학협력단</a></li>
                            <li><a href="http://www.cnupress.co.kr/" target="_blank" title="출판문화원홈페이지 새창열림">출판문화원</a>
                            </li>
                            <li><a href="https://www.cnuh.co.kr/" target="_blank" title="충남대학교병원홈페이지 새창열림">충남대학교병원</a>
                            </li>
                            <li><a href="http://dorm.cnu.ac.kr/" target="_blank" title="학생생활관홈페이지 새창열림">학생생활관</a></li>
                            <li><a href="http://cuvic.cnu.ac.kr/" target="_blank" title="웹메일홈페이지 새창열림">웹메일</a></li>
                            <li><a href="https://cnu.korus.kr/poe/mi/IndxCtr/indx.do" target="_blank"
                                title="코러스홈페이지 새창열림">코러스</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">대학원</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="http://grad.cnu.ac.kr/" target="_blank" title="대학원홈페이지 새창열림">대학원</a></li>
                            <li><a href="https://mba.cnu.ac.kr/mba/index.do" target="_blank"
                                title="경영대학원홈페이지 새창열림">경영대학원</a></li>
                            <li><a href="http://egc.cnu.ac.kr/" target="_blank" title="교육대학원홈페이지 새창열림">교육대학원</a></li>
                            <li><a href="http://www.gnppcnu.org/" target="_blank" title="국가정책대학원홈페이지 새창열림">국가정책대학원</a>
                            </li>
                            <li><a href="https://law.cnu.ac.kr/law/index.do" target="_blank"
                                title="법학전문대학원홈페이지 새창열림">법학전문대학원</a></li>
                            <li><a href="https://gsph.cnu.ac.kr/" target="_blank" title="보건대학원홈페이지 새창열림">보건대학원</a></li>
                            <li><a href="http://grast.cnu.ac.kr/" target="_blank"
                                title="분석과학기술대학원홈페이지 새창열림">분석과학기술대학원</a>
                            </li>
                            <li><a href="http://ind.cnu.ac.kr/" target="_blank" title="산업대학원홈페이지 새창열림">산업대학원</a></li>
                            <li><a href="http://gsdd.cnu.ac.kr/" target="_blank" title="신약전문대학원홈페이지 새창열림">신약전문대학원</a>
                            </li>
                            <li><a href="http://gest.cnu.ac.kr/" target="_blank"
                                title="에너지과학기술대학원홈페이지 새창열림">에너지과학기술대학원</a></li>
                            <li><a href="https://medicine.cnu.ac.kr/medicine/index.do" target="_blank"
                                title="의학전문대학원홈페이지 새창열림">의학전문대학원</a></li>
                            <li><a href="http://www.cnu.ac.kr/~cnuip/" target="_blank"
                                title="특허법무대학원홈페이지 새창열림">특허법무대학원</a></li>
                            <li><a href="https://homepage.cnu.ac.kr/peace/index.do" target="_blank"
                                title="평화안보대학원홈페이지 새창열림">평화안보대학원</a></li>
                            <li><a href="https://gspa.cnu.ac.kr/gspa/index.do" target="_blank"
                                title="행정대학원홈페이지 새창열림">행정대학원</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">대학/학부</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="http://nursing.cnu.ac.kr/" target="_blank" title="간호대학홈페이지 새창열림">간호대학</a></li>
                            <li><a href="http://cem.cnu.ac.kr/" target="_blank" title="경상대학홈페이지 새창열림">경상대학</a></li>
                            <li><a href="http://eng.cnu.ac.kr/" target="_blank" title="공과대학홈페이지 새창열림">공과대학</a></li>
                            <li><a href="https://soins.cnu.ac.kr/soins/index.do" target="_blank"
                                title="국가안보융합학부홈페이지 새창열림">국가안보융합학부</a></li>
                            <li><a href="https://cals.cnu.ac.kr/" target="_blank" title="농업생명과학대학홈페이지 새창열림">농업생명과학대학</a>
                            </li>
                            <li><a href="https://law.cnu.ac.kr/law/index.do" target="_blank"
                                title="법과대학홈페이지 새창열림">법과대학</a></li>
                            <li><a href="http://edu.cnu.ac.kr/" target="_blank" title="사범대학홈페이지 새창열림">사범대학</a>
                              <ul class="dep02">
                                <li><a href="https://cnutie.cnu.ac.kr/" target="_blank" title="교육연수원 새창열림">교육연수원</a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="https://socialscience.cnu.ac.kr/socsci/index.do" target="_blank"
                                title="사회과학대학홈페이지 새창열림">사회과학대학</a>
                              <!--
											<ul class="dep02">
                                                <li><a href="http://grad.cnu.ac.kr/" target="_blank" title="대학원홈페이지 새창열림">대학원</a></li>
                                                <li><a href="https://mba.cnu.ac.kr/index.php" target="_blank" title="경영대학원홈페이지 새창열림">경영대학원</a></li>
                                            </ul>
											-->
                            </li>
                            <li><a href="https://cbb.cnu.ac.kr/cbb/index.do" target="_blank"
                                title="생명시스템과학대학홈페이지 새창열림">생명시스템과학대학</a></li>
                            <li><a href="http://homeco.cnu.ac.kr/" target="_blank" title="생활과학대학홈페이지 새창열림">생활과학대학</a>
                            </li>
                            <li><a href="http://vetmed.cnu.ac.kr/" target="_blank" title="수의과대학홈페이지 새창열림">수의과대학</a></li>
                            <li><a href="https://pharm.cnu.ac.kr/pharm/index.do" target="_blank"
                                title="약학대학홈페이지 새창열림">약학대학</a></li>
                            <li><a href="http://art.cnu.ac.kr/" target="_blank" title="예술대학홈페이지 새창열림">예술대학</a></li>
                            <li><a href="http://medicine.cnu.ac.kr/" target="_blank" title="의과대학홈페이지 새창열림">의과대학</a></li>
                            <li><a href="http://human.cnu.ac.kr/" target="_blank" title="인문대학홈페이지 새창열림">인문대학</a></li>
                            <li><a href="http://cns.cnu.ac.kr/" target="_blank" title="자연과학대학홈페이지 새창열림">자연과학대학</a></li>
                            <li><a href="http://free.pagei.gethompy.com/" target="_blank"
                                title="자유전공학부홈페이지 새창열림">자유전공학부</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">부속시설</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="http://www.cnucrf.re.kr/" target="_blank" title="공동실험실습관홈페이지 새창열림">공동실험실습관</a>
                            </li>
                            <li><a href="http://workshop.cnu.ac.kr/" target="_blank"
                                title="공학교육실습관홈페이지 새창열림">공학교육실습관</a>
                            </li>
                            <li><a href="http://www.cicnu.ac.kr/" target="_blank"
                                title="공자아카데미(공자학원)홈페이지 새창열림">공자아카데미(공자학원)</a></li>
                            <li><a href="http://gifted.cnu.ac.kr/" target="_blank" title="과학영재교육원홈페이지 새창열림">과학영재교육원</a>
                            </li>
                            <li><a href="http://ttc.cnu.ac.kr/" target="_blank" title="교직부홈페이지 새창열림">교직부</a></li>
                            <li><a href="http://cnuint.cnu.ac.kr/" target="_blank" title="국제교류본부홈페이지 새창열림">국제교류본부</a>
                            </li>
                            <li><a href="http://dream.cnu.ac.kr/" target="_blank" title="국제언어교육센터홈페이지 새창열림">국제언어교육원</a>
                            </li>
                            <li><a href="http://ile.cnu.ac.kr/" target="_blank" title="기초교양교육원홈페이지 새창열림">기초교양교육원</a>
                            </li>
                            <li><a href="http://www.cnu.ac.kr/~intam/" target="_blank"
                                title="나노ㆍ신소재공학원홈페이지 새창열림">나노ㆍ신소재공학원</a></li>
                            <li><a href="http://library.cnu.ac.kr/" target="_blank" title="도서관홈페이지 새창열림">도서관</a></li>
                            <li>
                              <a href="https://vetmed.cnu.ac.kr/cnuah/index.do" target="_blank"
                                title="부속동물병원홈페이지 새창열림">부속동물병원</a>
                              <!--
											<ul class="dep02">
                                                <li><a href="http://grad.cnu.ac.kr/" target="_blank" title="대학원홈페이지 새창열림">대학원</a></li>
                                                <li><a href="https://mba.cnu.ac.kr/index.php" target="_blank" title="경영대학원홈페이지 새창열림">경영대학원</a></li>
                                            </ul>
											-->
                            </li>
                            <li><a href="http://museum.cnu.ac.kr/" target="_blank" title="박물관홈페이지 새창열림">박물관</a></li>
                            <li><a href="https://health.cnu.ac.kr/health/index.do" target="_blank"
                                title="보건진료소홈페이지 새창열림">보건진료소</a></li>
                            <li><a href="http://forb.cnu.ac.kr/" target="_blank"
                                title="산학종합정보시스템홈페이지 새창열림">산학종합정보시스템</a>
                            </li>
                            <li><a href="http://news.cnu.ac.kr/" target="_blank" title="신문방송사홈페이지 새창열림">신문방송사</a></li>
                            <li><a href="http://safety.cnu.ac.kr/" target="_blank" title="안전관리본부홈페이지 새창열림">안전관리본부</a>
                            </li>
                            <li><a href="http://fovu.cnu.ac.kr/" target="_blank" title="인권센터홈페이지 새창열림">인권센터</a></li>
                            <li><a href="https://job.cnu.ac.kr/job/index.do#" target="_blank"
                                title="인재개발원홈페이지 새창열림">인재개발원</a></li>
                            <li><a href="http://nhm.cnu.ac.kr/" target="_blank" title="자연사박물관홈페이지 새창열림">자연사박물관</a></li>
                            <li><a href="http://doumi.cnu.ac.kr/" target="_blank" title="장애학생지원센터홈페이지 새창열림">장애학생지원센터</a>
                            </li>
                            <li><a href="http://cic.cnu.ac.kr/" target="_blank" title="정보통신원홈페이지 새창열림">정보통신원</a></li>
                            <li><a href="http://job.cnu.ac.kr/login" target="_blank" title="창업교육센터홈페이지 새창열림">창업교육센터</a>
                            </li>
                            <li><a href="http://gymn.cnu.ac.kr/" target="_blank" title="체육진흥원홈페이지 새창열림">체육진흥원</a></li>

                            <li><a href="http://lifelong.cnu.ac.kr/" target="_blank" title="평생교육원홈페이지 새창열림">평생교육원</a>
                            </li>
                            <li><a href="http://counselling.cnu.ac.kr/" target="_blank"
                                title="학생상담센터홈페이지 새창열림">학생상담센터</a>
                            </li>
                            <li><a href="/startup/index.do" target="_blank" title="창업지원단홈페이지 새창열림">창업지원단</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">연구소</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="http://www.meri.re.kr/" target="_blank" title="경영경제연구소홈페이지 새창열림">경영경제연구소</a>
                            </li>
                            <li><a href="https://indedu.cnu.ac.kr/ind_edu/index.do" target="_blank"
                                title="공업교육연구소홈페이지 새창열림">공업교육연구소</a></li>
                            <li><a href="http://cnuedu.cnu.ac.kr/" target="_blank" title="교육연구소홈페이지 새창열림">교육연구소</a></li>
                            <li><a href="https://homepage.cnu.ac.kr/cnuibs/index.do" target="_blank"
                                title="기초과학연구원홈페이지 새창열림">기초과학연구원</a></li>
                            <li><a href="http://agro.cnu.ac.kr/" target="_blank" title="농업과학연구소홈페이지 새창열림">농업과학연구소</a>
                            </li>
                            <li><a href="https://instivet.cnu.ac.kr/instivet/index.do" target="_blank"
                                title="동물의과학연구소홈페이지 새창열림">동물의과학연구소</a></li>
                            <li><a href="https://baekje.zininzin.co.kr:6035/" target="_blank"
                                title="백제연구소홈페이지 새창열림">백제연구소</a></li>
                            <li><a href="https://cnulawi.jams.or.kr/co/main/jmMain.kci" target="_blank"
                                title="법학연구소홈페이지 새창열림">법학연구소</a></li>
                            <li><a href="http://cnuiss.jams.or.kr/" target="_blank" title="사회과학연구소홈페이지 새창열림">사회과학연구소</a>
                            </li>
                            <li><a href="http://cnuibt.cnu.ac.kr/" target="_blank" title="생물공학연구소홈페이지 새창열림">생물공학연구소</a>
                            </li>
                            <li><a href="http://sorec.cnu.ac.kr/" target="_blank"
                                title="소프트웨어연구센터홈페이지 새창열림">소프트웨어연구센터</a>
                            </li>
                            <li><a href="https://homepage.cnu.ac.kr/cancer/intro/organization.do" target="_blank"
                                title="암연구소홈페이지 새창열림">암연구소</a></li>
                            <li><a href="http://humres-cnu.ac.kr/" target="_blank" title="인문과학연구소홈페이지 새창열림">인문과학연구소</a>
                            </li>
                            <li><a href="http://rins.cnu.ac.kr/" target="_blank" title="자연과학연구소홈페이지 새창열림">자연과학연구소</a>
                            </li>
                            <li><a href="https://radioelec.cnu.ac.kr/radioelec/intro/purpose.do" target="_blank"
                                title="전파·전기공학연구소홈페이지 새창열림">전파·전기공학연구소</a></li>
                            <li><a href="http://iatv.cnu.ac.kr/" target="_blank" title="첨단수송체연구소홈페이지 새창열림">첨단수송체연구소</a>
                            </li>
                            <li><a href="http://ieb.cnu.ac.kr/" target="_blank"
                                title="환경·생물시스템연구소홈페이지 새창열림">환경·생물시스템연구소</a></li>
                            <li><a href="http://www.aric.re.kr/" target="_blank" title="회계연구소홈페이지 새창열림">회계연구소</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">자치기구</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="http://faculty.cnu.ac.kr/" target="_blank" title="교수회홈페이지 새창열림">교수회</a></li>
                            <li><a href="https://cnuis.co.kr/" target="_blank" title="대학원 총학생회홈페이지 새창열림">대학원 총학생회</a>
                            </li>
                            <li><a href="http://chungil.cnu.ac.kr/" target="_blank" title="직원협의회홈페이지 새창열림">직원협의회</a>
                            </li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">기타</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="http://wisetcnu.co.kr" target="_blank" title="WISET 충청권역사업단홈페이지 새창열림">WISET
                                충청권역사업단</a></li>
                            <li><a href="http://ceeca.cnu.ac.kr/" target="_blank" title="공학교육혁신센터홈페이지 새창열림">공학교육혁신센터</a>
                            </li>
                            <li><a href="http://linc.cnu.ac.kr/" target="_blank" title="LINK사업단홈페이지 새창열림">LINC사업단</a>
                            </li>
                            <li><a href="http://www.academyinfo.go.kr/" target="_blank" title="대학알리미홈페이지 새창열림">대학알리미</a>
                            </li>
                            <li><a href="http://www.cnu.ac.kr/~cnulegal/" target="_blank" title="법률센터홈페이지 새창열림">법률센터</a>
                            </li>
                            <li><a href="http://cnuss.cnu.ac.kr/smain.html" target="_blank"
                                title="스포츠융복합창업육성사업단 페이지 새창열림">스포츠융복합창업육성사업단</a></li>
                            <li><a href="http://e-learn.cnu.ac.kr/" target="_blank"
                                title="대학이러닝지원센터홈페이지 새창열림">대학이러닝지원센터</a></li>
                            <li><a href="http://cnucore.cnu.ac.kr/" target="_blank"
                                title="인문역량강화사업단 홈페이지 새창열림">인문역량강화사업단</a></li>
                            <li><a href="http://cnulab.cnu.ac.kr/" target="_blank"
                                title="연구실안전관리통합시스템홈페이지 새창열림">연구실안전관리통합시스템</a></li>
                            <li><a href="http://plus.cnu.ac.kr/html/imhae/" target="_blank"
                                title="임해수련원홈페이지 새창열림">임해수련원</a></li>
                            <li><a href="http://jsh.cnu.ac.kr/" target="_blank" title="정심화국제문화회관홈페이지 새창열림">정심화국제문화회관</a>
                            </li>
                            <li><a href="http://www.ccseagrant.org/" target="_blank"
                                title="충청씨그랜트사업단홈페이지 새창열림">충청씨그랜트사업단</a></li>
                            <li><a href="http://news.cnu.ac.kr/" target="_blank" title="충대신문홈페이지 새창열림">충대신문</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
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