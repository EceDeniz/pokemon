<?php include('server.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        #registerBox{
            max-width: 45%;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            border: 2px solid black;
            border-radius: 20px;
            background-color: white;
        }
        .registerInput{
            font-weight: bold;
            margin: 25px;
        }
        #registerBtn{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
  </head>
  <body>
    <div style="width: 100%; text-align: center;">
    	<h2>Register</h2>
    </div>
  	<div id="registerBox">
        <form method="post" action="index.php?go=register">
        	<?php include('errors.php'); ?>
        	<div class="registerInput">
        	  <label>Username:</label>
        	  <input type="text" name="username">
        	</div>
        	<div class="registerInput">
        	  <label>Password:</label>
        	  <input type="password" name="password">
        	</div>
        	<div class="registerInput">
        	  <button type="submit" class="button" id="registerBtn" name="reg_user">Register</button>
        	</div>
        	<p>
        		Already a member? <a href="index.php?go=login">Sign in</a>
        	</p>
        </form>
    </div>

    <img style="position: fixed; bottom: 0; right: 0; height: 90%;  " src="img/register.png">
    
  </body>
</html>