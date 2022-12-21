<!DOCTYPE html>
<html>

<head>
	<meta charset='utf-8'>

	<style>
		.read_table {
			border: 1px solid #444444;
			margin-top: 30px;
		}

		.read_title {
			height: 45px;
			font-size: 23.5px;
			text-align: center;
			background-color: #3C3C3C;
			color: white;
			width: 1000px;
		}

		.read_id {
			text-align: center;
			background-color: #EEEEEE;
			width: 30px;
			height: 33px;
		}

		.read_id2 {
			background-color: white;
			width: 60px;
			height: 33px;
			padding-left: 10px;
		}

		.read_hit {
			background-color: #EEEEEE;
			width: 30px;
			text-align: center;
			height: 33px;
		}

		.read_hit2 {
			background-color: white;
			width: 60px;
			height: 33px;
			padding-left: 10px;
		}

		.read_content {
			padding: 20px;
			border-top: 1px solid #444444;
			height: 500px;
		}

		.read_btn {
			width: 700px;
			height: 200px;
			text-align: center;
			margin: auto;
			margin-top: 50px;
		}

		.read_btn1 {
			height: 50px;
			width: 100px;
			font-size: 20px;
			text-align: center;
			background-color: white;
			border: 2px solid black;
			border-radius: 10px;
		}

		.del_btn {
			height: 30px;
			width: 50px;
			font-size: 15px;
			text-align: center;
			background-color: white;
			border: 1px solid gray;
			border-radius: 5px;
		}

		/*.read_comment_input {
width: 700px;
height: 500px;
text-align: center;
margin: auto;
}
.read_text3 {
font-weight: bold;
float: left;
margin-left: 20px;
}
.read_com_id {
width: 100px;
}
.read_comment {
width: 500px;
margin-top: 100px;
word-break: break-all;
}*/
		.comment_view {
			width: 500px;
			align: center;
			margin-top: 50px;
		}

		.dat_view {
			font-size: 14px;
			padding: 10px 0 15px 0;
			border-bottom: 1px solid gray;
		}

		.date_ins {
			margin-top: 50px;
		}

		.dat_edit_t {
			width: 520px;
			height: 70px;
			position: absolute;
		}

		.rep_con {
			width: 400px;
			height: 60px;
		}

		.rep_btn {
			position: absolute;
			width: 100px;
			height: 60px;
			font-size: 16px;
			margin-left: 10px;
		}
	</style>
</head>

<body>
	<?php
  //error_reporting(E_ALL);
//ini_set("display_errors",1);
  
  $connect = mysqli_connect('localhost', 'root', '40314031', 'board');
  $number = $_GET['board_no']; //GET사용
  session_start();
  $query = "SELECT title, contents, user_id, counts from board2 where board_no = $number";
  $result = $connect->query($query);
  $rows = mysqli_fetch_assoc($result);

  $counts = "update board2 set counts = counts + 1 where board_no = $number";
  $connect->query($counts);





  if (isset($_SESSION['userid'])) {
  ?><b>
		<?php echo $_SESSION['userid']; ?>
	</b>님 반갑습니다.
	<button onclick="location.href='./logout-action.php'" style="float:right; font-size:15.5px;">로그아웃</button>
	<br />
	<?php } else { ?>
	<button onclick="location.href='./login.php'" style="float:right; font-size:15.5px;">로그인</button>
	<br />
	<?php } ?>


	<table class="read_table" align=center>
		<tr>
			<td colspan="4" class="read_title">
				<?php echo $rows['title'] ?>
			</td>
		</tr>
		<tr>
			<td class="read_id">작성자</td>
			<td class="read_id2">
				<?php echo $rows['user_id'] ?>
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
					<?= $reply['user_id'] ?>
						<?= $reply['date'] ?>
							<?= $reply['idx'] ?>
								<?= $reply['c_no'] ?>
				</b>
				<form action="comment_del_action.php" method="post">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no"
						value="<?php echo $reply['c_no']; ?>">
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
			<input type="text" name="dat_user" id="dat_user" class="dat_user" placeholder="작성자" value=<?= $USER_ID ?>>
			<input type="password" name="dat_pw" id="dat_pw" class="dat_pw" size="15" placeholder="비밀번호">
			<div style="margin-top:10px;">
				<textarea name="content" class="rep_con" id="rep_con"></textarea>
				<input id="rep_btn" class="rep_btn" type="submit" value="댓글">
			</div>
		</form>
	</div>




	<!--MODIFY & DELETE 추후 세션처리 보완 -->
	<div class="read_btn">
		<button class="read_btn1" onclick="location.href='./index.php'">목록</button>&nbsp;&nbsp;
		<button class="read_btn1" onclick="location.href='./modify.php?board_no=<?= $number ?>'">수정</button>&nbsp;&nbsp;
		<button class="read_btn1" a onclick="ask();">삭제</button>
		<script>
			function ask() {
				if (confirm("게시글을 삭제하시겠습니까?")) {
					window.location = "./delete.php?board_no=<?= $number ?>"
				}
			}
		</script>
	</div>


</body>
</html>