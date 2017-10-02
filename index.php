<?php
    
    session_start();

?>

<!DOCTYPE html>

<html>
<head>
	<title> Example </title>
</head>
<body>
 
  <?php
    
        $u_name = $_POST["r_username"];
        $u_password = $_POST["r_userpassword"];

        if($u_name == $_SESSION["s_username"] && $u_password == $_SESSION["s_password"]){

            echo "Log in was successful!";

        } else {
            
    ?>
        
        <script>
            
            alert("Wrong username or password , redirecting to log in page");
            window.location.href = "logIn.php";
    
        </script>
    
    <?php
            
        }

    ?>

</body>
</html>