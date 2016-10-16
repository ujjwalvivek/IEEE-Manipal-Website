<?php
$on=mysql_connect("localhost","root","");
mysql_select_db("IEEE",$on);
if(isset($_REQUEST['submitinfo']))
{
  $name=$_REQUEST['#name'];
  $email=$_REQUEST['#email'];
  $regnum=$_REQUEST['#regnum'];
  $ph=$_REQUEST['#phnum'];
  $a="";
  foreach ($_REQUEST['r'] as $x) {
  $aa=$x;
  $a=$a." ".$x;
  }
  $ins="insert into reg values('".NULL."','".$name."','".$email."','".$a."','".$regnum."','".$ph."')";
mysql_query($ins);
header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
          
  <script type="text/javascript" href="picker.date.js"></script>
  <script>
     $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  </script>
    <title>
	Registeration 
	</title>
</head>
<body>
<div class="row">
<h2><center>IEEE SBM</center></h2>
    <form class="col s12" name="form" method="post">
      <div class="row">
      <div class="input-field col s2"></div>
      <div class="input-field col s8">
          <input id="name" type="text" class="validate" required>
          <label for="Name" >Name</label>
        </div>
      </div>

      <div class="row">
      <div class="input-field col s2"></div>
      <div class="input-field col s8">
          <input id="email" type="email" class="validate" required>
          <label for="email" >e-mail</label>
        </div>
      </div>

		<div class="row">
		<div class="col s1"></div>
		<div class="col s1" style="margin-top:15px">EVENTS  :  </div>
		<div class="col s4">
      	 <p>
      	 <input type="checkbox" name="r[]" id="test5" value="blah blah" />
     	 <label for="test5">blah blah</label>
   		 </p><br>
   		 <p>
      	 <input type="checkbox" name="r[]" id="test6" value="blah" />
     	 <label for="test6">blah blah</label>
   		 </p><br>
   		 <p>
      	 <input type="checkbox" name="r[]" id="test6" value="bhahh" />
     	 <label for="test6">blah blah</label>
   		 </p>
   		 </div>
   		 
   		 <div class="col s6">
   		 <div class="input-field col s6">
          <input id="regnum" type="text" class="validate" style="margin-right:40px">
          <label for="regnum">Registeration Number</label>
        </div>
        
   		 </div>
   		 
   		 <div class="input-field col s3" style="margin-left:10px">DOB
    <input type="date" class="datepicker">
    </div>
 </div>
 <div class="col s2"></div>
 <div class="col s4">
   		 <div class="input-field col s6">
          <input id="phnum" type="text" class="validate" style="margin-right:40px">
          <label for="phone_num">Phone Number</label>
        </div>
      </div>
    <div class="col s3" style="margin-top:24px;margin-left:95px"><button name="submitinfo" id="submitinfo" class="waves-effect waves-light btn">Submit</button></div>
    </form>
  </div>
        
</body>
</html>
