<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

$connect = mysqli_connect('localhost', 'root', '40314031', 'homep') or die("connect failed");
$number = $_GET['board_no'];
//$id = $_GET['user_id'];

$query = "SELECT board_no from board where board_no='$number'";
$result = $connect->query($query);
$rows = mysqli_fetch_assoc($result);

$num = $rows['board_no'];




$URL = "./index.php";
if ($rows['board_no'] == $number) {


$query1 = "delete from board where board_no = '$number'";
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


