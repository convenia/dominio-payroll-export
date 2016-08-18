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
                        ],
                    ])
                    ->generate();
         
                    var_dump($fileContents);
             /*       
        $this->assertEquals(
            '                            10                                                          ',
            $fileContents
        );
        */
    }
}
