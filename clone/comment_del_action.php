<?php
//error_reporting(E_ALL);
//ini_set("display_errors",1);
session_start();

$connect = mysqli_connect('localhost', 'root', '40314031', 'board') or die("failed");

$c_no = $_POST['b_no'];  //comment 게시글 번호
$number = $_POST['board_no'];  //board 게시글 번호
$idx = $_POST['rno']; // 댓글 번호
$userid = $_SESSION['userid'];


$query1 = "SELECT * FROM comment where user_id='$userid'";

$result= $connect->query($query1);
$id = mysqli_fetch_assoc($result);
echo $id['user_id'];

//$pw = $_POST['pw'];  //모달창 비번
//$rpw = $rows['pw']; // 댓글 저장된 값

//비번 db 해쉬값 비교, 세션값과 db의 user_id 비교
//if((password_verify($pw,$rpw)) && ($USER_ID == $rows['user_id'])) {
//if((password_verify($pw,$rpw))) {
	//테이블 comment idx 값이 $c_no인 값 찾아 삭제

$query3  = "delete from comment where idx='$idx'";
$delete = $connect->query($query3);

if($id['user_id'] == $_SESSION['userid']) { $delete;
?>
<script>
	alert("댓글이 삭제되었습니다.");
		history.back(); 
	
</script>
<?php } else { ?>
	<script>
	alert("본인의 댓글이 아니거나 비밀번호가 틀립니다.");
	history.back();
	</script>
<?php } ?>


