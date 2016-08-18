# Dominio Payroll Export

Classe para exportar dados de de folha de sua empresa para o padrão aceito no software de folha [Domínio](http://www.dominiosistemas.com.br/)

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
        
    ]
];

$dominio->payroll($payroll)
        ->generate();
```
