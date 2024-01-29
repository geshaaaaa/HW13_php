<?php

define('APP_DIR', __DIR__ . '/');
require_once APP_DIR . "classes/BankAccount.php";

try {
    $bankAccount = new BankAccount(1000, "ID01");
    $bankAccount->infoAccount();
    $bankAccount->addMoney(500);
    $bankAccount->withdraw(200);
    $bankAccount->infoAccount();

    $bankAccount2 = new BankAccount(200,"ID02");
    $bankAccount2->infoAccount();
    $bankAccount2->addMoney(400);
    $bankAccount2->withdraw(300);
    $bankAccount2->infoAccount();
} catch (Exception $exception)
{
    $exception->getMessage();
}