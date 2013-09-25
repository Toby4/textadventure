<?php
session_start();

$query = $_REQUEST["q"];
$stage = $_REQUEST["s"];

switch ($stage) {
    case 0:
        echo "What's your name?";
        break;
    case 1:
        $_SESSION["name"] = $query;
        echo "Hello, ".$query;
        echo "<br>";
        echo "How old are you?";
        break;
    case 2:
        $_SESSION["age"] = $query;
        echo "Ooh, you're ".$query.".";
        echo "<br>";
        echo "What class are you?";
        break;
    case 3:
        $_SESSION["class"] = $query;
        echo "So your name is ".$_SESSION["name"].",";
        echo "<br>";
        echo "you're ".$_SESSION["age"]." and";
        echo "<br>";
        echo "you are a ".$query;
        echo "<br>";
        echo "Is this true?";
        break;
    case 4:
        echo "Well, I'm Doctor Rachman,";
        echo "<br>";
        echo "and together, ".$_SESSION["name"].",";
        echo "<br>";
        echo "we can defeat the evil coders!";
        break;
    case 5:
        echo "That's all for now, but,";
        echo "<br>";
        echo "you should check out the";
        echo "<br>";
        echo "developer. <a href='http://montyanderson.co.uk'>Monty Anderson</a>";
        break;
    
}
?>