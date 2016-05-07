<?php
namespace Coffer\Contracts;

/**
 * Bank Account Number Contract
 *
 * @package Coffer\Bank\Contracts
 * @author Mohammed Mudasir <md.hyphen@gmail.com>
 */
interface BankAccountNumberContract
{
    /**
     * Bank Account Number
     *
     * @return integer
     */
    public function get();

}
