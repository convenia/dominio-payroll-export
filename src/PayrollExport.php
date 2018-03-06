<?php

namespace Convenia\Dominio\PayrollExport;

use Convenia\Dominio\PayrollExport\Registries\DependentRegistry;
use Convenia\Dominio\PayrollExport\Registries\FaultRegistry;
use Convenia\Dominio\PayrollExport\Registries\HealthInsuranceOperatorRegistry;
use Convenia\Dominio\PayrollExport\Registries\HealthInsuranceRegistry;
use Convenia\Dominio\PayrollExport\Registries\PayrollRegistry;
use Convenia\Dominio\PayrollExport\Registries\ServiceRegistry;

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
        $this->addEvents($eventsData, PayrollRegistry::class);
        return $this;
    }

    /**
     * @param array $eventsData
     *
     * @return $this
     */
    public function dependentEvents(array $eventsData)
    {
        $this->addEvents($eventsData, DependentRegistry::class);
        return $this;
    }

    /**
     * @param array $eventsData
     *
     * @return $this
     */
    public function faultEvents(array $eventsData)
    {
        $this->addEvents($eventsData, FaultRegistry::class);
        return $this;
    }

    /**
     * @param array $eventsData
     *
     * @return $this
     */
    public function healthInsuranceEvents(array $eventsData)
    {
        $this->addEvents($eventsData, HealthInsuranceRegistry::class);
        return $this;
    }

    /**
     * @param array $eventsData
     *
     * @return $this
     */
    public function healthInsuranceOperatorEvents(array $eventsData)
    {
        $this->addEvents($eventsData, HealthInsuranceOperatorRegistry::class);
        return $this;
    }

    /**
     * @param array $eventsData
     *
     * @return $this
     */
    public function serviceEvents(array $eventsData)
    {
        $this->addEvents($eventsData, ServiceRegistry::class);
        return $this;
    }

    private function addEvents($eventsData, $class)
    {
        foreach ($eventsData as $event) {
            $this->events[] = new $class($event);
        }
    }

    /**
     * @return string
     */
    public function generate()
    {
        $returnString = '';

        foreach ($this->events as $event) {
            $returnString .= $event.PHP_EOL;
        }

        return trim($returnString);
    }
}
