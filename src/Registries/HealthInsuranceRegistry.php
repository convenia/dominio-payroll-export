<?php

namespace Convenia\Dominio\PayrollExport\Registries;

use Convenia\PayrollFileReader\Fields\Formats\FieldC;
use Convenia\PayrollFileReader\Patterns\PatternBase;

/**
 * Class PayrollRegistry.
 */
class HealthInsuranceRegistry extends PatternBase
{
    protected $length = 22;

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
