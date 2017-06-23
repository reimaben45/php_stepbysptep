<?php
error_reporting(E_ALL ^ E_DEPRECATED);
mysql_connect("localhost","root","");
mysql_select_db("account");
if(isset($_POST['s']))
{
    $a=$_POST['fn'];
    $b=$_POST['ag'];
    $c=$_POST['u'];
    $d=$_POST['p'];
    $e=$_POST['ad'];
    $f=$_POST['g'];
    $g=$_POST['c'];
    $g1=join(',',$g);
    $ins=mysql_query("insert into regist values('$a','$b','$c','$d','$e','$f','$g1')");
    if($ins>0)
    {
        echo "registered";
    }
    else
    {
        echo mysql_error();
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
   <!-- <link rel="stylesheet" href="css/regcss.css">-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sign in</title>
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

        <h1 align="center">Create Your Account</h1>
        <form method="post">
            <center>
            Name:
            <input type="text" name="fn" value="Name">
            <br>
            Age:
            <input type="text" name="ag" value="age">
            <br>
            Choose your username:
            <input type="text" name="u" value="abc@gmail.com">
            <br>
            Create a password:
            <input type="password" name="p">
            <br>
            Address:
            <textarea name="ad"></textarea>
            <br>
            Gender:
            <input type="radio" name="g" checked>Female
            <input type="radio" name="g">Male
            <br>
            Qualification:
            <input type="checkbox" name="c[]" value="b.tech"> B.Tech
            <input type="checkbox" name="c[]" value="m.tech"> M.Tech
            <br>
            <input type="submit" name="s" value="Submit">
            </center>
        </form>

    </body>
</html>
