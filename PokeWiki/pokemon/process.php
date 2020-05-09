<?php 
  require('db.php');
  session_start();
  
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:index.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="SELECT * FROM user where username='".$_POST['UName']."' AND password='".$_POST['Password']."'";
            $result=$mysqli->query($query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User'] = $_POST['UName'];
                header("location:index.php");
            }
            else
            {
                header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working.';
    }

?>