<?php
namespace Coffer\DataCenter;

use Coffer\Entities\User;
use Coffer\Contracts\BankAccountNumberContract;

/**
 * User Information Repository
 *
 * @package Coffer\DataCenter
 * @author Mohammed Mudasir <md.hyphen@gmail.com>
 */
class UserInformation
{
    /**
     * @var
     */
    protected $accountNumber;

    /**
     * Get User Information by account number
     *
     * @param \Coffer\Contracts\BankAccountNumberContract $accountNumber
     * @return $this
     */
    public function byAccountNumber(BankAccountNumberContract $accountNumber)
    {
        $user = new User;
        $user->accountNumber = $accountNumber->get();

        // @todo We will fetch data using ORM in next chapter.
        return $user;
    }

}
