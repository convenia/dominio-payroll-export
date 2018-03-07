<?php

namespace Convenia\Dominio\PayrollExport\Registries;

use Convenia\PayrollFileReader\Fields\Formats\FieldC;
use Convenia\PayrollFileReader\Patterns\PatternBase;

/**
 * Class PayrollRegistry.
 */
class DependentRegistry extends PatternBase
{
    protected $length = 21;

    /**
     * @var array
     */
    protected $defaultFields = [
        'fixed' => [
            'format'       => FieldC::class,
            'position'     => 1,
            'length'       => 2,
        ],
        'dependentCode' => [
            'format'       => FieldC::class,
            'position'     => 3,
            'length'       => 10,
        ],
        'value' => [
            'format'       => FieldC::class,
            'position'     => 13,
            'length'       => 9,
        ],
    ];
}
