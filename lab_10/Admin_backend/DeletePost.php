<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../../style.css">
        <title>7. Post Deletion Portal</title>
    </head>
    <body>
        <nav>
            <a class="nav" href="../index.html"><b>Home</b></a> | <!-- The two periods before index.html is HTML code for look one level up in the file hierarchy for index.html-->
            <a class="nav" href="../CreateUser.html">User Creation</a> |
            <a class="nav" href="../CreatePost.html">Create Post</a> |
            <a class="nav" href="../AdminHome.html">Admin Home</a> |
        </nav>
        <div>
            <h2>Deleted Entries</h2>
            <?php
                error_reporting(E_ALL);
                ini_set("display_errors", 1);
                if(isset($_REQUEST["to_del"]))
                {
                    $to_del_arr = $_REQUEST["to_del"]; //$_REQUEST is an associative array containing the values (PLURAL) of the checkboxes from the form in DeletePost.html with the name to_del[]. NOTE that the brackets on 'to_del[]' are excluded in $_REQUEST[].
                    $to_del_arr_count = count ($to_del_arr);
                    $mysqli = new mysqli ("mysql.eecs.ku.edu", "jameskrajicek", "uhuutha4","jameskrajicek");

                    //Check the connection to the server
                    if ($mysqli -> connect_errno)
                    {
                        printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
                    }
                    for ($i=0; $i<$to_del_arr_count; $i++)
                    {
                        $query = "DELETE FROM Posts WHERE post_id = '$to_del_arr[$i]'";
                        if ($mysqli->query($query) === FALSE)
                        {
                            printf("Failed to delete post with post_id %s\n, $to_del_arr[$i]");
                            echo "<br>";
                        }
                        else
                        {
                            echo "Deleted Post with post_id: " . $to_del_arr[$i] . "<br>";
                        }
                    }                
                    /* close connection */
                    $mysqli->close();
                }
                else
                {
                    echo "There wasn't anything selected for deletion.<br>";
                }
            ?>
        </div>
    </body>
</html>