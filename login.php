<?php 
	if (isset($_GET['username_param']))
	{
		$username_param = $_GET['username_param'];
		echo "<script type='text/javascript'>alert('Wrong username-password combination');</script>";							
	}
	else if(isset($_GET['reg_success']))
	{
		$username_param = $_GET['reg_success'];

		echo "<script type='text/javascript'>alert('Registarion Successful!');</script>";
	}                                 //If the username-password combination is wrong, the user is redirected to the login page.
	else  						      // This method saves the username inserted in the respective textbox, so that the user will not	
	{								  // need to retype it if it was correct and only the password was wrong.
		$username_param = '';
	}	
?>

<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
		
			
		Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
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
		
		<h2>Log In</h2></<br>
			<br>
			<br>
		
		<form action = "authentication.php" method = "post" class="container">
			<label> Username </label>
			<input type = "text" value = "<?php echo $username_param;?>" name = "username_field" required><br>
			
			
			
			<label> Password </label>
			<input type = "password" name = "password_field" required><br>
			
			<button type = "submit"> Submit</button>
		</form>
		
		Create an account here:
		<a href = "register.php">
			Click here to register.<br> <!-- converts this in clickable link format. If clicked, the user gets redirected to the register form.-->

		</a>
		</center>	
	</body>
</html>