<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/sign.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin|Sign In</title>  
    <!-- Title Icon -->
   <link rel="icon" href="../title.png" type="image/icon type">
</head>
<body>
<section style="height: 100vh;">
    <div style="background-image: url(images/arka.jpg); background-attachment: fixed; background-size: cover; width: 100%; height: 100vh; position: relative;">
    <div class="baslik">
    <br><br>
    <br><br>

        <img id="logo" src="../images/png2.png">
  

    </div>
    <section>
    <form method="POST" action="admin.php">
        <div class="arkalogin">
            <div class="loginbaslik">Admin Login</div>
            <hr style="border: 1px solid #ccc;">
            <input class="giris" type="text" name="uname" placeholder="User" required>
            <input class="giris" type="password" name="pass" placeholder="••••••••" required>
            <input class="butonlogin" type="submit" name="submit" value="LogIn">
        </div>
    </form>
    </section><br>
</section>



</body>
</html>