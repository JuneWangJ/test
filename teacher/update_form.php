<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>修改成员</title>
</head>
<body>
	<h2 align="center">请修改您的资料：</h2>
	<p align="center">(带＊的内容必须输入)</p>

<?php
require_once "connection.php";
// session_start();
$id = $_SESSION["id"];
session_destroy();
$sql = "select * from exam where id='" . $id . "';";
$result = mysql_db_query("phone", $sql, $connect);
if ($row = mysql_fetch_row($result)) {
	mysql_close();
	echo "
<center>
		<form action='update.php' method='post' accept-charset='utf-8'>
			<table border='0' width='80%' bgcolor='00FFF'>
				<tr>
					<td>题号：</td>
					<td><input type='text' name='id' value='" . $row[0] . "' placeholder='' size='20'>*</td>
				</tr>
				<tr>
					<td>题目：</td>
					<td><textarea name='content' rows='2' cols='40' wrap='soft'>" . $row[1] . "</textarea>*</td>
				</tr>
				<tr>
					<td>A：</td>
					<td><textarea name='A' rows='2' cols='40' wrap='soft'>" . $row[2] . "</textarea></td>
				</tr>
				<tr>
					<td>B：</td>
					<td><textarea name='B' rows='2' cols='40' wrap='soft'>" . $row[3] . "</textarea></td>
				</tr>
				<tr>
					<td>C：</td>
					<td><textarea name='C' rows='2' cols='40' wrap='soft'>" . $row[4] . "</textarea></td>
				</tr>
				<tr>
					<td>D：</td>
					<td><textarea name='D' rows='2' cols='40' wrap='soft'>" . $row[5] . "</textarea></td>
				</tr>
				<tr>
					<td>答案：</td>
					<td><input type='text' name='answer' value='" . $row[6] . "' placeholder='' size='20'></td>
				</tr>
				<tr>
					<td></td>
					<td><input type='submit' name='' value='确定'><input type='reset' name='' value='重置'></td>
				</tr>
			</table>
		</form>
</center>";
} else {
	die('Error: ' . mysql_error());
	mysql_close($connect);

}
?>
</body>
</html>