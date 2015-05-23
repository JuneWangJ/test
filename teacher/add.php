
<html>
<head>
	<title>输入结果</title>
</head>
<body>


<?php

require_once "connection.php";
$id = $_GET["id"];
$content = $_GET["content"];
if (trim($id) == "" || trim($content) == "") {
	echo "对不起，您的题号和题目必须输入";
	echo "<p><a href='add_form.html'>返回，重新填写</p>";
} else {
	$A = $_GET["A"];
	$B = $_GET["B"];
	$C = $_GET["C"];
	$D = $_GET["D"];
	$answer = $_GET["answer"];
	$sql = "INSERT INTO exam VALUES('" . $id. "','" . $content . "','" . $A. "','" . $B . "','" . $C . "','" . $D . "','" . $answer . "')";
	if (!mysql_db_query("phone", $sql, $connect)) {
		die('Error: ' . mysql_error());
		mysql_close($connect);
		echo "保存发生错误，请重新填写";
		echo "<p><a href='add_form.html'>返回，重新填写</p>";

	} else {
		mysql_close($connect);
		echo "<h2 align='center'>您的题目已加入数据库</h2>";
		echo "<p>题号：" . $id . "</p>";
		echo "<p>题目：" . $content . "</p>";
		echo "<p>A：" . $A . "</p>";
		echo "<p>B：" . $B . "</p>";
		echo "<p>C：" . $C . "</p>";
		echo "<p>D：" . $D . "</p>";
		echo "<p>答案：" . $answer . "</p>";
		echo "<p><a href='add_form.html'>返回，继续添加</p>";
	}

}
?>
</body>
</html>