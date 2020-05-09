<?php
      session_start();
      error_reporting(0);
      require 'db.php';
      include'submit.php';
    
      if($_SESSION['User'] == $_SESSION['UName']){
            echo '<h1 style="width:50%; text-align:center; margin-left:auto; margin-right:auto; margin-top:10%;">Please Login First<br><img style="margin:20px; width:50px; height:50px;" src="img/login.png"></h1>
            <img style="z-index: -1; position: fixed; bottom: 0; left: 0; max-width: 50%;" src="img/pika.png">';
            exit();
      }
      	$query = "SELECT * FROM questions ORDER BY RAND()";
        $result = $mysqli->query($query);
        $row = $result->fetch_assoc();
        $question_id = $row["question_id"];
        $question = $row["question"];
        $a = $row["answer1"];
        $b = $row["answer2"];
        $c = $row["answer3"];
        $d = $row["answer4"];
        $right_answer = $row["right_answer"];
?>      

<!DOCTYPE html>
<html>
	<head>
		<title>Quiz</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <div class="bg"></div>
    <?php include('message.php'); ?>
		
		<header id="quizUser">
            <h2>
                Welcome  <?php if(!empty($_SESSION['User'])){echo $_SESSION['User'] ;}?> 
            </h2>
            <p>Answer the questions to win Pokécoins!</p>
        </header>
		<div id="quizBox">
      <form action = "index.php?go=quiz" method="post" >
				<?php echo "<p id='quizQuestion'>$question</p>" ?><br> 
				<input type=radio name=r value="<?php echo $a; ?>"> <?php echo $a; ?>
				<input type=radio name=r value="<?php echo $b; ?>"> <?php echo $b; ?>
				<input type=radio name=r value="<?php echo $c; ?>"> <?php echo $c; ?>
				<input type=radio name=r value="<?php echo $d; ?>"> <?php echo $d; ?>
				<input type=hidden name=id value="<?php echo $question_id; ?>">
				<br>
				<input class=button id="quizButton" type=submit value=Submit name=submit> 
			</form>
		</div>
    <div id="quizImg">
      <img style="float: right; width: 100%;" src="img/quiz.png">
    </div>
	</body>
</html>