# open-nfeio-api
Api de interação com a open.nfe.io para PHP

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/6703c50dd3df43409bb5aef29d13bb73)](https://www.codacy.com/app/euventura/open-nfeio-api?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=convenia/open-nfeio-api&amp;utm_campaign=Badge_Grade)

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
