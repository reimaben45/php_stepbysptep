<?php
$con=mysqli_connect("localhost","root","","account");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,"account");
if(isset($_POST['l']))
{
    $a=$_POST['u'];
    $b=$_POST['p'];
    $result=mysqli_query($con,"select * from regist where user='$a' and pass='$b'");
  if(mysqli_num_rows($result)>0)
    {
        echo "loged in";
        //  header("location:uhome.php");
    }
    else
    {
         echo "mysqli_error()";
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>

    </head>
    <body>
        <form method="post">
            Username:
            <input type="text" name="u">
            <br>
            Password:
            <input type="password" name="p">
            <br>
            <input type="submit" name="l" value="Login">
            

        </form>
        <a href="register.php">Not a user? Sign up</a>
    </body>
</html>
