<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <div class="container">
        <div class=" box form-box">
            <?php
             
             include("config.php");
             if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['username']);
                $password = mysqli_real_escape_string($con,$_POST['password']);
             
                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty ($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                    <p>Wrong username or password</p>
                    </div> <br>";
                    echo "<a href='indexxx.php'><button class='btn'>Go Back</button>";
                }
                if (isset($_SESSION['valid'])){
                    header("Location: home.php");
            }
        } else{
            
            ?>
            <header>
                Login
            </header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Email-Id</label>
                    <input type="text" name="username" id="username" required/>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required/>
                </div>
                <div class="field ">
                    
                    <input type="submit" class="btn"  name="submit" value="login" required/>
                </div>
                <div class="links">
                    Don't have account? <a href="register.php">Sign Up</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>
