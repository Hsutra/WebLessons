<?php
session_start();
$answer1 = $_POST['answer1'];
$_SESSION['answer1'] = $answer1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 2</title>
</head>
<body>
<h1>Вопрос 2:</h1>
<p>Какая ваша любимая операционная система?</p>
<form action="task3.php" method="post">
    <input type="text" name="answer2"/>
    <input type="submit"/>
</form>
</body>
</html>


<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

h1 {
  color: #333;
  text-align: center;
  margin-top: 20px;
}

p {
  color: #666;
  line-height: 1.6;
  margin-bottom: 10px;
  text-align: center;
}

form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 20px;
}

input[type="text"] {
  padding: 8px;
  border: 1px solid #ddd;
  border-radius: 4px;
  outline: none;
  margin-bottom: 10px;
}

input[type="submit"] {
  padding: 8px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

</style>