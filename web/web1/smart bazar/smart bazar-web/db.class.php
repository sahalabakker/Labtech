
<?php
$conn=new mysqli("localhost:3306","root","","labtech");
if($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}
echo "";
class db_operations
{
	function db_write($query)
	{
	$result=mysqli_query($GLOBALS['conn'],$query);
	return $result;
	echo "record added";
	}
	function db_read($query)
	{
	$res=mysqli_query($GLOBALS['conn'],$query);
	if(!$res)
	echo "SELECTquery error";
	else
	{
	return $res;
	}
	}
}
?>