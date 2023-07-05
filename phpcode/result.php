<?php
error_reporting(E_ERROR | E_PARSE); 

session_start();

$answer5 = isset($_POST['answer5']) ? $_POST['answer5'] : '';
$_SESSION['answer5'] = $answer5;

$correct_answers = array('Красный', 'Windows', 'Олорин', 'Моргот', 'Коба');
$score = 0;

for ($i = 1; $i <= 5; $i++) {
    if (isset($_SESSION["answer{$i}"]) && strcasecmp($_SESSION["answer{$i}"], $correct_answers[$i - 1]) == 0) {
        $score++;
    }
}

echo "<!DOCTYPE html>
<html>
<head>
    <title>Quiz Results</title>
    <link rel='stylesheet' type='text/css' href='styles.css'>
</head>
<body>
    <div class='container'>
        <h1>Quiz Results</h1>
        <p>Your score: $score/5</p>
    </div>
</body>
</html>";

session_destroy();
?>


<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h1 {
    color: #333;
    text-align: center;
    margin-bottom: 20px;
}

p {
    color: #666;
    line-height: 1.6;
    margin-bottom: 10px;
}

</style>