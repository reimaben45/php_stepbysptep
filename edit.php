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
$s=mysqli_query($con,"select * from regist where user='$a'");
$r=mysqli_fetch_row($s);
if(isset($_POST['s']))
{
    $a1=$_POST['fn'];
    $b=$_POST['ag'];
    $c=$_POST['u'];
    $d=$_POST['p'];
    $e=$_POST['ad'];
    $f=$_POST['g'];
    $g=$_POST['c'];
    $result=mysqli_query($con,"update regist set name='$a1',
            age='$b',user='$c',pass='$d',address='$e',
            gender='$f',qual='$g' where user='$a'");
    if($result>0)
    {
        echo "updated";
    }
    else
    {
        echo mysql_error();
    }
}
?>
    
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
         <form method="post">
            <center>
            Name:
            <input type="text" name="fn" value="
                   <?php
                   echo $r[0];
                   ?>
                   ">
            <br>
            Age:
            <input type="text" name="ag" value="
                   <?php
                   echo $r[1];
                   ?>
                   ">
            <br>
            username:
            <input type="text" name="u" value="
                   <?php
                   echo $r[2];
                   ?>
                   ">
            <br>
           password:
            <input type="text" name="p" value="
                   <?php
                   echo $r[3];
                   ?>
                   ">
            <br>
            Address:
            <textarea name="ad">
                      <?php
                       echo $r[4];
                       ?>
                      
            </textarea>
            <br>
            Gender:
            <input type="text" name="g" value="
                       <?php
                       echo $r[5];
                       ?>">
            <br>
            Qualification:
            <input type="text" name="c" value="
                       <?php
                   echo $r[6];
                   ?>
                   ">
                   <br>
            <input type="submit" name="s" value="update">
            </center>
        </form>

    </body>
</html>
