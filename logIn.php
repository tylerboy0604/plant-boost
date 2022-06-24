<?php

// $error = "";
// if (isset($_POST['submit'])){
    
//     if (!empty($_POST['username']) && !empty($_POST['password'])) {
        
//         require("dbconnect.php");
        
//         $username = trim($_POST['username']);
//         $pass = trim($_POST['password']);
        
//         $sql = "SELECT * FROM gebruikers WHERE username = '" .   $username."'";
//        if($result = $conn->query($sql)){

//         $dbuser = $result->fetch_row();
//         $dbpass = $dbuser[2];


//         if(password_verify($pass, $dbpass)){
//             session_start();
//             $_SESSION['ingelogd'] = true;
//             $_SESSION['username'] = $_POST['username'];
//             header("Location: admin.php");
//         } else {
//             header('Location: homepage.php')
//     }

//        }
//     }  else {
//     $error = "Username & password zijn verplicht <br>";

// }
// }

?>

!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logIn.css">
    <title>Document</title>
</head>
<body>
    <section class="login-box">
        <h2>Login</h2>
        <form action="#">
            <article class="user-box">
                <input type="text" name="" required="">
                <label for="">Username</label>
            </article>
            <article class="user-box">
                <input type="password" name="" required="">
                <label for="">Password</label>
            </article>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                login
            </a>
        </form>
    </section>
    <section class="login-box login-2">
        <h2>registreren</h2>
        <form action="">
            <article class="user-box">
                <input type="text" name="" required="">
                <label for="">Username</label>
            </article>
            <article class="user-box">
                <input type="password" name="" required="">
                <label for="">Password</label>
            </article>
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                register
            </a>
        </form>
    </section>
</body>
</html>