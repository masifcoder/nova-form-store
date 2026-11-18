<?php

class  BankAccount
{
    public $owner;
    private $balance = 0;

    public function addBalance($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$acc1 = new BankAccount();
$acc1->addBalance(1000);
echo $acc1->getBalance();

$acc2 = new BankAccount();

