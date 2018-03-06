<?php

namespace Convenia\Dominio\PayrollExport\Tests;

use Convenia\Dominio\PayrollExport\PayrollExport;

/**
 * Class PayrollExportTest.
 */
class PayrollExportTest extends BaseTest
{
//    public function test_generate_file_to_import_events()
//    {
//        $payrollExport = new PayrollExport();
//
//        $fileContents = $payrollExport
//            ->events([
//                [
//                    'fixed' => 10,
//                    'employeeCode' => 1111111111,
//                    'competence' => 201608,
//                    'rubric' => 4444,
//                    'type' => 55,
//                    'value' => 999999999,
//                    'company' => 8888888888,
//                ],
//            ])
//            ->generate();
//
//        $this->assertEquals(
//            '1011111111112016084444559999999998888888888',
//            $fileContents
//        );
//    }

    public function test_generate_file_to_import_dependent_events()
    {
        $payrollExport = new PayrollExport();

        $fileContents = $payrollExport
            ->dependentEvents([
                [
                    'fixed' => 30,
                    'dependentCode' => 1111111111,
                    'value' => 222222222,
                ],
            ])
            ->generate();

        $this->assertEquals(
            '301111111111222222222',
            $fileContents
        );
    }

    public function test_generate_file_to_import_fault_events()
    {
        $payrollExport = new PayrollExport();

        $fileContents = $payrollExport
            ->faultEvents([
                [
                    'fixed' => 11,
                    'faultDate' => 20180306,
                    'faultType' => 1,
                ],
            ])
            ->generate();

        $this->assertEquals(
            '11201803061',
            $fileContents
        );
    }

    public function test_generate_file_to_import_health_insurance_events()
    {
        $payrollExport = new PayrollExport();

        $fileContents = $payrollExport
            ->healthInsuranceEvents([
                [
                    'fixed' => 25,
                    'beneficiary' => 'T',
                    'code' => 1111111111,
                    'value' => 222222222,
                ],
            ])
            ->generate();

        $this->assertEquals(
            '25T1111111111222222222',
            $fileContents
        );
    }

    public function test_generate_file_to_import_health_insurance_operator_events()
    {
        $payrollExport = new PayrollExport();

        $fileContents = $payrollExport
            ->healthInsuranceOperatorEvents([
                [
                    'fixed' => 20,
                    'operatorCNPJ' => 11111111111111,
                ],
            ])
            ->generate();

        $this->assertEquals(
            '2011111111111111',
            $fileContents
        );
    }

    public function test_generate_file_to_import_service_events()
    {
        $payrollExport = new PayrollExport();

        $fileContents = $payrollExport
            ->serviceEvents([
                [
                    'fixed' => 40,
                    'serviceCode' => 1111111111,
                    'rubricCode' => 222222222,
                    'value' => 333333333,
                ],
            ])
            ->generate();

        $this->assertEquals(
            '401111111111222222222333333333',
            $fileContents
        );
    }
}
