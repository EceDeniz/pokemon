<?php
	session_start();
	error_reporting(0);
	require 'db.php';
	include 'buy.php';
	
	if($_SESSION['User'] == $_SESSION['UName']){
        echo '<h1 style="width:50%; text-align:center; margin-left:auto; margin-right:auto; margin-top:10%;">Please Login First<br><img style="margin:20px; width:50px; height:50px;" src="img/login.png"></h1>';
        exit();
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Shop</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="bg"></div>
		<?php include('message.php'); ?>
		<?php
			echo "<div class='gridContainer'>";
			$query = "SELECT * FROM collection";
			if ($result = $mysqli->query($query)) {
				while ($row = $result->fetch_assoc()) {
					$value = $row['card_value'];
					$name = $row['card_name'];
					$user_query = "SELECT * FROM user WHERE username = '".$_SESSION['User']."'";
					$user_result = $mysqli->query($user_query);
					$user_row = $user_result->fetch_assoc();
					$user_card = $user_row[$name];
					$poke_coin = $user_row['poke_coin'];
					if($user_card != 1){
						$img = $row['card'];
						echo "<div class='card'>";
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $img ).'"/>';
		?>
			

			<form action = "index.php?go=shop" method="post" >
				<label class="price"><?php echo "$value <img style='vertical-align: middle; width: 30px; height: 30px;' src='img/coin.png'>" ?></label>
				<input class=button id="buyButton" type=submit value=Buy name=buy >
				<input type=hidden name=cardname value="<?php echo $name; ?>">
				<input type=hidden name=coin value="<?php echo $poke_coin; ?>">
				<input type=hidden name=c_value value="<?php echo $value; ?>">
			</form>
						
		<?php  
				echo "</div>";
				}
			}
			
		}
		echo "</div>";
		?>

		
		
	</body>
</html>