<?php
require '../Session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $session = new Session;
    $session->set('second', $_POST['second']);
    header('Location: task3.php');
}
?>

<form action="" method="POST">
    1. Первая программа любого программиста - Hello World?<br>
    <label>Да: <input type="radio" name="second" value="yes"></label>
    <label>Не: <input type="radio" name="second" value="no"></label>
    <br><br>
    <button type="submit">Следующий вопрос</button>
</form>
