<?php

namespace Convenia\Dominio\PayrollExport\Registries;

use Convenia\Dominio\PayrollExport\Fields\Formats\FieldC;

/**
 * Class PayrollRegistry.
 */
class ServiceRegistry extends Registry
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
