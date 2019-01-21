<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "funed";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 if(isset($_POST["SubmitStudent"]))
{  echo $_POST["Name"];
 	InsertStudent($conn,$_POST["Name"],$_POST["Roll"],2,'c',0);

 
}

$StudentName = "f";
$StudentClass = 2;
$StudentRollNo = 266;
$StudentSection = 2;
$StudentIsdltd = 0;
 $da = date('j-M-Y');
    $ti  = date('h:i:s A'); 
 	
Function InsertStudent($conn,$StudentName,$StudentRollNo,$StudentClass,$StudentSection,$StudentIsdltd)	

{ echo "in function";
	$sql = "CALL InsertStudent('$StudentName','$StudentRollNo','$StudentClass','$StudentSection','$StudentIsdltd')";
	echo "in query";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
	 
}
	 
  
$conn->close();
?>
<!Doctype HTML>
<html>
<head>
<title></title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<style>
body{
background-image:url('img/login3.png');
}
.back{
background:rgb(249, 168, 168,0.5);
width:90%;
border:4px solid white;
padding:30px;
}
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12"><br><br></div>
		<div class="col-sm-1"></div>
		<div class="col-sm-5 back">
		<form method="post">
		<h2>Insert Student</h2>
		<!--<label for="exampleInputEmail1">Email address</label>-->
		<div class="form-group"><!-- suid is student user id with the help of which student will log in for eg. 2B44 in this 2 is class B is section and 44 is roll no.-->
		<input type="text" class="form-control" name="suid" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Student Login Id Autogenerate Disabled and Unique for all students">
		</div>
		<div class="form-group">
		<input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Student Name">
		</div>
		<div class="form-group">
		<input type="text" class="form-control" name="roll" aria-describedby="emailHelp" placeholder="Roll No.">
		</div>
		<div class="form-group">
		<input type="text" class="form-control" name="fname" aria-describedby="emailHelp" placeholder="Father's Name">
		</div>
		<div class="form-group">
		<input type="text" class="form-control" name="mname" aria-describedby="emailHelp" placeholder="Mother's Name">
		</div>
		<div class="form-group">
		<label style="color:white; font-weight:bold; "for="exampleInputEmail1">Date of Birth</label>
		<input type="date" class="form-control" name="DOB" aria-describedby="emailHelp" placeholder="date">
		</div>
		<div class="form-group">
		<input type="text" class="form-control" name="smob" aria-describedby="emailHelp" placeholder="Mobile No.">
		</div>
		<div class="form-group">
		<select class="form-control" name="sgender">
		<option disabled>Gender</option>
		<option>Male</option>
		<option>Female</option>
		</select>
		</div>
		<div class="form-group" name="class">
		<select class="form-control">
		<option disabled>Class</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		</select>
		</div>
		<div class="form-group" name="section">
		<select class="form-control">
		<option disabled>Section</option>
		<option>A</option>
		<option>B</option>
		<option>C</option>
		<option>D</option>
		<option>E</option>
		<option>F</option>
		<option>G</option>
		<option>H</option>
		</select>
		</div>
		<div class="form-group">
		<input type="file" class="form-control" name="spic" aria-describedby="emailHelp" placeholder="Student Name">
		</div>
		<div class="form-group">
		<input type="password" class="form-control" name="spass" id="exampleInputPassword1" placeholder="Password">
		</div>
		<button type="submit" name ="SubmitStudent" class="btn btn-primary">Insert Student</button>
		</form>
		</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-5 back">
		<form>
		<h2>Insert Teacher</h2>
		<!--<label for="exampleInputEmail1">Email address</label>-->
		<div class="form-group">
		<input type="text" class="form-control" name="tuid" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Teacher Login Id Autogenerate Disabled and Unique for all students">
		</div>
		<div class="form-group">
		<input type="text" class="form-control" name="tname" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
		</div>
		<div class="form-group">
		<input type="text" class="form-control" name="temail" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
		</div>
		<div class="form-group">
		<input type="text" class="form-control" name="tmob" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile No.">
		</div>
		<div class="form-group">
		<select class="form-control" name="tgender">
		<option disabled>Gender</option>
		<option>Male</option>
		<option>Female</option>
		</select>
		</div>
		<div class="form-group">
		<input type="file" class="form-control" name="tpic" aria-describedby="emailHelp" placeholder="Student Name">
		</div>
		<div class="form-group">
		<input type="password" class="form-control" name="tpass" id="exampleInputPassword1" placeholder="Password">
		</div>
		<button type="submit" name="SubmitTeacher" class="btn btn-primary">Insert Teacher</button>
		</form>
		</div>
	</div>
</div>
<br>
<br>
</body>
</html>