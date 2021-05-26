
<?php 
$username = $_POST['username'];
$password = $_POST['password'];


if (isset($_POST['submit'])) 
{
	if(!empty($username ) && !empty($password))
	{
		if($username == "bob" && $password == "123")
		{
			echo "Congrats !!!! $username " ;
		}
		else{
			echo "Please enter a correct username or password";		}   
                                     }
	else{
		echo "please fill all fields";
	}
	}	
if (isset($_POST['reg_user'])) 
{
	$newname = $_POST['newname'];
	$fullname = $_POST['fullname'];
	$email1= $_POST['$email1'];
	$phone= $_POST['$phone'];
	$social= $_POST['$social'];
	$birth= $_POST['$birth'];
	}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
  padding: 15px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
body {
  background-color:grey ;
}
</style>
</head>
<body>
<table style="width:100%"> 
<tr>
<th colspan="2">NEW Registration.</th>
</tr>
<tr>
<td >Full Name :</td>
<td><?php echo $newname; ?></td>
</tr>
<tr>
<td>Username: </td>
<td><?php echo $fullname; ?></td> 
</tr>
<tr>
<td >Email :</td>
<td><?php echo $email1; ?></td>
</tr>
<tr>
<td >Phone:</td>
<td><?php echo $phone;?></td>
</tr>
<tr>
<td >Date Of Birth:</td>
<td><?php echo $birth; ?></td>
</tr>
<tr>
<td >Socia Secuirty Number:</td>
<td><?php echo $social;?></td>
</tr>
</table>
</body>
</html>