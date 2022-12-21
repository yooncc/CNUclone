<!DOCTYPE html>
<html lang="ko" class="no-js">

<head>
  <title>충남대 수학과 copy</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport"
    content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
  <link rel="stylesheet" type="text/css" href="./css/my.css" />
  <link rel="stylesheet" type="text/css" href="./css/cms.css" />
 <!--  <link rel="stylesheet" type="text/css" href="./css/owl.css" />
  <link rel="stylesheet" type="text/css" href="./css/scroll.css" /> -->
  <link rel="canonical" href="http://localhost/clone/index.php" />
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
  <?php     session_start();

if(isset($_SESSION['userid'])) { ?><a>
<b><?php echo $_SESSION['userid']; ?></b>님 반갑습니다.<button onclick="location.href='./logout-action.php'" style="float:right; font-size:15.5px;">로그아웃</button><br  /></a>
<?php
}  else {
?>
<a><button onclick="location.href='./login.php'" style="float:right; font-size:15.5px;">로그인</button></a>
<br  />
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

                  <li><a href="board4.php">교수소개</a></li>

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

    <!-- 오른쪽 사이드 바 -->
    <div class="quick-wrap">
      <div class="main-quick-wrap">
        <div class="main-quick-menu">
          <a href="#a" title="바로가기" class="m-quick-btn"><span>바로가기</span></a>
          <p>QUICK MENU</p>
          <ul>
            <li>
              <a href="#" target="_blank" title="충남대학교 바로가기">
                <span>충남대학교</span>
              </a>
            </li>
            <li>
              <a href="#" target="_blank" title="미래가치 창출을 위한 수리과학 선도인재 양성팀 바로가기">
                <span>4단계 BK21 사업팀</span>
              </a>
            </li>
            <li>
              <a href="#" target="_blank" title="입학관리과 바로가기">
                <span>충대 자연과학대학</span>
              </a>
            </li>
            <li>
              <a href="#" target="_blank" title="대한수학회 바로가기">
                <span>대한수학회</span>
              </a>
            </li>
            <li>
              <a href="#" target="_blank" title="충청수학회 바로가기">
                <span>충청수학회</span>
              </a>
            </li>
            <li>
              <a href="#" target="_blank" target="_blank"
                title="충남대학교산업수학 점화프로그램사업단 수학과자료실 바로가기">
                <span>충남대학교산업수학<br />점화프로그램사업단<br />수학과자료실</span>
              </a>
            </li>
          </ul>
          <a href="#a" title="상단 이동" class="scroll-top-btn"><span>TOP</span></a>
        </div>
        <div class="m-quick-bg">&nbsp;</div>
      </div>
    </div>
    <!-- 3번쨰 시작 -->
    <div class="main-content-box01">
      <div class="main-mini-wrap">
        <div class="main-visual-box carousel-wrap">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="main-visual-img-box vi01">
                <img src="./image/img-main-vi01.gif" alt="" class="mobile-hide">
                <!--  <img src="./image/img-main-vi-m01.gif" alt="" class="pc-hide"> -->
              </div>
              <div class="main-visual-txt-box v01">
                <p class="main-visual-txt01">
                  <span>우수하고 창의적인 <br class="mobile-hide">
                    연구 인력을 배출</span>
                </p>
                <p class="main-visual-txt02">
                  <span>충남대 자연과학대학<br /> 수학과</span>
                </p>
              </div>
            </div>
          </div>
          <a href="#a" title="정지" class="mini-board-ctrl carousel-stop">
            <img src="./image/btn-visual-stop.png" alt="정지">
            <img src="./image/btn-visual-play.png" alt="재생">
          </a>
        </div>
        <div class="main-mini-box">
          <div>
            <div class="main-mini-title">
              <h3>사이트 바로가기</h3>
            </div>
            <div class="scrollert">
              <div class="scrollert-content">
                <ul>
                  <li><a href="#" title="입학안내 바로가기">입학안내</a></li>
                  <li><a href="#" title="취업안내 바로가기">취업안내</a></li>
                  <li><a href="#" title="교육과정 바로가기">교육과정</a></li>
                  <li><a href="#" title="자료실 바로가기">자료실</a></li>
                  <li><a href="#" title="장학금안내 바로가기">발전기금 장학금안내</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- 4번째 줄 시작-->
    <div class="main-content-wrap02">
      <div class="main-content-box02">
        <div class="main-mini-wrap">
          <div class="main-mini-box main-mini-box01">
            <div class="main-miniboard-box">
              <a href="#"
                target="_blank" class="main-title" title="대표 공지사항">충남대 공지사항</a>
              <div class="mini-board-content">
                <ul>
                  <li>
                    <a target="_blank"
                      href="#"
                      title="2022년 2학기 성남시 다자녀가구 대학생 등록금 지원 신청 안내 자세히 보기">
                      <span class="mini-title">2022년 2학기 성남시 다자녀가구 대학생 등록금 지원 신청 안내</span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a target="_blank"
                      href="#"
                      title="충남대학교 산학협력단 직원(변리사) 채용 공고 자세히 보기">
                      <span class="mini-title">충남대학교 산학협력단 직원(변리사) 채용 공고</span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a target="_blank"
                      href="#"
                      title="2022년 상반기분 통영시 대학생 학자금 이자 지원 추가 신청 안내 자세히 보기">
                      <span class="mini-title">2022년 상반기분 통영시 대학생 학자금 이자 지원 추가 신청 안내</span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a target="_blank"
                      href="#"
                      title="2022학년도 인송문화재단 장학생 선발 안내 자세히 보기">
                      <span class="mini-title">2022학년도 인송문화재단 장학생 선발 안내</span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a target="_blank"
                      href="#"
                      title="초록우산 어린이재단 LS Dream Science Class 제18기 대학생 멘토 모집 자세히 보기">
                      <span class="mini-title">초록우산 어린이재단 LS Dream Science Class 제18기 대학생 멘토 모집</span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a target="_blank"
                      href="#"
                      title="2022학년도 동기 계절학기 수강신청 안내 자세히 보기">
                      <span class="mini-title">2022학년도 동기 계절학기 수강신청 안내</span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a target="_blank"
                      href="#"
                      title="2022년도 충남 한뿌리 장학사업 안내 자세히 보기">
                      <span class="mini-title">2022년도 충남 한뿌리 장학사업 안내</span>
                      <span class="new">new</span>
                    </a>
                  </li>
                </ul>
              </div>
              <a href="#"
                target="_blank" class="btn-more"><span class="hide">더보기</span></a>
            </div>
          </div>


          <div class="main-mini-box main-mini-box02">
            <div class="main-miniboard-box">
              <a href="#" class="main-title" title="공지사항">수학과 공지사항</a>
              <div class="mini-board-content">


                <ul>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        2022년 수학과 취업박람회 개최 안내
                      </span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        [일반대학원] 대학원 필수교과목 연구윤리 수강 및 이러닝(KIRD 알파캠퍼스) 이수 안내
                      </span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        학생 휴가(공결, 병가 등) 신청 및 처리 매뉴얼 안내 (통합정보시스템 신청 매뉴얼)
                      </span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        전공학습 강화를 위한 경진대회 - 2022년 1차 (~11월 13일)
                      </span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        2022학년도 2학기 자퇴 절차 안내
                      </span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        2022학년도 2학기 졸업시험 안내
                      </span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        수학과 노현호 교수님 대한수학회 국내논문상 수상
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <a href="#" class="btn-more"><span class="hide">더보기</span></a>
            </div>
          </div>

          <div class="main-mini-box main-mini-box01">
            <div class="main-miniboard-box">
              <a href="#" class="main-title" title="취업게시판">취업게시판</a>
              <div class="mini-board-content">


                <ul>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        [구인] 관저동 안암수학학원 신규 강사 채용
                      </span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        [크레버스] 수학강사 채용
                      </span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        「삼성 청년 SW 아카데미」9기 교육생 모집
                      </span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        2022년 대전일자리종합박람회 행사장 이동버스 안내(10월 25일)
                      </span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        국가수리과학연구소, &#039;2022 대전사이언스페스티벌&#039; 체험부스 운영인력 모집
                      </span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        2022학년도 2학기 10월 B.O.S.S 특강 안내
                      </span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        [구인] 대전 에듀바비 과외교사 채용공고
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <a href="#" class="btn-more"><span class="hide">더보기</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="main-content-wrap03">
      <div class="main-content-box03">
        <div class="main-mini-wrap">
          <div class="main-mini-box main-mini-box4">
            <div class="main-miniboard-box">
              <a href="#" class="main-title" title="세미나 및 강연회">세미나 및 강연회</a>
              <div class="mini-board-content">


                <ul>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        (11-04 10:30)[BRL] Positivity of tangent bundles of smooth projective varieties
                      </span>
                      <span class="new">new</span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        (10-28 11:00)[BRL] Lagrangian fibration structure on the cotangent bundle of a del Pezzo surface
                        of degree 4
                      </span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        [대한수학회] 대중강연 개최 안내 (10/18, 유튜브 생중계) (2022년도 대한수학회 정기총회 및 IMU 승급기념 국제학회)
                      </span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        (10-07 11:00)[BRL] Rational homology disk smoothings and Lefschetz fibrations
                      </span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        (09-15 12:00)[강연회] Universality in random matrix models and Coulomb gas systems.
                      </span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        [CANCELLED] (06-21 16:00)[BRL] N-resolutions
                      </span>
                    </a>
                  </li>
                  <li>
                    <a class="articleTitle" href="#">
                      <span class="mini-title">
                        (06-10 15:00)[BK21 초청강연] Calderón problem and Its Applications
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
              <a href="#" class="btn-more"><span class="hide">더보기</span></a>
            </div>
          </div>


          <div class="main-mini-box main-mini-box02">
            <div>
              <div class="mini-img-box">
                <a href="#" title="충남대 페이스북 바로가기"
                  target="_blank">
                  <img
                    src="./image/lion.jpeg"
                    alt="도서관 입구에서부터 멈칫하는 당신! 
          
          도서관 앱이 있다면 도서관을 더 편리하게 이용할 수 있다는 사실 알고 계신가요? 
          
          도서관 앱 활용방법을 안내드립니다! 
          
          오늘부터는 도서관 앱을 활용하여 도서관에 위풍당당 입장합니다!
          
          #충남대학교#충남대#도서관#도서관앱 썸네일 이미지">
                </a>
              </div>
              <div class="mini-txt-box">
                <p>
                  <a href="#" title="충남대 페이스북 자세히보기"
                    target="_blank">
                    도서관 입구에서부터 멈칫하는 당신!

                    도서관 앱이 있다면 도서관을 더 편리하게 이용할 수 있다는 사실 알고 계신가요?

                    도서관 앱 활용방법을 안내드립니다!

                    오늘부터는 도서관 앱을 활용하여 도서관에 위풍당당 입장합니다!

                    #충남대학교#충남대#도서관#도서관앱
                  </a>
                </p>
                <div class="like-box">
                  <span>좋아요</span>
                  <p><span>5</span>명</p>
                </div>
              </div>
            </div>


            <div class="sns-link-box">
              <ul>
                <li><a href="#" target="_blank"
                    title="충남대 Youtube 새창열림">Youtube</a></li>
                <li><a href="#" target="_blank" title="충남대 Facebook 새창열림">Facebook</a>
                </li>
                <li><a href="#" target="_blank" title="충남대 Blog 새창열림">Blog</a></li>
                <li><a href="#" target="_blank"
                    title="충남대 Instagram 새창열림">Instagram</a></li>
              </ul>
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
            <div class="related-list-wrap">
              <div class="related-box row06">
                <div class="scrollert">
                  <div class="scrollert-content">
                    <ul>
                      <li>
                        <p><a href="#a">주요사이트</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="#" target="_blank" title="3처1국 부서홈페이지 새창열림">3처1국
                                부서</a></li>
                            <li><a href="#" target="_blank" title="CNU포털홈페이지 새창열림">CNU포털</a></li>
                            <li><a href="#" target="_blank" title="입학홈페이지 새창열림">입학</a></li>
                            <li><a href="#" target="_blank" title="동문홈페이지 새창열림">동문</a></li>
                            <li><a href="#" target="_blank" title="발전기금홈페이지 새창열림">발전기금</a></li>
                            <li><a href="#"
                                target="_blank" title="구인구직홈페이지 새창열림">구인구직</a></li>
                            <li><a
                                href="#"
                                target="_blank" title="대학문화마당홈페이지 새창열림">대학문화마당</a></li>
                            <li><a href="#" target="_blank" title="산학협력단홈페이지 새창열림">산학협력단</a></li>
                            <li><a href="#" target="_blank" title="출판문화원홈페이지 새창열림">출판문화원</a>
                            </li>
                            <li><a href="#" target="_blank" title="충남대학교병원홈페이지 새창열림">충남대학교병원</a>
                            </li>
                            <li><a href="#" target="_blank" title="학생생활관홈페이지 새창열림">학생생활관</a></li>
                            <li><a href="#" target="_blank" title="웹메일홈페이지 새창열림">웹메일</a></li>
                            <li><a href="#" target="_blank"
                                title="코러스홈페이지 새창열림">코러스</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">대학원</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="#" target="_blank" title="대학원홈페이지 새창열림">대학원</a></li>
                            <li><a href="#" target="_blank"
                                title="경영대학원홈페이지 새창열림">경영대학원</a></li>
                            <li><a href="#" target="_blank" title="교육대학원홈페이지 새창열림">교육대학원</a></li>
                            <li><a href="#" target="_blank" title="국가정책대학원홈페이지 새창열림">국가정책대학원</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="법학전문대학원홈페이지 새창열림">법학전문대학원</a></li>
                            <li><a href="#" target="_blank" title="보건대학원홈페이지 새창열림">보건대학원</a></li>
                            <li><a href="#" target="_blank"
                                title="분석과학기술대학원홈페이지 새창열림">분석과학기술대학원</a></li>
                            <li><a href="#" target="_blank" title="산업대학원홈페이지 새창열림">산업대학원</a></li>
                            <li><a href="#" target="_blank" title="신약전문대학원홈페이지 새창열림">신약전문대학원</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="에너지과학기술대학원홈페이지 새창열림">에너지과학기술대학원</a></li>
                            <li><a href="#" target="_blank"
                                title="의학전문대학원홈페이지 새창열림">의학전문대학원</a></li>
                            <li><a href="#" target="_blank"
                                title="특허법무대학원홈페이지 새창열림">특허법무대학원</a></li>
                            <li><a href="#" target="_blank"
                                title="평화안보대학원홈페이지 새창열림">평화안보대학원</a></li>
                            <li><a href="#" target="_blank"
                                title="행정대학원홈페이지 새창열림">행정대학원</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">대학/학부</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="#" target="_blank" title="간호대학홈페이지 새창열림">간호대학</a></li>
                            <li><a href="#" target="_blank" title="경상대학홈페이지 새창열림">경상대학</a></li>
                            <li><a href="#" target="_blank" title="공과대학홈페이지 새창열림">공과대학</a></li>
                            <li><a href="#" target="_blank"
                                title="국가안보융합학부홈페이지 새창열림">국가안보융합학부</a></li>
                            <li><a href="#" target="_blank" title="농업생명과학대학홈페이지 새창열림">농업생명과학대학</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="법과대학홈페이지 새창열림">법과대학</a></li>
                            <li><a href="#" target="_blank" title="사범대학홈페이지 새창열림">사범대학</a>
                              <ul class="dep02">
                                <li><a href="#" target="_blank" title="교육연수원 새창열림">교육연수원</a>
                                </li>
                              </ul>
                            </li>
                            <li>
                              <a href="#" target="_blank"
                                title="사회과학대학홈페이지 새창열림">사회과학대학</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="생명시스템과학대학홈페이지 새창열림">생명시스템과학대학</a></li>
                            <li><a href="#" target="_blank" title="생활과학대학홈페이지 새창열림">생활과학대학</a>
                            </li>
                            <li><a href="#" target="_blank" title="수의과대학홈페이지 새창열림">수의과대학</a></li>
                            <li><a href="#" target="_blank"
                                title="약학대학홈페이지 새창열림">약학대학</a></li>
                            <li><a href="#" target="_blank" title="예술대학홈페이지 새창열림">예술대학</a></li>
                            <li><a href="#" target="_blank" title="의과대학홈페이지 새창열림">의과대학</a></li>
                            <li><a href="#" target="_blank" title="인문대학홈페이지 새창열림">인문대학</a></li>
                            <li><a href="#" target="_blank" title="자연과학대학홈페이지 새창열림">자연과학대학</a></li>
                            <li><a href="#" target="_blank"
                                title="자유전공학부홈페이지 새창열림">자유전공학부</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">부속시설</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="#" target="_blank" title="공동실험실습관홈페이지 새창열림">공동실험실습관</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="공학교육실습관홈페이지 새창열림">공학교육실습관</a></li>
                            <li><a href="#" target="_blank"
                                title="공자아카데미(공자학원)홈페이지 새창열림">공자아카데미(공자학원)</a></li>
                            <li><a href="#" target="_blank" title="과학영재교육원홈페이지 새창열림">과학영재교육원</a>
                            </li>
                            <li><a href="#" target="_blank" title="교직부홈페이지 새창열림">교직부</a></li>
                            <li><a href="#" target="_blank" title="국제교류본부홈페이지 새창열림">국제교류본부</a>
                            </li>
                            <li><a href="#" target="_blank" title="국제언어교육센터홈페이지 새창열림">국제언어교육원</a>
                            </li>
                            <li><a href="#" target="_blank" title="기초교양교육원홈페이지 새창열림">기초교양교육원</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="나노ㆍ신소재공학원홈페이지 새창열림">나노ㆍ신소재공학원</a></li>
                            <li><a href="#" target="_blank" title="도서관홈페이지 새창열림">도서관</a></li>
                            <li>
                              <a href="#" target="_blank"
                                title="부속동물병원홈페이지 새창열림">부속동물병원</a>
                              <!--
                          <ul class="dep02">
                                                    <li><a href="http://grad.cnu.ac.kr/" target="_blank" title="대학원홈페이지 새창열림">대학원</a></li>
                                                    <li><a href="https://mba.cnu.ac.kr/index.php" target="_blank" title="경영대학원홈페이지 새창열림">경영대학원</a></li>
                                                </ul>
                          -->
                            </li>
                            <li><a href="#" target="_blank" title="박물관홈페이지 새창열림">박물관</a></li>
                            <li><a href="#" target="_blank"
                                title="보건진료소홈페이지 새창열림">보건진료소</a></li>
                            <li><a href="#" target="_blank"
                                title="산학종합정보시스템홈페이지 새창열림">산학종합정보시스템</a></li>
                            <li><a href="#" target="_blank" title="신문방송사홈페이지 새창열림">신문방송사</a></li>
                            <li><a href="#" target="_blank" title="안전관리본부홈페이지 새창열림">안전관리본부</a>
                            </li>
                            <li><a href="http://fovu.cnu.ac.kr/" target="_blank" title="인권센터홈페이지 새창열림">인권센터</a></li>
                            <li><a href="#" target="_blank"
                                title="인재개발원홈페이지 새창열림">인재개발원</a></li>
                            <li><a href="#" target="_blank" title="자연사박물관홈페이지 새창열림">자연사박물관</a></li>
                            <li><a href="#" target="_blank" title="장애학생지원센터홈페이지 새창열림">장애학생지원센터</a>
                            </li>
                            <li><a href="#" target="_blank" title="정보통신원홈페이지 새창열림">정보통신원</a></li>
                            <li><a href="#" target="_blank" title="창업교육센터홈페이지 새창열림">창업교육센터</a>
                            </li>
                            <li><a href="#" target="_blank" title="체육진흥원홈페이지 새창열림">체육진흥원</a></li>

                            <li><a href="#" target="_blank" title="평생교육원홈페이지 새창열림">평생교육원</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="학생상담센터홈페이지 새창열림">학생상담센터</a></li>
                            <li><a href="#" target="_blank" title="창업지원단홈페이지 새창열림">창업지원단</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">연구소</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="#" target="_blank" title="경영경제연구소홈페이지 새창열림">경영경제연구소</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="공업교육연구소홈페이지 새창열림">공업교육연구소</a></li>
                            <li><a href="#" target="_blank" title="교육연구소홈페이지 새창열림">교육연구소</a></li>
                            <li><a href="#" target="_blank"
                                title="기초과학연구원홈페이지 새창열림">기초과학연구원</a></li>
                            <li><a href="#" target="_blank" title="농업과학연구소홈페이지 새창열림">농업과학연구소</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="동물의과학연구소홈페이지 새창열림">동물의과학연구소</a></li>
                            <li><a href="#" target="_blank"
                                title="백제연구소홈페이지 새창열림">백제연구소</a></li>
                            <li><a href="#" target="_blank"
                                title="법학연구소홈페이지 새창열림">법학연구소</a></li>
                            <li><a href="#" target="_blank" title="사회과학연구소홈페이지 새창열림">사회과학연구소</a>
                            </li>
                            <li><a href="#" target="_blank" title="생물공학연구소홈페이지 새창열림">생물공학연구소</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="소프트웨어연구센터홈페이지 새창열림">소프트웨어연구센터</a></li>
                            <li><a href="#" target="_blank"
                                title="암연구소홈페이지 새창열림">암연구소</a></li>
                            <li><a href="#" target="_blank" title="인문과학연구소홈페이지 새창열림">인문과학연구소</a>
                            </li>
                            <li><a href="#" target="_blank" title="자연과학연구소홈페이지 새창열림">자연과학연구소</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="전파·전기공학연구소홈페이지 새창열림">전파·전기공학연구소</a></li>
                            <li><a href="#" target="_blank" title="첨단수송체연구소홈페이지 새창열림">첨단수송체연구소</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="환경·생물시스템연구소홈페이지 새창열림">환경·생물시스템연구소</a></li>
                            <li><a href="#" target="_blank" title="회계연구소홈페이지 새창열림">회계연구소</a></li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">자치기구</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="#" target="_blank" title="교수회홈페이지 새창열림">교수회</a></li>
                            <li><a href="#" target="_blank" title="대학원 총학생회홈페이지 새창열림">대학원 총학생회</a>
                            </li>
                            <li><a href="#" target="_blank" title="직원협의회홈페이지 새창열림">직원협의회</a>
                            </li>
                          </ul>
                          <a href="#a" title="기관사이트 목록 닫기" class="pc-hide"><span class="hide">닫기</span></a>
                        </div>
                      </li>
                      <li>
                        <p><a href="#a">기타</a></p>
                        <div class="dep01">
                          <ul>
                            <li><a href="#" target="_blank" title="WISET 충청권역사업단홈페이지 새창열림">WISET
                                충청권역사업단</a></li>
                            <li><a href="#" target="_blank" title="공학교육혁신센터홈페이지 새창열림">공학교육혁신센터</a>
                            </li>
                            <li><a href="#" target="_blank" title="LINK사업단홈페이지 새창열림">LINC사업단</a>
                            </li>
                            <li><a href="#" target="_blank" title="대학알리미홈페이지 새창열림">대학알리미</a>
                            </li>
                            <li><a href="#" target="_blank" title="법률센터홈페이지 새창열림">법률센터</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="스포츠융복합창업육성사업단 페이지 새창열림">스포츠융복합창업육성사업단</a></li>
                            <li><a href="#" target="_blank"
                                title="대학이러닝지원센터홈페이지 새창열림">대학이러닝지원센터</a></li>
                            <li><a href="#" target="_blank"
                                title="인문역량강화사업단 홈페이지 새창열림">인문역량강화사업단</a></li>
                            <li><a href="#" target="_blank"
                                title="연구실안전관리통합시스템홈페이지 새창열림">연구실안전관리통합시스템</a></li>
                            <li><a href="#" target="_blank"
                                title="임해수련원홈페이지 새창열림">임해수련원</a></li>
                            <li><a href="#" target="_blank" title="정심화국제문화회관홈페이지 새창열림">정심화국제문화회관</a>
                            </li>
                            <li><a href="#" target="_blank"
                                title="충청씨그랜트사업단홈페이지 새창열림">충청씨그랜트사업단</a></li>
                            <li><a href="#" target="_blank" title="충대신문홈페이지 새창열림">충대신문</a></li>
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
              <li><a href="#" title="충남대학교 포털 새창열림">충남대학교 포털</a></li>
              <li><a href="#" title="충남대학교 개인정보 처리방침 새창열림">개인정보 처리방침</a></li>
              <li><a href="#" title="충남대학교 이메일무단수집거부 새창열림">이메일무단수집거부</a></li>
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
</body>

</html>