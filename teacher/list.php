
<?php
require_once "./connection.php";
?>

<html>
<head><title>查询全部题目</title></head>
<body>
<center>
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
/*
if($dbconn!=false)
{
echo "Á¬½Ó";
echo "DB·þÎñÆ÷:".$db_server;
echo "ÓÃ»§:".$db_user;
echo "¿ÚÁî:".$db_pass;
echo "SID:".$db_sid;
echo "³É¹¦\n";

if(OCILogOff($dbconn)==true)
{
echo "¹Ø±ÕÁ¬½Ó³É¹¦!";//=ÕâÀïÓÐÎÊÌâ
}
}
else
{
echo "Á¬½ÓÊ§°Ü";
}
 */
// $connect = mysql_connect("localhost", "root", "123456");
$sql = "select * from exam order by id";
$result = mysql_db_query("phone", $sql, $connect);

// $oci_rs = oci_parse($dbconn, $sql);
// oci_execute($oci_rs, OCI_DEFAULT);
while ($row = mysql_fetch_row($result)) {
	echo "<tr bgcolor='pink' align='center'>";
	echo "<td>" . $row[0] . "</td>";
	echo "<td>" . $row[1] . "</td>";
	echo "<td>" . $row[2] . "</td>";
	echo "<td>" . $row[3] . "</td>";
	echo "<td>" . $row[4] . "</td>";
	echo "<td>" . $row[5] . "</td>";
	echo "</tr>";
}

// OCILogOff($dbconn);
mysql_close();

?>