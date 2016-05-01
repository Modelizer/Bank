<?php
namespace Modelizer\Bank;

use Modelizer\Bank\Contracts\BankAccountNumberContract;

/**
 * Handle Bank Account related information
 *
 * @author Mohammed Mudasir <md.hyphen@gmail.com>
 */
class BankAccount
{
    protected $accountNumber;

    public function __construct(BankAccountNumberContract $accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    public function getUserInfo()
    {
        return $this->accountNumber->get();
    }

}
