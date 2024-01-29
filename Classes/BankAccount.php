<?php

class BankAccount
{
    private string $accountNumber;
    private int $accountBalance;


    public function __construct($currentBalance, $accountNumber)
    {
        $this->setAccountBalance($currentBalance);
        $this->setAccountNumber($accountNumber);

    }

    public function addMoney($addMoney)
    {
        if ($addMoney < 0)
        {
            throw new Exception("You cant deposit money less than 0");
        }
            $balance = $this->getAccountBalance();
            $balance += $addMoney;
            $this->setAccountBalance($balance);


    }

    public function infoAccount()
    {
        $balance = $this->getAccountBalance();
        $accountNumber = $this->getAccountNumber();
        print("AccountId:" .  $accountNumber . " Balance " . $balance) . PHP_EOL;
    }

    public function withdraw($withdrawMoney)
    {
        if ($withdrawMoney < 0)
        {
            throw new Exception("You cant withdraw money less than 0");
        }
            $balance = $this->getAccountBalance();
            $balance -= $withdrawMoney;
            if ($balance < 0) {
                throw new Exception("Withdraw cant be more than balance");
            }
                $this->setAccountBalance($balance);
    }

    /**
     * @param int $accountBalance
     */
    public function setAccountBalance(int $currentBalance): void
    {
        if ($currentBalance < 0)
        {
            throw new Exception("Balance cant be less than 0");
        }
        $this->accountBalance = $currentBalance;
    }

    /**
     * @return int
     */
    public function getAccountBalance(): int
    {
        return $this->accountBalance;
    }

    /**
     * @param string $accountNumber
     */
    public function setAccountNumber(string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }


}