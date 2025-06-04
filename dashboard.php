<?php
session_start();
if (!isset($_SESSION['username'])) {
    // User is already logged in, redirect to welcome page  
    // Jika belum login, redirect ke halaman login
    header("Location: login.php");
    exit();
}
// Cek apakah session counter sudah diset
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter'] += 1;
}
?>
<html>
    <head>
        <title>::Login Page::</title>
        <style type="text/css">
            body{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-size: cover;
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

            button #logout{
                background-color: red;
            }
        </style>
    </head>
    <body>
        <h1><?php echo "Selamat datang " . $_SESSION['username'] . " Ke-" . $_SESSION["counter"] ?></h1>
        <form method="post" action="login.php">
         <table>
            <tr>
                <td colspan="2" style="text-align: center;" >DAFTAR</td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama" /></td>
            </tr>
            <tr>
                <td>umur</td>
                <td><input type="text" name="umur" /></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" >PROSES</button>
                    <button id="logout" type="button" >LOGOUT</button>
                </td>
            </tr>
        </table>
        </form>
    </body>
</html>