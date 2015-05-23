
<html>
<head>
	<title>更新成员</title>
</head>
<body>


<?php

require_once "connection.php";
$id = $_POST["id"];

if (trim($id) == "") {
	echo "对不起，您的题号必须输入";
	echo "<p><a href='update_form.html'>返回，重新填写</p>";
} else {
	$content = $_POST["content"];
	$A = $_POST["A"];
	$B = $_POST["B"];
	$C = $_POST["C"];
	$D = $_POST["D"];
	$answer = $_POST["answer"];
	$sql1 = "DELETE from exam where id='" . $id . "';";
	mysql_db_query("phone", $sql1, $connect);
	$sql = "INSERT INTO exam VALUES('" . $id . "','" . $content . "','" . $A . "','" . $B . "','" . $C . "','" . $D . "','" . $answer . "')";
	if (!mysql_db_query("phone", $sql, $connect)) {
		die('Error: ' . mysql_error());
		mysql_close($connect);
		echo "保存发生错误，请重新填写";
		echo "<p><a href='change.php'>返回，重新填写</p>";

	} else {
		mysql_close($connect);
		echo "<h2 align='center'>您的信息已经安全修改，请牢记密码</h2>";
		echo "<p>题号：" . $id . "</p>";
		echo "<p>题目：" . $content . "</p>";
		echo "<p>A：" . $A . "</p>";
		echo "<p>B：" . $B . "</p>";
		echo "<p>C：" . $C . "</p>";
		echo "<p>D：" . $D . "</p>";
		echo "<p>答案：" . $answer . "</p>";
		echo "<p><a href='change.php'>返回，继续修改</p>";
	}

}
?>
</body>
</html>