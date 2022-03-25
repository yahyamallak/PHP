<?php

require "Person.php";

$yahya = new Person("Yahya");
$karim = new Person("Karim");

$yahya->health(5);

$karim->attack($yahya);

$yahya->isDead();

?>
<pre>
<?php
var_dump($yahya);
?>
</pre>