<?
	include("connect.php");
	$add1 = $_POST['order1'];
	$add2 = $_POST['order2'];
	$add3 = $_POST['order3'];
	$add4 = $_POST['order4'];
	$sql = "INSERT INTO `8s`(`Name`, `Menu`, `Type`, `ETC`) ";
	$sql .= " VALUES ('$add1','$add2','$add3','$add4')";
	mysql_query($sql) or die();
?>
<script>
	window.location = "rez8.php";
</script>