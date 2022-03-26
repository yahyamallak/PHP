<?php

require "Person.php";
require "Form.php";
require "Text.php";
require "Monster.php";

$yahya = new Person("Yahya", 80, 30);
$karim = new Person("Karim", 75);
$tanos = new Monster("Tanos", 200, 80);

echo "Yahya: ".$yahya->getLife();

echo "<br>--------------------------<br>";

$karim->attack($yahya);
echo "Yahya: ".$yahya->getLife();

echo "<br>--------------------------<br>";

$yahya->health(5);
echo "Yahya: ".$yahya->getLife();

echo "<br>--------------------------<br>";

echo "Yahya: ".$yahya->getLife();
echo "<br>Karim: ".$karim->getLife();

echo "<br>--------------------------<br>";

$tanos->attack($yahya);

$tanos->attack($karim);

echo "Yahya: ".$yahya->getLife();
echo "<br>Karim: ".$karim->getLife();


echo "<br>--------------------------<br>";

$yahya->isDead();
echo "<br>";
$karim->isDead();
echo "<br>";
$tanos->isDead();

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

