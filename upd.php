<?php
 $conn = new mysqli('localhost','root','','specialguest');
include_once 'record.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE specialform set clgid='" . $_POST['clgid'] . "' , fname='" . $_POST['fname'] . "', mname='" . $_POST['mname'] . "', sname='" . $_POST['sname'] . "' , rno='" . $_POST['rno'] . "' , email='" . $_POST['email'] . "' , pno='" . $_POST['pno'] . "' WHERE fname='" . $_POST['fname'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM specialform WHERE fname='" . $_GET['fname'] . "'");
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
    <title>RECORD KEEPING</title>
    <style>
		marquee{background-color:#71e7eb;color:white;}
		body{background-color:blue;font-color:blue;}
		h2{background-color:#47b7bf;}
		
	</style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="sweetalert.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head> 
    </head>
    <body>
<div class="w-50 m-auto">
      <div class="container"> 
    <h3>UPDATION FORM:</h3>
  <form action="" onsubmit= "return validation()" method="post" class="was-validated">
  <div><?php if(isset($message)) { echo $message; } ?>
</div>
<div class ="form-group">
      <label for="clgid">College ID</label>
   <input type="text" class="form-control" id="clgid" placeholder="Enter Your College ID" name="clgid" value="<?php echo $row['clgid']; ?>"  required>
   <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill Your College id.</div>
      </div>

    <div class ="form-group">
    <label for="fname">First Name:</label>
 <input type="text" class="form-control" id="fname" placeholder="Enter Your First Name" name="fname" value="<?php echo $row['fname']; ?>" required>
 <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill Your First Name.</div>
    </div>

 <div class ="form-group">
    <label for="mname">Middle Name:</label>
    <input type="text" class="form-control" id="mname" placeholder="Enter Your Middle Name" name="mname" value="<?php echo $row['mname']; ?>" required>
    <div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill Your Middle Name.</div>
       </div>
 <div class ="form-group">
    <label for="sname">Surname:</label>
    <input type="text" class="form-control" id="sname" placeholder="Enter Your SurName" name="sname" value="<?php echo $row['sname']; ?>" required>
    <div class="valid-feedback">Valid.</div>
         <div class="invalid-feedback">Please fill Your SurName.</div>
       </div>
    <br>
    <br>
    <div class ="form-group">
        <label for="rno">Roll Number:</label>
        <input type="text" class="form-control" id="rno" placeholder="Enter Your Roll Number" name="rno" value="<?php echo $row['rno']; ?>" required>
        <div class="valid-feedback">Valid.</div>
             <div class="invalid-feedback">Please fill Your Roll Number.</div>
           </div>
    <br>
    <br>
    <div class ="form-group">
        <label for="email">Email ID:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter Your Email Address" name="email" value="<?php echo $row['email']; ?>" required>
        <div class="valid-feedback">Valid.</div>
             <div class="invalid-feedback">Please fill Your Email Address.</div>
           </div>
    
    <br>
    <div class ="form-group">
        <label for="pno">Phone Number:</label>
        <input type="text" class="form-control" id="pno" placeholder="Enter Your Phone Number" name="pno" value="<?php echo $row['pno']; ?>" required>
        <div class="valid-feedback">Valid.</div>
             <div class="invalid-feedback">Please fill Your Phone Number.</div>
           </div>
    <br>
    <br>
    <button type="submit" value="Submit" class="btn btn-primary">UPDATE</button>
    </form>
</div>
</body>    
</html>