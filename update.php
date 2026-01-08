<?php
include_once 'classes/Customer.php';

try {

    if(!empty($_POST)){

        // retrieve data from Form 
        $username = $_POST['username'];
        $oldPassword = $_POST['password'];
        $newPassword = $_POST['new_password'];
        $confirmNewPassword = $_POST['confirm_new_password'];

        // create customer object
        $customer = new Customer();

        // compare new password and confirm new password
        if($newPassword !== $confirmNewPassword){
            throw new Exception("please match the new password");

            
        }else{
            // if match update password
            if( $customer->updatePassword($username, $oldPassword, $newPassword)){
                
                // password updated successfully
                header("Location: login.php");
                exit;
            } 
        }
    }


}catch(Exception $e){
    $error = $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<style>

    body {
        background-image: url('./assets/pictures/loginImage.jpg');
        background-size: cover;
        background-position: center;
        height: 100vh;
    }
    .logo-container img{
        margin-top: 50px;
        align-items: center;
        height: 150px;
        padding: 20px;
        border-radius: 50%;
    }
    .login-form {
        height: 100vh;
        margin: auto;
        padding-top: 20%;
        padding-left:5%;
        padding-right: 5%;
        width: 400px;
        border-radius: 10px;
   
    }
    .login-form h2{
    font-family: Arial, sans-serif;
    font-size: 28px;
    font-weight: bold;
    text-align: start;
    margin-bottom: 20px;
    color: #64230d;
    }
    .login-input {
    padding: 10px;
    margin: 10px 0;
    border: none;
    border-bottom: 2px solid #64230d;
    width: 100%;
    display: block;
    margin-bottom: 50px;
    }
    .login-button {
        width: 45%;
        padding: 10px;
        margin: 10px 5px;
        border: 2px solid #64230d; ;
        border-radius: 1vw;
        color: #64230d;;
        cursor: pointer;
    }
    .login-button:hover {
        background-color:#64230d;
        color: white;
        transition: 0.5s;
    }
    
    .login-page {
        background-color: rgba(255, 255, 255);
        position: relative;
        width: 30%;
        margin: 0%;
        padding: 0%;
        text-align: center;
    }

    input::placeholder{
        color:#64230d;

    }

    .back-button {
        background: linear-gradient(currentColor 0 0) 
        bottom left/
        var(--underline-width, 0%) 0.1em
        no-repeat;
        font-size: larger;
        transition: 0.5s;   
        position: absolute;
        left: 20px;
        top: 20px;  
        color:black;
    }

    .back-button:hover {
         color: #FF802C !important;
        --underline-width: 100%;
    }
    .error-box{
        padding: 12px 15px;
        margin:auto;
        margin-bottom: 20px;
        background-color: #ffdddd;
        border: 1px solid #ff8888;
        color: #a10000;
        border-radius: 6px;
        font-family: Arial, sans-serif;
        width: fit-content;
    }

</style>


<body> 
    <div  class="login-page">
        <a class="back-button" href="index.php">back</a>

        <div class="login-form">
        <?php if(isset($error)): ?>
            <div class="error-box show">
            <?php echo $error; ?>
            </div>
        <?php endif; ?>

    

        <h2>Log In</h2>
            <form action="" method="POST">
                <input class="login-input" type="text" id="username" name="username"  placeholder="Enter username" >
                <input class="login-input" type="password" id="password" name="password" placeholder="current password" >
                <input class="login-input" type="password" id="new_password" name="new_password" placeholder="new password" >
                <input class="login-input" type="password" id="confirm_new_password" name="confirm_new_password" placeholder="confirm new password" >

            
                <input type="submit" class="login-button" value="Update Password">
            </form>
    </div>
    

</body>
</html>