<?php
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];

    $error="";
    $success="";
    $msg="";

    $sql="SELECT * from login where uname='$uname'";
    $conn=mysqli_connect("localhost","root","");
    if(!$conn){
        $error="error connection to database";

    }
    mysqli_select_db($conn,"sim3d");
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result);
    if($rows){
        if($rows["pass"]==$pass){
                $error="";
                $success=header("Location: panel.php");
                $msg="logout";
        }else{
            $error="<div class='col-sm-6 mb-4'>
            <div class='rounded bg-white p-4 shadow-primary' id='boxlog'>
              
                <h1 align='center' style='font-size:7vw'>OOPS!</h1>
                <p align='center'>Invalid Username or Passowrd<p>
            </div>
        </div>";
            $success="";
            $msg="<h5 align='center'>Try again</h5>";
        }
    }else{
        $error="Invalid Username or Password ";
        $success="";
        $msg="Try again";
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS</title>
  <!-- Title Icon -->
  <link rel="icon" href="../title.png" type="image/icon type">
  <!--css stylesheet -->  
  <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="test">
  <h3 class="error"><?php echo $error; ?></h3><h3 class="success"><?php echo $success?></h3>
  <a href="login.php"><?php echo $msg; ?></a>
</div>
</body>
</html>