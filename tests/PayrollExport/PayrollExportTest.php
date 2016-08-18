<?php

namespace Convenia\Dominio\PayrollExport\Tests;

use Convenia\Dominio\PayrollExport\PayrollExport;

/**
 * Class PayrollExportTest.
 */
class PayrollExportTest extends BaseTest
{
    public function test_generate_file_to_import()
    {
        $payrollExport = new PayrollExport();

        $fileContents = $payrollExport
                    ->events([
                        [
                            'fixed' => 10,
                            'employeeCode' => 1111111111,
                            'competence' => 201608,
                            'rubric' => 4444,
                            'type' => 55,
                            'value' => 999999999,
                            'company' => 8888888888,
                        ],
                    ])
                    ->generate();
                
        $this->assertEquals(
            '1011111111112016084444559999999998888888888',
            $fileContents
        );
    }
}
