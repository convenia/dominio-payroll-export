# Dominio Payroll Export

Classe para exportar dados de de folha de sua empresa para o padrão aceito no software de folha [Domínio](http://www.dominiosistemas.com.br/)

[![Build Status](https://travis-ci.org/convenia/dominio-payroll-export.svg?branch=master)](https://travis-ci.org/convenia/dominio-payroll-export) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/c7d43bcb24294fb29151142651eaf1ee)](https://www.codacy.com/app/Convenia/dominio-payroll-export?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=convenia/dominio-payroll-export&amp;utm_campaign=Badge_Grade) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/0f231ed0-4c64-4678-b534-ac0222c5ec85/mini.png)](https://insight.sensiolabs.com/projects/0f231ed0-4c64-4678-b534-ac0222c5ec85) [![Packagist](https://img.shields.io/packagist/v/convenia/dominio-payroll-export.svg?maxAge=2592000)](https://packagist.org/packages/convenia/dominio-payroll-export) 

## Requisitos

* PHP >= 5.6

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
