<?php
$connect = mysqli_connect('localhost','root','40314031','board') or die("connect failed");

$number = $_POST['board_no'];
$title = $_POST['title'];
$content = $_POST['contents'];

$tmpfile = $_FILES['upload']['tmp_name'];
$o_name = $_FILES['upload']['name'];
//$filename = iconv("UTF-8", "EUC_KR", $_FILES['upload']['name']);
$filename = basename($_FILES['upload']['name']);
$folder = "./upload/".$filename;
move_uploaded_file($tmpfile, $folder);



$query = "UPDATE board2 set title='$title', contents='$content', updated_time=now(), file='$o_name' where board_no='$number'";
$result = $connect->query($query);
if($result) {
?>
	<script>
	alert("수정되었습니다.");
	location.replace("./read2.php?board_no=<?= $number ?>");
</script>
<?php } else {
echo "다시시도해주세요.";
	}
?>
