<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../style.css">
        <title>2. Blog - Create Post </title>
    </head>

    <body>
        <nav>
            <a class="nav" href="../../index.html"><b>Home</b></a> | <!-- The two periods before index.html is HTML code for look one level up in the file hierarchy for index.html-->
            <a class="nav" href="../CreateUser.html">User Creation</a> |
            <a class="nav" href="../CreatePost.html">Create Post</a> |
            <a class="nav" href="../AdminHome.html">Admin Home</a> |
        </nav>
        <div>
        <?php
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
            $posting_usr    = $_POST["username"];
            $post_content   = $_POST["post_txt"];

            $conn = new mysqli("mysql.eecs.ku.edu", "jameskrajicek", "uhuutha4","jameskrajicek");

            if ($conn -> connect_errno)
            {
                printf("Connect failed: %s\n", $conn->connect_error);
                exit();
            }
            $query = "INSERT INTO Posts(content, author_id) VALUES ('$post_content', '$posting_usr')";
            if ($conn->query($query) === TRUE)
            {
                echo "<h3>Your post has been successfully uploaded to the database!</h3>";
            }
            else
            {
                echo "<h3>There was a problem with your upload. Either you didn't enter a valid username or your post was empty.</h3>";
                echo "<a href='../CreatePost.html'>Return to the Post Creation Page</a>";
            }
            $conn->close();

        ?>
        </div>
    </body>

</html>