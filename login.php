<?php
session_start();
if(isset($_POST["Username"]) && isset($_POST["Password"])){
    $username=$_POST["Username"];
    $password=$_POST["Password"];

    if($Username == "usm" && $password=="123"){
        $_SESSION["Username"]="usm";
        header("Location:dashboard.php");
    }
}
?>
<html>
    <head>
        <title> Halaman Login </title>
        <style type="text/css">
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                background-image: url("https://cdn.arstechnica.net/wp-content/uploads/2023/06/bliss-update-1440x960.jpg");
            }
            table{
                background-color: white;
                border: 3px solid grey;
                padding: 20px;
                border-radius: 10px;
                font-family:Arial, Helvetica, sans-serif;
            }
            td{
                padding: 5px;
            }
            button{
                background-color: greenyellow;
                padding: 10px;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
     <form method="post" action="login.php">
         <table>
            <tr>
                <td colspan="2" style="text-align: center;" >LOGIN</td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="username" name="username" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox" /> Ingatkan saya</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><button type="submit" >SUBMIT</button></td>
            </tr>
        </table>
        </form>
    </body>
</html>