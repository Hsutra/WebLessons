<?php
session_start();
$answer2 = $_POST['answer2'];
$_SESSION['answer2'] = $answer2;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task 3</title>
</head>
<body>
<h1>Вопрос 3:</h1>
<p>Какое настоящие имя Гендальфа?</p>
<form action="task4.php" method="post">
    <input type="text" name="answer3"/>
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