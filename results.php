<?php
    $page="Results";
	include("assets/inc/header.php");
?>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="quiz.js"></script>
<h2>Results</h2>
    <?php
        function returnValue($name){
            if(!empty($_POST[$name])){
                return $_POST[$name];
            }else{
                die("Entries not filled out.");
            }
        }
        function sanitize($str,$length=100){
            $str = htmlentities(trim($str), ENT_QUOTES);
            return substr($str, 0, $length);
        }
        //$name= $_POST['name'];
        $name = sanitize(returnValue('name'));
        $score= 0;
        $answer1= returnValue('answer1');
        $answer2= returnValue('answer2');
        $answer3= returnValue('answer3');
        $answer4= returnValue('answer4');
        $answer5= returnValue('answer5');
        $answer6= returnValue('answer6');
        $answer7= returnValue('answer7');
        $answer8= returnValue('answer8');
        $answer9= returnValue('answer9');
        $answer10= returnValue('answer10');
        $answer11= returnValue('answer11');
        $answer12= returnValue('answer12');
        $answer13= returnValue('answer13');
        $answers = array($answer1, $answer2, $answer3, $answer4, $answer5, $answer6, $answer7, $answer8, $answer9, $answer10, $answer11, $answer12, $answer13);
        $correct = array("C", "A", "D", "C", "C", "A", "D", "A", "B", "C", "B", "A", "D",);
        echo "Good work " . $name . "!<br>";
        for($i = 0; $i < count($answers); $i++) {
            if($answers[$i] == $correct[$i]){
                $score = $score + 1;
                echo "<p2 class='correct'>". ($i + 1) . ": " . $answers[$i] . " is correct!</p2>";
                echo "<br>";
            }
            else{
                echo "<p2 class='incorrect'>".$i . ": " . $answers[$i] . " is incorrect, the answer was " . $correct[$i] . "</p2>";
                echo "<br>";
            }
        }
        $grade = ($score/13)*100;
        echo "Your score is: " . $score . "/13 (" . round($grade, 2) . "%)";

        include("assets/inc/footer.php");
    ?>
