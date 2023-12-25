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
    <link rel="stylesheet" href="">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php
    require './conn.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO users (UserName, UserMail, UserPassword)
VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ./../pages/welcom.php?user=' . $username);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

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
    ?>

    <script src="" async defer></script>
</body>

</html>