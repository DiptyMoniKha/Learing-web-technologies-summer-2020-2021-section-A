<?php  
//session is a used to manage information across difference page
session_start();  //to start session.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

</head>
<body >
    <center>
    <?php
    if(isset($_SESSION["id"])){  
        $id= $_SESSION["id"] ;   
        $usertype=$_SESSION["usertype"] ;
        include '../model/userModel.php'; 
        $name=homemodel($id)  ;   
        echo "<h1>Welcome ". $name."! <br></h1>";//"using session from registration.php
    }
    else{
        echo "Login please";
    }
    $style = "";
    if($_SESSION["usertype"]!="admin")
    {
        $style = "style='display:none;'";
    }
    ?>
    </center>
    <div class="dashboard" id="dashboard">
        <a href="./Profile.php" >Profile</a> <br>
        <a href="./ChangePassword.php" >Change Password</a> <br>
        <a href="./Users.php" <?php echo $style;?>>View Users</a> <br>
        <a href="">Logout</a> <br>
    </div>
</body>
</html>
