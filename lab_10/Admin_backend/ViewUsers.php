<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../style.css">
        <title>5. View Users</title>
    </head>
    <body>
        <nav>
            <a class="nav" href="../../index.html"><b>Home</b></a> | <!-- The two periods before index.html is HTML code for look one level up in the file hierarchy for index.html-->
            <a class="nav" href="../CreateUser.html">User Creation</a> |
            <a class="nav" href="../CreatePost.html">Create Post</a> |
            <a class="nav" href="../AdminHome.html">Admin Home</a> |
        </nav>
        <div>
            <br><br>
            <table>
                <tbody>
                    <tr><th>Current List of Users</th></tr>
                    <?php
                        error_reporting(E_ALL);
                        ini_set("display_errors", 1);
                        $mysqli = new mysqli ("mysql.eecs.ku.edu", "jameskrajicek", "uhuutha4","jameskrajicek");

                        //Check the connection to the server
                        if ($mysqli -> connect_errno)
                        {
                        printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
                        }
                        $query = "SELECT user_id FROM Users ORDER BY user_id ASC";
                        if ($result = $mysqli->query($query)) {
                            /* fetch associative array */
                            while ($row = $result->fetch_assoc()) {
                                //Row is now an associative array representing the fetched tuple from the database table 
                                //The while loop iterates through the table of tuples until none remain to be read out (at which point $result->fetch_assoc() returns false and the loop breaks).
                                echo "<tr><td>" . $row["user_id"] . "</td></tr>";
                            }
                            /* free result set */
                            $result->free();
                        }
                        /* close connection */
                        $mysqli->close();

                    ?>
                </tbody>
            </table>
            <hr>
        </div>
    </body>

</html>