<?php
namespace Coffer\Bank;

use Coffer\Bank\Contracts\BankAccountNumberContract;
use Coffer\Bank\Exceptions\InvalidBankAccountNumberException;

/**
 * Class BankAccountNumber
 *
 * @package Coffer\Bank
 * @author Mohammed Mudasir <md.hyphen@gmail.com>
 */
class BankAccountNumber implements BankAccountNumberContract
{
    /**
     * @var int
     */
    private $number;

    /**
     * @param $number
     */
    function __construct($number)
    {
        $this->number = $number;

        $this->isValid();
    }

    /**
     * Bank Account Number
     *
     * @return integer
     */
    public function get()
    {
        return $this->number;
    }

    /**
     * Check whether given bank account number is valid
     *
     * @return bool
     * @throws InvalidBankAccountNumberException
     */
    public function isValid()
    {
        if (! is_numeric($this->number)) {
            throw new InvalidBankAccountNumberException("Invalid Bank Account Number \"" . $this->number . "\" given.");
        }

        return true;
    }

}
