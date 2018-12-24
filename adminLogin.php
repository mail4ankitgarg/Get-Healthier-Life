<?php include('config.php');?>
<?php
if(isset($_POST['uname'])){
	$userName=$_POST['uname'];
	$psw=$_POST['psw'];

	if(($userName=="" || $userName=="")&&($psw=="")){

		session_start();
		$_SESSION['USERNAME'] = $userName;
		header("Location: ".$baseUrl."appointmentList.php");
	}else{
		//echo '<h4 style="text-align: center;color: #c90d0d;"> Invalid Login Credentials </h4>';
		?>
		<script>
		alert("Invalid Login Credentials!");
		</script>
		<?php
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.center{
	width:100%;
	text-align:center;
}
form {
	border: 5px solid #549F17;
	width: 40%;
	display:inline-block;
}
label{
	text-align: left;
	width: calc(100% - 40px);
	float: left;
	padding: 0px 20px;
}

input[type=text], input[type=password] {
    width: calc(100% - 40px);
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #676767;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border-radius: 4px;
    cursor: pointer;
    width: 50%;
	box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
	Font-weight:bold;
	font-size:16px;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
	width:calc(100% - 32px);
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 768px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
	
	form {
border: 5px solid #549F17;
width: 80%;
}
}
</style>
</head>
<body>
<h2 style="text-align: center;color: #c90d0d;">Admin Login</h2>

<div class="center">
<form action="adminLogin.php" method="post">
  <div class="container">
    <label for="uname"><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>
</form>
</div>
</body>
</html>