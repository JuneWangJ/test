
<html>
<head>
	<title>登录界面</title>
</head>
<body>


<?php

require_once "connection.php";
$name = $_GET["name"];
$passwd = $_GET["passwd"];
// if (trim($name) == "" || trim($passwd) == "") {
// 	echo "对不起，您的用户名和密码必须输入";
// 	echo "<p><a href='login.html'>返回，重新填写</p>";
// } else {
	require_once "connection.php";
	$sql = "select * from phone.teacher where name = '$name' and passwd = '$passwd';";
	if ($row = mysql_fetch_row(mysql_query($sql, $connect))) {
		// echo $row[0];
		mysql_close($connect);
		// session_start();
		// $_SESSION["name"] = $name;
		 echo "<script>window.location ='index.html';</script>";
	} else {
		mysql_close($connect);
		echo "<p>对不起您输入的密码不正确，请<a href='login.html'>重新输入</a></p>";
	}

// }
?>
</body>
</html>