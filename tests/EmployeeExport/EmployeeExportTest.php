<?php

namespace Convenia\Dominio\EmployeeExport\Tests;

use Convenia\Dominio\EmployeeExport\EmployeeExport;

/**
 * Class EmployeeExportTest.
 */
class EmployeeExportTest extends BaseTest
{
    public function test_generate_file_to_import()
    {
        $employeeExport = new EmployeeExport();

        $fileContents = $employeeExport
                    ->employees([
                        [
                            'name' => 'Vincent Vega',
                        ],
                    ])
                    ->generate();

        $this->assertEquals(
            '                            Vincent Vega                                                          ',
            $fileContents
        );
    }
}
