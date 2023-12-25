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

    function isEmailExists($conn, $tableName, $email)
    {
        // SQL Statement
        $sql = "SELECT * FROM " . $tableName . " WHERE email='" . $email . "'";

        // Process the query
        $results = $conn->query($sql);

        // Fetch Associative array
        $row = $results->fetch_assoc();

        // Check if there is a result and response to  1 if email is existing
        return (is_array($row) && count($row) > 0);
    }

    function Verfiy($conn, $tableName, $email)
    {
        $isEmailExist = isEmailExists($conn, 'user', $email);
        if ($isEmailExist == false) {
            header('Location: ./assets/db_utility/InserUser.php');
        }
        else {
            echo "Error: email exist.";
        }
    }

    ?>

    <div class="contenair">
        <div class="contenair-wrapper">
            <h1 style="font-size: 3.4em;">Welcom</h1>
            <form name="form" action="<?php isEmailExists($conn, 'user', $_POST['email']) ?>" method="post" class="form_inputs">
                <input type="text" name="username" id="name" required>
                <input type="email" name="email" id="email" required>
                <input type="password" name="password" id="password" required>
                <input type="submit">
            </form>
        </div>
    </div>


    <script src="" async defer></script>
</body>

</html>