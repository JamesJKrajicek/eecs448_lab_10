<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../style.css">
        <title>2. Blog - User Creation</title>
    </head>

    <body>
        <nav>
            <a class="nav" href="../../index.html"><b>Home</b></a> | <!-- The two periods before index.html is HTML code for look one level up in the file hierarchy for index.html-->
            <a class="nav" href="../CreateUser.html">User Creation</a> |
            <a class="nav" href="../CreatePost.html">Create Post</a> |
            <a class="nav" href="../AdminHome.html">Admin Home</a> |
        </nav>

        <?php
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
            $username = $_POST["username"];
            $mysqli = new mysqli("mysql.eecs.ku.edu", "jameskrajicek", "uhuutha4","jameskrajicek");
            if ($mysqli -> connect_errno)
            {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
            }
            $query = "INSERT INTO Users(user_id) VALUES ('$username')"; //VALUES that are passed in using PHP variables must be surrounded by single quotes.
            
            if ($mysqli->query($query) === TRUE)
            {
                echo "<br<br><h2>Username '". $username . "' was created!</h2>";
            }
            else
            {
                echo "<br><br>CAUTION: '" . $username . "' is already taken.<br><br>";
            }
            echo "<a href='../CreateUser.html'>Return to the User Creation Page</a><br>";
            $mysqli -> close();
        ?>
    </body>

</html>