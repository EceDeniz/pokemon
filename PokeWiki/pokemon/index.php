<?php
	session_start();
	error_reporting(0);
	require 'db.php';
		$user_query = "SELECT * FROM user WHERE username = '".$_SESSION['User']."'";
		$user_result = $mysqli->query($user_query);
		$user_row = $user_result->fetch_assoc();
		$poke_coin = $user_row['poke_coin'];		   
?>

<!DOCTYPE html>
<html>
<head>
	<title>PokéWiki</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="page.js"></script>
</head>
<body>
	<!--"top" part is for the navigation bars(PokéWiki with symbol, Quiz, Collection, Combat) + Status Bar(PokéCoin) + login/logout with symbol-->
	<div class="top">
		<ul>
			<li><a class="active" href="index.php"><img style="vertical-align: middle; width: 30px; height: 30px;" src="img/pokeball.png">	PokéWIKI</a></li>
			<li><a href='index.php?go=quiz'><span>Quiz</span></a></li>
			<li><a href='index.php?go=collection'><span>Collection</span></a></li>
			<?php if($_SESSION['User'] == $_SESSION['UName']){echo "<li><a href='index.php?go=register'><span>Register</span></a></li>";}?>
			<?php if($_SESSION['User'] == $_SESSION['UName']){echo "<li><a href='index.php?go=login'><span><img style='vertical-align: middle; width: 30px; height: 30px;' src='img/login.png'> Login</span></a></li>";}?>
			<?php if($_SESSION['User'] != $_SESSION['UName']){echo "<li><a href='index.php?go=shop'><span>Shop</span></a></li>";}?>
			<?php if($_SESSION['User'] != $_SESSION['UName']){echo "<li><a href='index.php?go=logout'><span>Logout</span></a></li>";}?>
			<?php if($_SESSION['User'] != $_SESSION['UName']){echo "<li style='float: right;'><a href= #><img style='vertical-align: middle; width: 30px; height: 30px;' src='img/coin.png'> PokéCoin:$poke_coin</a></li>";}?>
		</ul>
	</div>
	
	<div class="pagemid">
		
		<?php 
		$a = @$_GET["go"];

		switch($a){
			case "homepage":
			include("homepage.php");
			break;
			case "shop":
			include("shop.php");
			break;
			case "register":
			include("register.php");
			break;
			case "logout":
			include("logout.php");
			break;
			case "collection":
			include("collection.php");
			break;
			case "quiz":
			include("quiz.php");
			break;
			case "login":
			include("login.php");
			break;
			default:
			include("homepage.php");
			break;

		}
		?>
	</div>
</body>
</html>