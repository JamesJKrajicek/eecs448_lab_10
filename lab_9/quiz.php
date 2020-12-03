<html>
    <head>
        <meta charset = "utf-8">
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <nav>
            <a class="nav" href="../index.html">Home</a> |
            <a class="nav" href="php_tutorial.html">Multiplication Table</a> |
            <a class="nav" href="quiz.html">Quiz</a> |
        </nav>
        <h2>Quiz Results</h2>
        <?php
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
            //access the global array called $_POST to get the values from the text fields
            $q_bank     = array("What is the capital of the State of Kansas?","How many states are in the United States?","What is the name of the professor teaching EECS 448 during the Fall 2020 semester?","What sport is KU best known for playing?","What city in the State of Kansas is the University of Kansas based from?");
            $q_ans_bank = array("Topeka", "50", "Dr. Johnson" ,"Basketball", "Lawrence");
            $q_usr_inp  = array("","","","","");
            $q_score = 0;
            if (!empty($_POST["capital"]))
            {
                $q_usr_inp[0] = $_POST["capital"]; 
            }
            if (!empty($_POST["states"]))
            {
                $q_usr_inp[1] = $_POST["states"];
            }
            if (!empty($_POST["prof"]))
            {
                $q_usr_inp[2] = $_POST["prof"];
            }
            if (!empty($_POST["sport"]))
            {
                $q_usr_inp[3] = $_POST["sport"];
            }
            if (!empty($_POST["city"]))
            {
                $q_usr_inp[4] = $_POST["city"];
            }

            echo "<hr>";
            for ($i=0; $i<count($q_bank); $i++)
            {
                if ($q_usr_inp[$i] == $q_ans_bank[$i])
                {
                    $q_score++;
                }
                echo "<div><b>Question " . ($i+1) . ": </b><i>" . $q_bank[$i] . "</i><br><div class='inp'> You Answered: " . $q_usr_inp[$i] . "<br>Correct Answer: " . $q_ans_bank[$i] . "</div></div><br><br><hr>";
            }//Use single quotes in place of double quotes when assigning html attributes during a PHP echo.
            echo "Score: <b>" . $q_score . "/" . count($q_bank) . "</b> (<b>" . (($q_score/count($q_bank))*100) . "%</b>)<br><a href='quiz.html'>Try Again</a><br>";
            
        ?>
    </body>
</html>