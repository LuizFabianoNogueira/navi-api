# NAVI API

## Descrição

O `NaviAPI` é uma biblioteca PHP que fornece serviços para consulta de CEP, CPF e CNPJ. Ele utiliza a estrutura do Laravel para configuração e integração. \
O serviço é fornecido pela [NaviAPI](https://api.navi.inf.br/). \
Acesse o site para verificar a documentação e os planos disponíveis.

## Instalação

### Requisitos

- PHP 8.3 ou superior
- Composer
- Laravel 10.x ou superior

### Passos

1. Adicione o pacote ao seu projeto via Composer:

    ```bash
    composer require luizfabianonogueira/navi-api
    ```
2.  Em bootstrap/providers.php adicione o provider.
    ```php
    <?php
    return [
        // other providers...
        LuizFabianoNogueira\SseNotify\SseServiceProvider::class, 
    ];
    ```

3. Publique as configurações do pacote:

    ```bash
    php artisan vendor:publish --tag=navi-api-config
    ```

4. Configure as variáveis de ambiente no arquivo `.env`:

    ```env
    NAVIAPI_URL=https://api.exemplo.com
    NAVIAPI_TOKEN=seu_token_aqui
    NAVI_API_INTERNAL_URL=false
    ```

## Uso

### Exemplo de Uso no Controller

```php
<?php

namespace App\Http\Controllers;

use LuizFabianoNogueira\NaviAPI\NaviAPIService;

class HomeController extends Controller
{
    public function index()
    {
        $naviAPIService = new NaviAPIService();

        // Exemplo de consulta de CEP
        $cep = $naviAPIService->cep('88###-###');
        dump($cep);

        // Exemplo de consulta de CPF
        $cpf = $naviAPIService->cpf('###.###.###-##');
        dump($cpf);

        // Exemplo de consulta de CNPJ
        $cnpj = $naviAPIService->cnpj('##.###.###/####-##');
        dump($cnpj);

        return view('home');
    }
}
```

### URLs Internas.

Para facilitar seu uso adicionamos um acesso direto pela url de seu sistema para que possa usar a API sem precisar de programar.

### URLs

- CEP: `https://yourdomain.com/navi-api/cep/{cep}`
- CPF: `https://yourdomain.com/navi-api/cpf/{cpf}`
- CNPJ: `https://yourdomain.com/navi-api/cnpj/{cnpj}`

## Questions and contributions

[luizfabianonogueira@gmail.com](mailto:luizfabianonogueira@gmail.com) \
+55 48 991779088 \

PIX email:
```
luizfabianonogueira@gmail.com
```
PIX phone
```
48991779088
```
