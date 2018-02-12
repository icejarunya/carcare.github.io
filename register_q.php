<?PHP 

 include "config.inc.php"; // ไฟล์ติดต่อฐานข้อมลู   


 $sql = "INSERT INTO tbl_customer (cus_id, cus_name, cus_tel, cus_address, cus_email, cus_idcard, cus_username, cus_password) VALUES (NULL, '$_POST[cus_name]', '$_POST[cus_tel]', '$_POST[cus_address]', '$_POST[cus_email]', '$_POST[cus_idcard]', '$_POST[cus_username]', '$_POST[cus_password]')"; 
$conn->query($sql); 



echo "<META http-equiv=refresh content=0;url=index.php>";  
?> 
 
 
