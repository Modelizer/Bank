<?php
namespace Coffer\Bank;

use Coffer\Contracts\BankAccountNumberContract;
use Coffer\DataCenter\UserInformation;

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

    public function getUser()
    {
        $user = new UserInformation();
        return $user->byAccountNumber($this->accountNumber);
    }

}
