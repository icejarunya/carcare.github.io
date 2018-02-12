<?PHP include"header.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: large}
-->
</style>
</head>

<body>
<br />
<br />

<div class="container">
					
<div class="panel panel-default">
  <div class="panel-body">
   <p>&nbsp;    </p>
    <div align="center" class="style1">สมัครสมาชิก    </div>
    <form id="form1" name="form1" method="post" action="register_q.php">
    
   
    <p>&nbsp;    </p>
	
	
	<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-8">เลขประจำตัวประชาชน
         <input  name="cus_idcard" type="text" class="form-control" id="cus_idcard" maxlength="13" placeholder="เลขประจำตัวประชาชน" required="required">
     </div> 
</div>



<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-8">ชื่อ-สกุล
         <input type="text"  name="cus_name" class="form-control" id="cus_name" placeholder="ชื่อ-สกุล" required="required">
	</div> 
</div>

<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-8">เบอร์โทรศัพท์
         <input  name="cus_tel" type="text" class="form-control" id="cus_tel" maxlength="10" placeholder="เบอร์โทรศัพท์" required="required">
	</div> 
</div>

<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-8">ที่อยู่
         <input type="text"  name="cus_address" class="form-control" id="cus_address" placeholder="ที่อยู่" required="required">
	</div> 
</div>
<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-8">อีเมล์
         <input type="email"  name="cus_email" class="form-control" id="cus_email" placeholder="อีเมล์" required="required">
	</div> 
</div>
<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-8">Username
         <input type="text"  name="cus_username" class="form-control" id="cus_username" placeholder="Username" required="required">
	</div> 
</div>

<div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-8">Password
         <input type="password"  name="cus_password" class="form-control" id="cus_password" placeholder="Password" required="required">
	<p> </p>
	  
	  

   <label>
          <input type="submit" name="Submit"  class="btn btn-success"  value="ตกลง">
        </label>&nbsp; 
        <input type="submit" name="Submit2" class="btn btn-danger" value="ยกเลิก">
      </form>
      <p>
      <p>&nbsp;      </p>
	   </form>

	
	</div> 
</div>

  
	   
    </div> 
</div>
  </div>
  </div>
  </div>
</body>
</html>

<?PHP include"footer.php";?>
