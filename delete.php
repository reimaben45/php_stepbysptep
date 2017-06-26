<?php
$con=mysqli_connect("localhost","root","","account");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($con,"account");
session_start();
$a=$_SESSION['usr'];
if(isset($_GET['t']))
{
    $w=$_GET['t'];
    $e=mysqli_query($con,"delete from regist where name='$w'");
    if($e>0)
    {
        echo "deleted";
    }
    else
    {
        echo "couldnt delete";
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
          <a href="uhome.php">HOME &nbsp;</a>
        <a href="logout.php">LOGOUT &nbsp;</a>
        <a href="edit.php">EDIT &nbsp;</a>
        <a href="delete.php">DELETE</a>
        <table border="2">
            <tr>
                <td>name</td>
                <td>age</td>
                <td>user</td>
                <td>pass</td>
                <td>address</td>
                <td>gender</td>
                <td>qual</td>
                <td>choose</td>
            </tr>
            <tr>
                <?php
                 $re=mysqli_query($con,"select * from regist");
                 while($res=mysqli_fetch_row($re))
                 {
                ?>
                <td>
                    <?php
                     echo $res[0];
                    ?>
                </td>
                <td>
                    <?php
                     echo $res[1];
                    ?>
                </td>
                <td>
                    <?php
                     echo $res[2];
                    ?>
                </td>
                <td>
                    <?php
                     echo $res[3];
                    ?>
                </td>
                <td>
                    <?php
                     echo $res[4];
                    ?>
                </td>
                <td>
                    <?php
                     echo $res[5];
                    ?>
                </td>
                <td>
                    <?php
                     echo $res[6];
                    ?>
                </td>
                <td>
                    <a href="delete.php?t=<?php echo $res[0]?>">delete</a>

                </td>
            </tr>
            <?php
                 }
            ?>
        </table>
        <?php
        // put your code here
        ?>

    </body>
</html>
