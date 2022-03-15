<?php
session_start();
?>
<?php

    if(isset($_POST['submit']))
    {
        echo "hii";
        $connection=mysqli_connect('localhost','root','','user');
        $email=$_POST['email'];
        $psw=$_POST['psw'];
        $remail='jshivam572@gmail.com';
        $rpsw='6265211941';
        $t=0;
         if($rpsw==$psw && $remail==$email)
            {
                

                $t=1;
            header("Location: page.php");
            }
        if($t==0)
        { 
                $error="email or password is wrong";
            echo $error;
            
                    header("Location: login.php");
            
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  
</body>
</html>