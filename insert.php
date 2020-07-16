<?php 
if (isset($_POST['Submit'])) {
	



$Roll=$_POST['Roll'];
$Name=$_POST['Name'];
$Phone_Number=$_POST['Phone_Number'];
$Address =$_POST['Address'];
$Class=$_POST['Class'];
$GPA=$_POST['GPA']; 



$sql = "INSERT INTO `student`(`Roll`, `Name`, `Phone_Number`, `Address`, `Class`, `GPA`) VALUES('$Roll','$Name','$Phone_Number','$Address','$Class','$GPA')";
$conn =  mysqli_connect("localhost","root","","sdp1");
mysqli_query($conn,$sql);






header('Location: student.php');

}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Insert Student Record</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
      <script type="text/javascript" src="bootstrap.min.js"></script>
</head>


</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<title>School Management Website</title>
	<link rel="stylesheet" type="text/css" href="../css/nis.css">
</style>	

</head>
<body>
	<div class="wrapper">
		<nav>
			<img src="loo.jpg" class ="img" alt="logo">	
			 <ul>
			 <li><a href="../Main Page/main.php"class="btn btn-success">HOME</a></li>
			 <li><a href="../St_Data/student.php" class="btn btn-success">Student Panel</a></li>
			 <li><a href="../Teacher_Db/teacher.php"class="btn btn-success">Teacher Panel</a></li>
			 <li><a href="../Notice/Notice_index.php"class="btn btn-success">Notice_Board</a></li>
			 <li><a href="logout.php" class="btn btn-light" >Sign out</a></li>

			 </ul>		
		</nav>
		<div class="section"></div>
		<body>
	<form method="POST" class="form-control"align="center"style="background-color: initial; color: white;">
	Name	<input type="Text" name="Name" class="col-sm-4"><br>
	Roll:	<input type="Number" name="Roll" class="col-sm-4"><br>
	Phone	<input type="Number" name="Phone_Number" class="col-sm-4"><br>
	Address	<input type="Text" name="Address" class="col-sm-4"><br>
	Class	<input type="Number" name="Class" class="col-sm-4"><br>
	GPA		<input type="Number" name="GPA"class="col-sm-4" step="any"><br><br>
		<input type="Submit" name="Submit" value="Submit" class="btn btn-success btn-bg"><br>
	</form>

<br><br><br><br><br><br>
	<FOOTER>
		<p>Copyright &copy; 20202020220202020202020202020202020 pura dunia;Viper </p>
	</FOOTER></body>
</html>