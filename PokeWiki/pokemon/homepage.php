<?php
require("db.php"); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>PokéWiki</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="page.js"></script>
</head>
<body onload="init()">
	
	<div class="page">
		<div id="middle">
			<h1>WELCOME TO POKEWIKI WEBSITE!</h1>
			<p>In this page, you can see information about various Pokémons. With the filters, you can select what to display on the table. Most well-known Pokémons have their own pages, you can click on their names or the icon beside their names to go to them. In the Quiz page, you can win Pokécoins and buy classic Pokécards with them at the Shop to display the cards on your Collection!</p>
			<?php 
                        if(@$_GET['Invalid'] == true)
                        {
                    ?>
                        <?php echo $_GET['Invalid'] ?>                               
                    <?php
                        }
                    ?>

                    <?php 
                        if(@$_GET['Empty'] == true)
                        {
                    ?>
                        <?php echo $_GET['Empty'] ?>                              
                    <?php
                        }
                    ?>
		</div>
		<div id="bottom">
			<input type="text" id="nameInput" onkeyup="searchName()" placeholder="Search for Pokémon names..">
			
			<table id="dataTable">
				<tr>
					<th id="id">ID</th>
					<th id="name">NAME</th>
					<th>
						<select id="type1" onchange="filterType1()">
						  <option  value="TYPE 1">TYPE 1</option>
						  <<?php 
						  	$query = "SELECT DISTINCT type1 FROM attributes";
						  	$result = $mysqli->query($query);
						  	if ($result->num_rows > 0) {
						  		while ($types = $result->fetch_assoc()) {
						  			$type = $types["type1"];
						  			echo "<option value=".$type.">$type</option>";
						  		}
						  	}
						  ?>
						</select>
					</th>
					<th><select id="type2" onchange="filterType2()">
						  <option  value="TYPE 2">TYPE 2</option>
						  <<?php 
						  	$query = "SELECT DISTINCT type2 FROM attributes";
						  	$result = $mysqli->query($query);
						  	if ($result->num_rows > 0) {
						  		while ($types = $result->fetch_assoc()) {
						  			$type = $types["type2"];
						  			echo "<option value=".$type.">$type</option>";
						  		}
						  	}
						  ?>
						</select>
					</th>
					<th>TOTAL</th>
					<th>HP</th>
					<th>ATTACK</th>
					<th>DEFENSE</th>
					<th>SPECIAL ATTACK</th>
					<th>SPECIAL DEFENSE</th>
					<th>SPEED</th>
					<th><select id="generation" onchange="filterGeneration()">
						  <option  value="GENERATION">GENERATION</option>
						  <<?php 
						  	$query = "SELECT DISTINCT generation FROM attributes";
						  	$result = $mysqli->query($query);
						  	if ($result->num_rows > 0) {
						  		while ($generations = $result->fetch_assoc()) {
						  			$generation = $generations["generation"];
						  			echo "<option value=".$generation.">$generation</option>";
						  		}
						  	}
						  ?>
						</select>
					</th>
					<th><select id="legendary" onchange="filterLegendary()">
						  <option  value="LEGENDARY">LEGENDARY</option>
						  <<?php 
						  	$query = "SELECT DISTINCT legendary FROM attributes";
						  	$result = $mysqli->query($query);
						  	if ($result->num_rows > 0) {
						  		while ($options = $result->fetch_assoc()) {
						  			$option = $options["legendary"];
						  			echo "<option value=".$option.">$option</option>";
						  		}
						  	}
						  ?>
						</select>
					</th>
				</tr>
				
			<?php
				$query = "SELECT * FROM attributes";
				if ($result = $mysqli->query($query)) {
					while ($row = $result->fetch_assoc()) {
						$id = $row["id"];
						$name = $row["name"];
						$type1 = $row["type1"];
						$type2 = $row["type2"];
						$total = $row["total"];
						$hp = $row["hp"];
						$attack = $row["attack"];
						$defense = $row["defense"];
						$specialAttack = $row["specialAttack"];
						$specialDefense = $row["specialDefense"];
						$speed = $row["speed"];
						$generation = $row["generation"];
						$legendary = $row["legendary"];

						echo "<tr><td>$id</td><td>$name</td><td>$type1</td><td>$type2</td><td>$total</td><td>$hp</td><td>$attack</td><td>$defense</td><td>$specialAttack</td><td>$specialDefense</td><td>$speed</td><td>$generation</td><td>$legendary</td></tr>";
					}
				}
			?>
			</table>
		</div>
	</div>
</body>
</html>