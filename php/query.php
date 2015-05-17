<?php
$connect = mysql_connect("localhost", "root", "123456");
$result = mysql_db_query("multi_choice", "SELECT * FROM total where parent=" . $_GET("id"), $connect);

$str = "[";
$n = mysql_num_rows($result);
$i = 1;
while ($row = mysql_fetch_row($result)) {
	$str = $str . "{\"code\":\"" . $row[0] . "\",\"name\":\"" . $row[1] . "\",\"parent\":\"" . $row[2] . "\"}";
	if ($i != $n) {
		$str = $str . ",";
	}
}
echo $str . "]";
?>