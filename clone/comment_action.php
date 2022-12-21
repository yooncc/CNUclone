<?php
 session_start();

$connect = mysqli_connect('localhost','root','40314031','board') or die("fialed");

$id = $_SESSION['userid'];
$number = $_POST['board_no'];
$content = $_POST['content'];
$name = $_SESSION['username'];


$query = "INSERT INTO comment (idx, c_no, user_id, content, date, name)
	values(null, '$number', '$id', '$content', now(), '$name')";

$result=$connect->query($query);
if($result) {
?>
	<script>
	alert("<?php echo "댓글이 등록되었습니다."?>");
	history.back();
</script>
<?php
} else {
	echo "댓글 등록에 실패하였습니다.";
}
mysqli_close($connect);
?>
