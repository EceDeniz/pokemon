<!DOCTYPE html>
<html>
	<head>
	    <title>Login</title>
	    <style type="text/css">
	    	body{
	    		width: 100%;
	    		height: 100%;
	    		overflow: hidden;
	    		background: linear-gradient(to right, #F0DB44 0%, #654ea3 100%);
	    	}
	    	#container{
	    		display: grid;
	    		grid-template-columns: auto auto auto;
	    		height: 50%;
	    		width: 100%;
	    		justify-content: space-around;
	    	}
	    	#login{
  				margin-top: 45%;
  				width: 100%;
  				height: 40%;
  				border: 2px solid black;
  				border-radius: 20px;
  				background-color: silver;
	    	}
	    	#login ul{
  				list-style-type: none;
  				text-align: center;
  				padding-left: 0;
  				color: white;
  				font-size: 1.2em;
  				letter-spacing: 2px;
  				margin: 20px;
  				
	    	}
	    	#login li{
	    		margin: 20px;
	    	}
	    	#login input{
	    		height: 30px;
	    	}
	    	#login button{
	    		width: 60%;
	    		margin-left: auto;
	    		margin-right: auto;
	    		background-color: #BF0014;
			  	border: none;
			  	border-radius: 10px;
			  	color: white;
			  	padding: 15px 32px;
			  	text-align: center;
			  	text-decoration: none;
			  	font-size: 16px;
			  	cursor: pointer;
	    	}
	    	#container img{
	    		margin: 20px;
	    		height: 700px;
	    		width: auto;

	    	}
	    </style>
	</head>
	<body>
		<div id="container">
			<img src="img/pokemonBackground.jpg"> 
			<div id="login">
				<form action="process.php" method="post">
					<ul>
						<li><label for="userName">Enter Username:</label></li>
						<li><input type="text" id="userName" name="UName" placeholder=" Username"></li>
						<li><label for="password">Enter Password:</label></li>
						<li><input type="password" id="password" name="Password" placeholder=" Password"></li>
						<li><button name="Login">Login</button></li>
					</ul>
				</form>
			</div>
			<img src="img/pokemonBackground2.jpg">
		</div>
	</body>
</html>