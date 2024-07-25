<?php
use Ramsey\Uuid\Uuid;
require_once( "./paddle.php");
require_once( "./stripe.php");
require_once( "./transaction.php");

$paddleTransaction = new PaddleTransaction();

var_dump($paddleTransaction);


// var_dump(new Uuid());


echo "hello world";
?>