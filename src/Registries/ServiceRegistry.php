<?php

namespace Convenia\Dominio\PayrollExport\Registries;

use Convenia\PayrollFileReader\Fields\Formats\FieldC;
use Convenia\PayrollFileReader\Patterns\PatternBase;

/**
 * Class PayrollRegistry.
 */
class ServiceRegistry extends PatternBase
{
    protected $length = 30;

    /**
     * @var array
     */
    protected $defaultFields = [
        'fixed' => [
            'format'       => FieldC::class,
            'position'     => 1,
            'length'       => 2,
        ],
        'serviceCode' => [
            'format'       => FieldC::class,
            'position'     => 3,
            'length'       => 10,
        ],
        'rubricCode' => [
            'format'       => FieldC::class,
            'position'     => 13,
            'length'       => 9,
        ],
        'value' => [
            'format'       => FieldC::class,
            'position'     => 22,
            'length'       => 9,
        ],
    ];
}
