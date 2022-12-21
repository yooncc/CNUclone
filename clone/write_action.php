<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
session_start();

$connect = mysqli_connect("localhost","root","40314031","board") or die("fail");

$id = $_POST['user_id'];     //wrtier
$title = $_POST['title'];    //title
$content = $_POST['contents'];   //content
$btype = $_POST['category'];   // boardtype
$name = $_SESSION['username'];
//$URL = './index.php';   //return URL


if(!$title) {
?>
<script>
	alert("<?php echo "내용을 입력하세요. "?>");
	location.replace("<?php echo './write.php' ?>");
</script>
<?php
} 

$tmpfile = $_FILES['upload']['tmp_name'];
$o_name = $_FILES['upload']['name'];
//$filename = iconv("UTF-8", "EUC_KR", $_FILES['upload']['name']);
$filename = basename($_FILES['upload']['name']);
$folder = "./upload/".$filename;
move_uploaded_file($tmpfile, $folder);

if($title) {

$query = "INSERT INTO $btype (board_no, title, contents, user_id, created_time,updated_time, counts, file, name)
	values(null, '$title', '$content', '$id', now(),null, 0, '$o_name', '$name')";

$result = $connect->query($query);
//if($result) {
?>
<script>
	alert("<?php echo "게시글이 등록되었습니다. "?>");
	location.replace("<?php echo $btype?>.php");
</script>
<?php
} else {
	echo "게시글 등록에 실패하였습니다.";
}





mysqli_close($connect);
?>
