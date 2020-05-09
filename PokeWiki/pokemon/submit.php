<?php
      session_start();
      error_reporting(0);
      require 'db.php';
     $messages = array();
?>      
<?php 

      if(isset($_POST['submit'])){
            
            if(empty($_POST['r'])){
                 array_push($messages, "Please select an answer first.");
            }
            else{
                  $a_query = "SELECT * FROM questions WHERE question_id = '".$_POST['id']."' ";
                  $a_result = $mysqli->query($a_query);
                  $a_right = $a_result->fetch_assoc();
                  $answerr = $a_right['right_answer'];

                  if($_POST['r'] == $answerr){ 

                        $sql = "UPDATE user SET poke_coin = poke_coin + 50 WHERE username = '".$_SESSION["User"]."'";
                        if ($mysqli->query($sql) === TRUE)
                              $mysqli->close(); 
                        header("location:index.php?go=quiz");
                  }
                  
                  else{
                        array_push($messages, "Wrong Answer. No Pokécoin for you!");
                  }
                  
                  
            }
      
      }

      
?>