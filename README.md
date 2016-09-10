# Dominio Payroll Export

Classe para exportar dados de de folha de sua empresa para o padrão aceito no software de folha [Domínio](http://www.dominiosistemas.com.br/)

[![Build Status](https://travis-ci.org/convenia/dominio-payroll-export.svg?branch=master)](https://travis-ci.org/convenia/dominio-payroll-export) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/0f231ed0-4c64-4678-b534-ac0222c5ec85/mini.png)](https://insight.sensiolabs.com/projects/0f231ed0-4c64-4678-b534-ac0222c5ec85) 
## Requisitos

* PHP 5+

### Instale usando o composer [Composer](http://getcomposer.org/)

```bash
composer require convenia/dominio-payroll-export
```

## Exemplos de Uso

```php
use Convenia\Dominio\PayrollExport\PayrollExport;

$dominio = new PayrollExport;

$payroll = [
    [
        'fixed' => 10,
        'employeeCode' => 1111111111,
        'competence' => 201608,
        'rubric' => 4444,
        'type' => 55,
        'value' => 999999999,
        'company' => 0000000,
    ]
];

$payrollExport->events($payroll)
        ->generate();
```
