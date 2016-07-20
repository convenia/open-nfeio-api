# open-nfeio-api
Api de interação com a open.nfe.io para PHP

## Requisitos

* PHP 5.3 em diante.

### Usando [Composer](http://getcomposer.org/)

```bash
composer require convenia/open-nfeio-api
```

## Exemplos de Uso

```php
use Convenia\OpenNfeio\OpenNfeio;

$obj = new OpenNfeio('apitoken');
$obj->addresses('04110001');
$response = $obj->get() //response array
```
## Autor

Equipe Convenia Dev Team
