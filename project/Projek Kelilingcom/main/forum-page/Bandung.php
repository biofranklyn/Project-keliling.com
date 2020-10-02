

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandung</title>
    <link rel="stylesheet" href="1-forumCSS.css">
    <link rel="icon" href="../Assets/Logo-Kelilingcom.png">
</head>
<body>
    
    <?php
        session_start();
        if(!isset($_SESSION['username'])){
            header("location:connect-login.php");
            exit();
        }
        $username = $_SESSION['username'];
        echo "Halo ".$username."!!!!!!!";
        echo "Click here "; 
        $url = "../itinenary/itinenary_listPHP.php?username=" . $username;
        echo "<a href='$url'>Back to Homepage nih</a>";

    ?>

    <?php
        date_default_timezone_set('Asia/Jakarta');
        include 'comment.inc.php';
        include 'connect.php';
    ?>



    <?php
    echo "<form method='POST' action='".set_comment($conn)."'>
        <input type='hidden' name='username_forum' value='$username'>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <textarea name='message'></textarea><br>
        <button type='submit' name='comment_submit'>Comment</button>
    </form>";

    view_comment($conn);
    ?>

</body>
</html>