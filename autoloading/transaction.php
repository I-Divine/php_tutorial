<?php
class Transaction{
    public $amount;
    public $description;

    public function __construct(int $amount, string $description) {
        $this->$amount = $amount;
        $this->$description = $description;
    }
}