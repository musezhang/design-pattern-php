<?php
require "./adapter.php";

$adapter = new Adapter();

$adapter->sayChinese();
$adapter->sayEnglish();

$adaptee = new adaptee();

$adapter2 = new Adapter2($adaptee);

$adapter2->sayChinese();
$adapter2->sayEnglish();