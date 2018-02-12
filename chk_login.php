<?PHP 
	session_start();

	include "config.inc.php";
?>

<?PHP


 $sql = "select * from tbl_customer where  cus_username='$_POST[cus_username]' and cus_password='$_POST[cus_password]'"; 
$query = $conn->query($sql);
$objResult = $query->fetch_assoc();

	if(!$objResult)
	{
	?>
	<script language="javascript">
alert("NO PASSWORD");
</script>
<meta http-equiv='refresh'content='0;url=index.php'>
<?PHP

	}
	else
	{
	
	    $_SESSION["cus_id"] = $objResult["cus_id"];
		$_SESSION["cus_name"] = $objResult["cus_name"];
		$_SESSION["cus_username"] = $objResult["cus_username"];
	
	
	
	    $_SESSION["txtuser"]=true;
			
			session_write_close();
			
			
		
?>
<meta http-equiv='refresh'content='0;url=index.php'>
<?PHP }?>
