<?php
require_once("config.php")
?>
<!DOCTYPE html>
<html>
<head>
	<title>user registration | PHP</title>
	<link rel="stylesheet"  type="text/css "href="css/bootstrap.min.css">
</head>
<body >
<div>
<?php
if(isset($_POST['create']))
{
  $Firstname =$_POST['Firstname'];
 $Lastname =$_POST['Lastname'];
 $Email =$_POST['Email'];
// $Phoneno=$_POST['Phoneno'];
$password=$_POST['password'];
$sql ="INSERT INTO users(Firstname, Lastname, Email, password) Values(?,?,?,?)";
$stmtinsert =$db->prepare($sql);
$result =$stmtinsert->execute([$Firstname, $Lastname, $Email, $password]);
if($result)
{
  echo "successfully added";

}else{
  echo "errors";
}
}
?>


</div>

<div>
     <form action="registration.php" method="post"> 
         <div class="container">
         <div class="row">
         <div class="col-sm-3">
             <h2><b>Registration</b></h2>
              <p>Fill up the form  with correct values</p>
<div class="col-sm-3">
      <label for="Firstname"><b> Firstname</b></label>

       <input class="form control" type="text" name="Firstname" required>

        <label name="Lastname"><b> Lastname</b></label>
       <input   class="form control" type="text" name="Lastname" required>

        <label name="Email" ><b>Email</b></label>
        <input  class="form control" type="email" name="Email" required>
 
        <label name="password" ><b>password</b></label>
       <input   class="form control" type="password" name="password" required>
      
       <div class="row-sm-3">
       <div class="row-sm-3">
       <br>
       <br>
        <input  class="btn btn-primary" type="submit"   name="create" value="sign up"  >
          </div>
            </div>

</div>
</form>
</div>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
$(function(){

Swal.fire(
  'registration!',
  ' clicked the button!',
  'success'
)
});
</script>
</body>
</html>