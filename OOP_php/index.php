<?php
declare(strict_types=1);
require("./Transaction.php");
// object inittialization
$transaction = new Transaction(20,"Electricity bill");

var_dump($transaction);
// accessing private properties require getter function e.g getAmount()
// echo $transaction->amount . "<br/>";
// echo $transaction->description;

echo "<br/>";
echo $transaction->get_amount();
echo "<br/>";
echo $transaction->get_description();
echo "<br/>";

?>