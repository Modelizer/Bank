<?php

use Coffer\Bank;

class BankAccountTest extends PHPUnit_Framework_TestCase
{
    public function testBankAccountUserInfo()
    {
        $accountNumber = new Bank\BankAccountNumber(155);
        $account = new Bank\BankAccount($accountNumber);

        $this->assertEquals(155, $account->getUserInfo());
    }

    public function testShouldThrowException()
    {
        $this->expectException(Bank\Exceptions\InvalidBankAccountNumberException::class);

        $accountNumber = new Bank\BankAccountNumber('string');
        new Bank\BankAccount($accountNumber);
    }
}
