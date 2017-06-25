
<?php
$con=mysqli_connect("localhost","root","","account");
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysqli_select_db($con,"account");
session_start();
$a=$_SESSION['usr'];
//display all details of that user
 $result=mysqli_query($con,"select * from regist where user='$a'");
 $r=mysqli_fetch_row($result);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <a href="uhome.php">HOME &nbsp;</a>
        <a href="logout.php">LOGOUT &nbsp;</a>
        <a href="edit.php">EDIT &nbsp;</a>
        <a href="delete.php">DELETE</a>
        <br>
        <?php
        echo "welcome $r[0]";
        ?>
        <br>
        
    </body>
</html>
