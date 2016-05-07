<?php

use Coffer\Bank;
use Coffer\Exceptions\InvalidBankAccountNumberException;

class BankAccountTest extends PHPUnit_Framework_TestCase
{
    public function testBankAccountUserInfo()
    {
        $accountNumber = new Bank\BankAccountNumber(155);
        $account = new Bank\BankAccount($accountNumber);

        $this->assertEquals(155, $account->getUser()->accountNumber);
    }

    public function testShouldThrowException()
    {
        $this->expectException(InvalidBankAccountNumberException::class);

        $accountNumber = new Bank\BankAccountNumber('string');
        new Bank\BankAccount($accountNumber);
    }

}
