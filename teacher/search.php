<!DOCTYPE html>
<html>
<head>
	<title>查找题目</title>
</head>
<body>
<h2 align="center">查找题目</h2>
<center>
	<form action="" method="post" accept-charset="utf-8">
		<table border="0" width="90%" bgcolor="lightblue">
			<tr>
				<td>题号：</td>
				<td><input type="text" name="id" value="" placeholder="" size="20">*</td>
				<td><input type="submit" name="" value="确定"></td>
			</tr>
		</table>
	</form>

<table border="0" width="95%">
	<tr bgcolor="pink" align="center">
		<td width="15%">题号</td>
		<td width="15%">题目</td>
		<td width="25%">A</td>
		<td width="20%">B</td>
		<td width="10%">C</td>
		<td width="20%">D</td>
	</tr>
<?php
require_once "connection.php";
$sql = "select * from exam where id='" . $_POST["id"] . "';";
$result = mysql_db_query("phone", $sql, $connect);
while ($row = mysql_fetch_row($result)) {
	echo "<tr bgcolor='pink' align='center'>";
	echo "<td>" . $row[0] . "</td>";
	echo "<td>" . $row[1] . "</td>";
	echo "<td><a href='mailto:'" . $row[2] . "'>" . $row[2] . "</a></td>";
	echo "<td>" . $row[3] . "</td>";
	echo "<td>" . $row[4] . "</td>";
	echo "<td>" . $row[5] . "</td>";
	echo "</tr>";
}

// OCILogOff($dbconn);
mysql_close();

?>
</center>

</body>
</html>