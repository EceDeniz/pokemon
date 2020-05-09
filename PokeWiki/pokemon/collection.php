<?php
	session_start();
	error_reporting(0);
	require 'db.php';
	if($_SESSION['User'] == $_SESSION['UName']){
        echo '<h1 style="width:50%; text-align:center; margin-left:auto; margin-right:auto; margin-top:10%;">Please Login First<br><img style="margin:20px; width:50px; height:50px;" src="img/login.png"></h1><img style="z-index: -1; position: fixed; bottom: 0; left: 0; max-width: 50%;" src="img/pika2.png">';
        exit();
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Collection</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="bg"></div>
		<div id="collectionImg">
			<img style="width: 100%;" src="img/logo.png">
		</div>
		<?php
			echo "<div class='gridContainer'>";

			$query = "SELECT * FROM collection";
			if ($result = $mysqli->query($query)) {
				while ($row = $result->fetch_assoc()) {
					
					$name = $row['card_name'];
					
					
					$user_query = "SELECT * FROM user WHERE username = '".$_SESSION['User']."'";
					$user_result = $mysqli->query($user_query);
					$user_row = $user_result->fetch_assoc();
					$user_card = $user_row[$name];
					if($user_card == 1){
						$img = $row['card'];
						$name = explode('_', $name)[0];
						echo "<div class='card'>";
						echo "<label id='cardName'>".strtoupper($name)." CARD</label>";
						echo '<img src="data:image/jpeg;base64,'.base64_encode( $img ).'"/>';
						echo "</div>";
					}
				}
			}
			echo "</div>";
		?>

		

	</body>
</html>