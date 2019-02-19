<?php
require '../Session.php';

$session = new Session;
$answer1 = $session->isNotEmptySession('first');
$answer2 = $session->isNotEmptySession('second');
$answer3 = $session->isNotEmptySession('third');

$errors = 0;
if ($answer1 !== 'yes') {
    $errors++;
}
if ($answer2 !== 'yes') {
    $errors++;
}
if ($answer3 !== 'no') {
    $errors++;
}
if (!$errors) {
    echo 'Вы ответили верно на все вопросы!' . '<br>';
}else{
    echo 'Количество ошибок - ' . $errors . '<br>';
}
?>
<a href="/taskTest/test.php">Попробовать еще раз</a>
