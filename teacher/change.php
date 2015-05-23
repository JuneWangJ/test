<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>修改题目</title>
</head>
<body>
<h2 align="center">修改题目</h2>
<center>
	<form action="" method="post" accept-charset="utf-8">
		<table border="0" width="90%" bgcolor="pink">
			<tr>
				<td>题号：</td>
				<td><input type="text" name="id" value="" placeholder="">*</td>
			</tr>
			<td>
				<td></td>
				<td><input type="submit" name="" value="确定"></td>
			</td>
		</table>
	</form>
</center>
<?php
$id = $_POST["id"];

if (trim($id) == "") {
	echo "请输入题号";
} else {

	require_once "connection.php";
	$sql = "SELECT * from exam where id='" . $id . "';";
	$_SESSION["id"]=$id;
	if (mysql_db_query("phone", $sql, $connect)) {
		mysql_close($connect);
		// session_start();
		// $_SESSION["id"] = $id;
		echo "<script>window.location ='update_form.php';</script>";

	} else {
		mysql_close($connect);
		echo "<p>对不起您输入的题号不存在，请重新输入</p>";
	}
}
?>
</body>
</html>