<?php
echo "fuck";
$conn = new mysqli("localhost", "qsong5", "pgrio21234");
if ($conn->connect_error){
	die("Connection failed:".mysql_error());
}
else{
	$sql = "use qsong5_2";
	if ($conn->query($sql) === TRUE){
		$userName = $_POST['user'];
		$password = $_POST['password'];
		$query = "select * from User where userName = '$userName' and password = '$password';";
		$result = $conn->query($query);
		$row = $result->fetch_assoc();
		if($row){
			$userID = $row['userID'];
			$query1 = "select userID from Normal where userID = '$userID';";
			$result1 = $conn->query($query1);
			$row1 = $result1->fetch_assoc();
			if($row1){
				setcookie("userName", $row['userName']);
				setcookie("password", $row['password']);
				header("location: ../user.html");
			}
			else{
				setcookie("userName", $row['userName']);
				setcookie("password", $row['password']);
				header("location: ../admin.html");
			}
		}
		else{
			echo "<script> alert('Wrong userName or password') </script>";
			header('Refresh:0.1; url=../index.html');
		}
	}
	else{
		echo "Error database:".mysql_error();
	}
}
?>
