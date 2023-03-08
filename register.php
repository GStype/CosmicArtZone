<?php

if(isset($_GET['error_msg']))
{
	echo "<script type='text/javascript'>alert('". $_GET['error_message']. "');</script>";
}

?>

<html>
	<head>
		<title>Register</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
		<link rel="stylesheet" href="loginStyle.css">
		
		
		Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 form {   
        border: 3px solid #f1f1f1;   
    }   
 input[type=text], input[type=password] {   
        width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
        
     
 .container {   
        padding: 25px;   
        background-color: lightblue;  
    }  
		
    </style>	
	</head>
	<body>
	<center>
		<h2>Register</h2><br>
			<br>
			<br>
		
		<form action = "registration.php" method = "post" class="container"> 
			<label> Username </label>
			<input type = "text" name = "username_field" required><br>					
			
			<label> Password </label>
			<input type = "password" name = "password_field" required><br>

			<label> Confirm Password </label>
			<input type = "password" name = "re_password_field" required><br>
	<label> Email  </label>
			<input type = "text" name = "email_field" required><br>
	<label>Department </label>
			<input type = "text" name = "department_field" required><br>



		<button type = "submit"> Submit</button>
		</form>
		
		<a href = "login.php">
			Click here to log in.<br> <!-- converts this in clickable link format. If clicked, the user gets redirected to the login form.-->
			

	</center>
	</body>


	
</html>