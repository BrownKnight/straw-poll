<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Example</title>
</head>
<body>
    
    
    
        <?php
        
        //Get username and password from the username and password text fields.
        $userName = $_POST['username'];
        $userPassword = $_POST['userpassword'];
        
        //I display a simple message
        echo "Your password and username have been saved for this session."."</br>";

        //A faster way to store a message with more than one line and variable.
        $str = <<<EOD
        The username that you inserted is 
        <b>$userName</b> , and the password 
        is <b>$userPassword</b>.</br>
EOD;
        if(!empty($_POST['show'])){
            echo $str;
        } else {
            echo "Since the checkbox was left empty , your data will not be displayed";
        }
        
        //Now let's store the username and password as session info
        $_SESSION['s_username'] = $userName;
        $_SESSION['s_password'] = $userPassword;
    
       // header("Location:logIn.php");
    
    
        ?>
    
    <div>
        
        <br>
        
        <div> 
           <!-- Please , now log in with your information. <input type="button" name="login" value="Go to Log in page" onclick=" window.location.href = 'logIn.php'; "</input> 
		   -->
		   Please , now log in with your information. <input type="button" name="login" value="Go to Log in page" onclick=" <?php header("Location:logIn.php") ?> "</input> 
	
			
			
        </div>
    
    </div>
</body>
</html>