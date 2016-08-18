<?php

namespace Convenia\Dominio\PayrollExport;

use Convenia\Dominio\PayrollExport\Registries\PayrollRegistry;

/**
 * Class PayrollExport.
 */
class PayrollExport
{
    /**
     * @var array
     */
    protected $employees = [];

    /**
     * @param array $employeesData
     *
     * @return $this
     */
    public function employees(array $employeesData)
    {
        foreach ($employeesData as $employee) {
            $this->employees[] = new PayrollRegistry($employee);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function generate()
    {
        $returnString = '';

        foreach ($this->employees as $employee) {
            $returnString .= $employee;
        }

        return $returnString;
    }
}
