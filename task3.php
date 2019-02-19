<?php
require '../Session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $session = new Session;
    $session->set('third', $_POST['third']);
    header('Location: result.php');
}
?>

<form action="" method="POST">
    1. Код всегда работает с первого раза?<br>
    <label>Да: <input type="radio" name="third" value="yes"></label>
    <label>Не: <input type="radio" name="third" value="no"></label>
    <br><br>
    <button type="submit">Узнать результат</button>
</form>
