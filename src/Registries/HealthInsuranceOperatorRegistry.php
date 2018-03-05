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
        'operatorCNPJ' => [
            'format'       => FieldC::class,
            'position'     => 3,
            'length'       => 14,
        ],
    ];
}
