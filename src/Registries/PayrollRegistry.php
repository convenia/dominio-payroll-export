<?php

namespace Convenia\Dominio\PayrollExport\Registries;

use Convenia\Dominio\PayrollExport\Fields\Formats\FieldC;

/**
 * Class PayrollRegistry.
 */
class PayrollRegistry extends Registry
{
    protected $length = 98;

    /**
     * @var array
     */
    protected $defaultFields = [
        'companyCode' => [
            'format'       => FieldC::class,
            'position'     => 1,
            'length'       => 7,
        ],
        'code' => [
            'format'       => FieldC::class,
            'position'     => 8,
            'length'       => 7,
        ],
        'branchCode' => [
            'format'       => FieldC::class,
            'position'     => 15,
            'length'       => 7,
        ],
        'blank' => [
            'format'       => FieldC::class,
            'position'     => 22,
            'length'       => 7,
        ],
        'name' => [
            'format'   => FieldC::class,
            'position' => 29,
            'length'   => 70,
            'rules'    => [
                'required',
            ],
        ],
        /*'birthDate' => [
            'format'       => FieldN::class,
            'position'     => 0,
            'length'       => 0,
            'rules'    => [
                'required',
                'date:dmY',
            ]
        ],*/
    ];
}
