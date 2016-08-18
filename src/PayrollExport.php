<?php

namespace Convenia\Dominio\PayrollExport;

use Convenia\Dominio\PayrollExport\Registries\PayrollRegistry;

/**
 * Class PayrollExport.
 */
class PayrollExport
{
    /**
     * @var array
     */
    protected $events = [];

    /**
     * @param array $eventsData
     *
     * @return $this
     */
    public function events(array $eventsData)
    {
        foreach ($eventsData as $event) {
            $this->events[] = new PayrollRegistry($event);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function generate()
    {
        $returnString = '';

        foreach ($this->events as $event) {
            $returnString .= $event;
        }

        return $returnString;
    }
}
