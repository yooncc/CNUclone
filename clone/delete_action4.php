<?php
$connect = pg_Connect("host=127.0.0.1 port=5432 dbname=yooncc user=yooncc password=40314031") or die('접속실패');
$number = $_GET['board_no'];

$query = "SELECT user_id from test where board_no = $number";
$result = $connect->query($query);
$rows = pg_fetch_assoc($result);

$userid = $rows['user_id'];

session_start();

$URL = "./board4.php";
?>

<?php
if(!isset($_SESSION['userid'])) {
?><script>
	alert("권한이 없습니다.");
location.replace("<?php echo $URL ?>");
</script>

<?php } else if ($_SESSION['userid'] == $userid) {
$query1 = "delete from test where board_no = $number";
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


