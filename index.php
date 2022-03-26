<?php

require "Person.php";
require "Form.php";
require "Text.php";

$yahya = new Person("Yahya", 80, 30);
$karim = new Person("Karim", 75);

$yahya->health(5);

$karim->attack($yahya);

$yahya->isDead();

echo "<br>--------------------------<br>";

echo Text::publicWithZero(5);
echo "<br>";
echo Text::publicWithZero(12);

echo "<br>--------------------------<br>";

$form = new Form($_POST);

?>

<form action="#" method="post">

    <?php

    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();

    ?>
</form>

