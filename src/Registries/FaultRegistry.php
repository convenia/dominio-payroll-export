<?php

namespace Convenia\Dominio\PayrollExport\Registries;

use Convenia\Dominio\PayrollExport\Fields\Formats\FieldC;

/**
 * Class PayrollRegistry.
 */
class FaultRegistry extends Registry
{
    protected $length = 11;

    /**
     * @var array
     */
    protected $defaultFields = [
        'fixed' => [
            'format'       => FieldC::class,
            'position'     => 1,
            'length'       => 2,
        ],
        'faultDate' => [
            'format'       => FieldC::class,
            'position'     => 3,
            'length'       => 8,
        ],
        'faultType' => [
            'format'       => FieldC::class,
            'position'     => 11,
            'length'       => 1,
        ],
    ];
}
