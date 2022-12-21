<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
border-top:1px solid #444444;
border-collapse: collapse;
}
tr {
border-bottom: 1px solid #444444;
padding: 10px;
}
td {
border-bottom: 1px solid #f9f9f9;
padding: 10px;
}
table .even {
background: #efefef;
}
.text {
text-align: center;
padding-top: 20px;
color: #0000;
}
.text:hover {
text-color: #f9f9f9;
}
a:link {
color: #57A0EE;
text-decoration:none;
}
a:hover {
text-decoration: underline;
}
.etc {
display: inline-block;
margin-bottom: -4px;
width:500px;
white-space: nowrap;
overflow: hidden;
text-overflow: ellipsis;
}
</style>
</head>

<body>

<?php
//error_reporting(E_ALL);
//ini_set("display_errors",1);
$connect = mysqli_connect('localhost','root','40314031','board') or die('connect failed');

if(isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = 1;

$category = $_GET['category'];
$search = $_GET['search'];


$query = "SELECT * FROM board2 where $category like '%{$search}%' ORDER BY board_no DESC"; //역순 출력
$sql = mysqli_query($connect, $query);
//$result = $connect->query($query);
$total = mysqli_num_rows($sql);  //result set 의 총 레코드(행) 수 반환

$list = 10;
	$block_cnt = 5;
	$block_num = ceil($page / $block_cnt);
	$block_start = (($block_num -1)*$block_cnt) + 1; // 블럭 시작 번호 1, 11, 21
$block_end = $block_start + $block_cnt - 1; // 블럭 마지막 번호 10, 20, 30

$total_page = ceil($total/$list);
if($block_end > $total_page) {
	$block_end = $total_page;
}


$total_block = ceil($total_page/$block_cnt);
$page_start = ($page -1)*$list;
$total_rst=$total-($page-1)*$list;

//게시글 정보 가져오기
$result = mysqli_query($connect,"SELECT * FROM board2 where $category like '%{$search}%' ORDER BY BOARD_NO DESC LIMIT $page_start, $list");









session_start();

if(isset($_SESSION['userid'])) {
	?><b><?php echo $_SESSION['userid']; ?></b>님 반갑습니다.<button onclick="location.href='./logout-action.php'" style="float:right; font-size:15.5px;">로그아웃</button><br  />
<?php
}  else {
?>
<button onclick="location.href='./login.php'" style="float:right; font-size:15.5px;">로그인</button>
<br  />
<?php
}
?>
<p style="font-size:25px; text-align:center"><a href='index.php'><b>게시판</b></a></p>
<table align="center">
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
while($rows = mysqli_fetch_assoc($result)) { //result set에서 레코드(행)를 1개씩 리턴
	if($total % 2 == 0) {
?>
<tr class="even">
<!--배경색 진하게-->
<?php } else {
?>
<tr>
<!--배경색 그냥 -->
<?php } ?>
<td width="50" align="center"><?php echo $total_rst; ?></td>
<td class="etc"  align="left"><a href="read.php?board_no=<?php echo $rows['board_no'] ?>"><?php echo $rows['title']; ?></td>
<td width="100" align="left"><?php echo $rows['user_id']; ?></td>
<td width="250" align="center"><?php if ($rows['updated_time']) { echo $rows['updated_time']; echo "(수정됨)";} else { echo $rows['created_time'];} ?></td>
<td width="50" align="center"><?php echo $rows['counts']; ?></td>
</tr>
<?php
$total_rst--;
}
?>
</tbody>
</table>

<div id="page_num" style="text-align: center;">
<?php
if($page <= 1) {
	echo "<a href='search_result2.php?category=$category&search=$search&page=1'>◀  이전</a>";
} else {
	$pre = $page -1;
	echo "<a href='search_result2.php?category=$category&search=$search&page=$pre'>◀  이전</a>";
}
for($i = $block_start; $i <= $block_end; $i++) {
	if($page == $i) {
		echo "<b> $i </b>";
	} else {
		echo "<a href='search_result2.php?category=$category&search=$search&page=$i'> $i</a>";
	}
}
if($page >= $total_page) {
	//빈값
} else {
	$next = $page +1;
	echo "<a href='search_result.php2?category=$category&search=$search&page=$next'>다음  ▶</a>";
}
if($page >= $total_page) {
	//빈 값
} else {
	echo "<a href='search_result.php2?category=$category&search=$search&page=$total_page'> 마지막</a>";
}
?>
</div>
<div class=text>
<button style="cursor:hand" onClick="location.href='./write.php'">글쓰기</button>
</div>
<br><br>
<div id="search_box" style="text-align:center; padding-top: 50px">
<form action="search_result.php" method="get">
<select name="category">
<option value="title">제목</option>
<option value="user_id">작성자</option>
<option value="contents">내용</option>
</select>
<input type="text" name="search" size="40" required="required">
<button style="cursor: hand">검색</button>
</form>
</div>

 
</body>

</html>
