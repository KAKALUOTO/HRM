<?php
require_once("../../conn/Conn_DB.php");
$str = "delete from jixiao where id = ".$_GET['id'];
$delete = mysql_query($str);
if ($delete){
	echo "<script>
		alert('已删除');
		window.location.href='../jixiao_manager.php';
	</script>";
}
else {
	echo "<script>
		alert('删除失败！');
		window.location.href='../jixiao_manager.php';
	</script>";
}
?>