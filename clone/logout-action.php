<?php
session_start();
$result = session_destroy();

if($result) { //성공시 true, 실패시 fale
?><script>
	history.back();
</script>
<?php } ?>
