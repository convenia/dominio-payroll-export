<?php

namespace Convenia\Dominio\PayrollExport\Registries;

use Convenia\PayrollFileReader\Fields\Formats\FieldC;
use Convenia\PayrollFileReader\Patterns\PatternBase;

/**
 * Class PayrollRegistry.
 */
class HealthInsuranceOperatorRegistry extends PatternBase
{
    protected $length = 16;

    /**
     * @var array
     */
    protected $defaultFields = [
        'fixed' => [
            'format'       => FieldC::class,
            'position'     => 1,
            'length'       => 2,
        ],
        'operatorCNPJ' => [
            'format'       => FieldC::class,
            'position'     => 3,
            'length'       => 14,
        ],
    ];
}
