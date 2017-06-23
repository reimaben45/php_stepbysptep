<?php
mysqli_connect("localhost","root","");
mysql_select_db("account");
//login page using GET
if(isset($_POST['l']))
{
    $a=$_POST['u'];
    $b=$_POST['p'];
    $result=mysql_query("select * from regist where user='$a' and pass='$b'");
    if(mysql_num_rows($result)>0)
    {
        header("location:uhome.php?t=1");
    }
    else
    {
         header("location:login.php?t=1");
    }
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
    <style>
    body
   {
    background-image: url('bgp.jpg');
    background-repeat: no-repeat;
    background-position: right;
   }
   </style>
    </head>
    <body>
        <form method="get">
            Username:
            <input type="text" name="u" value="abc@gmail.com">
            <br>
            Password:
            <input type="password" name="p">
            <br>
            <input type="submit" name="l" value="Login">
            <?php
             if(isset($_GET['t']))
             {
                if($_GET['t']==1)
                {
                    echo "logged in";
                }
                if($_GET['t']==2)
                {
                    echo "invalid";
                }
             }
            ?>
            <br>

        </form>
        <a href="register.php">Not a user? Sign up</a>
    </body>
</html>
