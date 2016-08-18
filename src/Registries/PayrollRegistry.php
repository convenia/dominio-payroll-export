<?php

namespace Convenia\Dominio\PayrollExport\Registries;

use Convenia\Dominio\PayrollExport\Fields\Formats\FieldC;

/**
 * Class PayrollRegistry.
 */
class PayrollRegistry extends Registry
{
    protected $length = 43;

    /**
     * @var array
     */
    protected $defaultFields = [
        'fixed' => [
            'format'       => FieldC::class,
            'position'     => 1,
            'length'       => 2,
        ],
        'employeeCode' => [
            'format'       => FieldC::class,
            'position'     => 3,
            'length'       => 10,
        ],
        'competence' => [
            'format'       => FieldC::class,
            'position'     => 13,
            'length'       => 6,
        ],
        'rubric' => [
            'format'       => FieldC::class,
            'position'     => 19,
            'length'       => 4,
        ],
        'type' => [
            'format'   => FieldC::class,
            'position' => 23,
            'length'   => 2,
            /*
            'rules'    => [
                'required',
            ],*/
        ],
        'value' => [
            'format'   => FieldC::class,
            'position' => 25,
            'length'   => 9,
        ],
        'company' => [
            'format'   => FieldC::class,
            'position' => 34,
            'length'   => 10
        ]
    ];
}
