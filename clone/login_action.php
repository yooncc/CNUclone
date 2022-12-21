<?php
error_reporting(E_ALL);
ini_set("display_errors",1);

session_start();

$fp = fopen("passwd","r");

$id = $_POST['id'];
$pw = $_POST['pwd'];

echo $id;
echo $pw;
$result = array();
$user_id = array();
$user_pw = array();
$user_name = array();
$user_gender = array();
$user_age = array();
$user_memo = array();


$line = @file("passwd");
echo $line[0];

//if($line != null) {
//	$result = explode(":",$line[0]);
//}
//echo $result[0];

if($line != null) {
	for($i=0;$i<6;$i++) {
		$result = explode(":",$line[$i]??'');
                $user_id[$i] = $result[0];
                $user_pw[$i] = $result[1];
                $user_name[$i] = $result[2];
                $user_gender[$i] = $result[3];
                $user_age[$i] = $result[4];
                $user_memo[$i] = $result[5];
	}
}
echo $user_id[0];
echo $user_pw[0];
echo $user_id[1];

if(!in_array($id,$user_id)) {
                ?>
                <script>
                alert("<?php echo "일치하는 아이디가 없습니다."?>");
                location.replace("<?php echo "./login.php"?>");
                </script>
<?php }
if(!$id||!$pw) {

		$result=session_destroy();
?>
                <script>
                alert("<?php echo "아이디 또는 비밀번호를 입력해주세요."?>");
                location.replace("<?php echo "./login.php"?>");
                </script>
<?php
                }


for($i=0;$i<6;$i++) {
        echo $user_id[$i].":".$user_pw[$i];
        echo "<br>";

        if($id==$user_id[$i]) {
                if($pw==$user_pw[$i]) {
                        $_SESSION['userid']=$id;
                        $_SESSION['username']=$user_name[$i];
                        if(isset($_SESSION['userid'])) {
                ?>
                <script>
                alert("<?php echo $user_name[$i]." 님 환영합니다."?>");
                location.replace("<?php echo "./index.php"?>");
                </script>
<?php
                        }
                }else{
                ?>
                <script>
                alert("<?php echo "비밀번호가 일치하지 않습니다."?>");
                location.replace("<?php echo "./login.php"?>");
                </script>
<?php
                }
                continue;
        }

}
?>

