<?php
require '../Session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $session = new Session;
    $session->set('first', $_POST['first']);
    header('Location: task2.php');
}

?>

<form action="" method="POST">
    1. PHP это круто?<br>
    <label>Да: <input type="radio" name="first" value="yes"></label>
    <label>Не: <input type="radio" name="first" value="no"></label>
    <br><br>
    <button type="submit">Следующий вопрос</button>
</form>
