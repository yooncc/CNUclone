<?php
$connect = mysqli_connect('localhost', 'root', '40314031', 'board') or die("connect failed");
$number = $_GET['board_no'];

$query = "SELECT user_id from board2 where board_no = $number";
$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);

$userid = $rows['user_id'];

session_start();

$URL = "./board2.php";
?>

<?php
if(!isset($_SESSION['userid'])) {
?><script>
	alert("권한이 없습니다.");
location.replace("<?php echo $URL ?>");
</script>

<?php } else if ($_SESSION['userid'] == $userid) {
$query1 = "delete from board2 where board_no = $number";
$result1 = $connect->query($query1); ?>
<script>
alert("게시글이 삭제되었습니다.");
location.replace("<?php echo $URL ?>");
</script>

<?php } else { ?>
<script>
alert("권한이 없습니다.");
location.replace("<?php echo $URL ?>");
</script>
<?php }
?>


