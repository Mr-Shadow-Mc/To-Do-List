<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body style="    box-sizing: border-box;">
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php

    require './assets/db_utility/conn.php';

    mysqli_close($conn);

    ?>

    <div class="contenair" style="width: 100vw;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    background-color: black;
    top: 0;
    left: 0;">
        <div class="contenair-wrapper" style="    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: white;
    height: 500px;
    width: 400px;
    border-radius: 15px;
    justify-content: space-evenly;">
            <h1 style="font-size: 3.4em;">Welcom</h1>
            <form name="form" action="./assets/db_utility/InsertUser.php" method="post" class="inputs" style="    display: flex;
    flex-wrap: nowrap;
    flex-direction: column;
    justify-content: center;
    align-items: center;">
                <input type="text" name="username" id="name" required style="    margin: 10px 0;">
                <input type="email" name="email" id="email" required style="    margin: 10px 0;">
                <input type="password" name="password" id="password" required style="    margin: 10px 0;">
                <input type="submit" style="margin-top: 22px;
        width: 40%;
        background-color: white;
        border-radius: 15px;
        height: 7%;">
            </form>

        </div>
    </div>


    <script src="" async defer></script>
</body>

</html>