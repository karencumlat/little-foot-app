<!DOCTYPE html>
<html>
    <head>
        <title>Little Foot | Admin Login</title>
        <meta charset="utf-8" />
        <link href='../CSS/login.css' rel='stylesheet'/>
    </head>
    <body>
        
        <div id="imageCont">
            <a href="../index.php"><img src="../IMGS/LittleFootLogo.png" id="logo"></a>
        </div>

        <div class="name">Admin Login | Little Foot</div>
        
        <div class="login">
            <form method="POST" action="../PHP/admin-login.php">
                <input type="text" placeholder="username" required name="username" minlength="5">
                <input type="password" placeholder="password" required name="password" minlength="6">
                
                <input type="submit" name="submit" class="submit" value="Login">
            </form>
        </div>
        

        <script src='./JS/login.js'></script>
    </body>
</html>