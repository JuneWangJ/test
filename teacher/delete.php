<!DOCTYPE html>
<html>
<head>
	<title>删除题目</title>
</head>
<body>
<h2 align="center">删除题目</h2>
<center>
	<form action="" method="post" accept-charset="utf-8">
		<table border="0" width="90%" bgcolor="lightblue">
			<tr>
				<td>题号：</td>
				<td><input type="text" name="id" value="" placeholder="" size="20">*</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="" value="确定"></td>
			</tr>
		</table>
	</form>
</center>
<?php
require_once "connection.php";
$sql = "DELETE from exam where id='" . trim($_POST["id"]) . "'" ;
if (mysql_db_query("phone", $sql, $connect)) {
	echo "删除成功";
} else {
	echo "删除失败";
	// die('Error: ' . mysql_error());
}
mysql_close();
?>
</body>
</html>