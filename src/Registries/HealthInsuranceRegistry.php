<?php

namespace Convenia\Dominio\PayrollExport\Registries;

use Convenia\Dominio\PayrollExport\Fields\Formats\FieldC;

/**
 * Class PayrollRegistry.
 */
class HealthInsuranceRegistry extends Registry
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
        'beneficiary' => [
            'format'       => FieldC::class,
            'position'     => 3,
            'length'       => 1,
        ],
        'code' => [
            'format'       => FieldC::class,
            'position'     => 4,
            'length'       => 10,
        ],
        'value' => [
            'format'       => FieldC::class,
            'position'     => 14,
            'length'       => 9,
        ],
    ];
}
