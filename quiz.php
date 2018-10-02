<?php

    $numCorrect =0;
    $totalNum = 5;

    $ans = array($_GET['q1'],$_GET['q2'],$_GET['q3'],$_GET['q4'],$_GET['q5']);
    $correctAns = array("Blue", "Beethoven", "Do you mean fly?", "None of the above", "Android");
    $questions = array("What is the color of the sky?", "Who is the best classical composer of all time", "How long will it take to drive to the moon?", "What is my name?", "IOS or Android which is better?");

    if(isset($_GET['q1']))
    {
        if($_GET['q1'] == "Blue")
        {
            $numCorrect +=1;
        }
    }

    if(isset($_GET['q2']))
    {
        if($_GET['q2'] == "Beethoven")
        {
            $numCorrect +=1;
        }
    }

    if(isset($_GET['q3']))
    {
        if($_GET['q3'] == "Do you mean fly?")
        {
            $numCorrect +=1;
        }
    }

    if(isset($_GET['q4']))
    {
        if($_GET['q4'] == "Non of the above")
        {
            $numCorrect +=1;
        }
    }

    if(isset($_GET['q5']))
    {
        if($_GET['q5'] == "Android")
        {
            $numCorrect +=1;
        }
    }

    for($x = 0; $x <5; $x++){
        $questionNum = $x +1;
        echo "Question " . $questionNum .": " . $question[$x] . "<br>";
        echo "Your Andswer: " . $ans[$x] . "<br>";
        echo "Correct Andswer: " . $correctAns[$x] . "<br><br><br>";
    }

    $percent = ($numCorrect/5)*100;
    echo "<br>You got " . $numCorrect . " out of 5 answers correct a " . $percent . "%";
?>
