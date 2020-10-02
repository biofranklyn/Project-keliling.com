

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="icon" href="Assets/Logo-Kelilingcom.png">
</head>
<body>


    <?php

    session_start();

    if(!isset($_SESSION['username'])){
        header("location:connect-login.php");
        exit();
    }

    echo "Halo ".$_SESSION['username']."!!!!!!!";
    echo "Click here "; 
    $username = $_SESSION['username'];
    $url = "forum-page/Bandung.php?username=" . $username;
    echo "<a href='$url'>HELLO</a>";
    echo "<br><br>";
    echo "<a href='logout.php'>LOGOUT</a>";



    ?>


</body>
</html>