<?php

namespace Coffer\Bank\Contracts;

/**
 * Bank Account Number Contract.
 *
 * @author Mohammed Mudasir <md.hyphen@gmail.com>
 */
interface BankAccountNumberContract
{
    /**
     * Bank Account Number.
     *
     * @return int
     */
    public function get();
}
