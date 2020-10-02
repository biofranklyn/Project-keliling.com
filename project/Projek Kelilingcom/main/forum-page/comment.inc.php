<?php

function set_comment($conn){
    if(isset($_POST['comment_submit'])){
        $username_forum = $_POST['username_forum'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO bandung_forum(username_forum, date, message)
         VALUES ('$username_forum', '$date', '$message')";
         $result = $conn->query($sql);
         echo '<script type="text/javascript">alert("Comment Posted!")</script>';
         header("Location:Bandung.php");
    }   
}


function view_comment($conn){
    $sql = "SELECT * FROM bandung_forum ORDER BY(date) DESC";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
            echo $row['username_forum']."<br>";
            echo $row['date']."<br><br>";
            echo nl2br($row['message']);
        echo "</p></div>";
    }
    
}