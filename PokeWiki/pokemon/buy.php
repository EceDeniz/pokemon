<?php 
      session_start();
      require 'db.php';
      $messages = array();


      if(isset($_POST['buy'])){
            $card_column = $_POST['cardname'];
            $value = $_POST['c_value'];

            if($value <= $_POST['coin']){

                  $c_sql = "UPDATE user SET poke_coin = poke_coin - $value WHERE username = '".$_SESSION['User']."'";
                  if ($mysqli->query($c_sql) === TRUE)

                  $sql = "UPDATE user SET $card_column = 1 WHERE username = '".$_SESSION['User']."'";
                  if ($mysqli->query($sql) === TRUE)
                        $mysqli->close();
                  
                  header("location:index.php?go=shop");

            }
            else{
                 array_push($messages, "You need more Pokécoin to buy that card!");
            }

           
      }

      
?>