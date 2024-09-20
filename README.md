<p align="center"><img src="src/Assets/img/laravel.png" alt="Laravel Logo"></p>

# NAVI API

## Descrição

O `NaviAPI` é uma biblioteca PHP que fornece serviços para consulta de CEP, CPF e CNPJ. Ele utiliza a estrutura do Laravel para configuração e integração. \
O serviço é fornecido pela [NaviAPI](https://api.navi.inf.br/). \
Acesse o site para verificar a documentação e os planos disponíveis.


### License: LGPL-3.0-or-later

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
        LuizFabianoNogueira\NaviAPI\NaviAPIServiceProvider::class, 
    ];
    ```

3. Publique as configurações do pacote:

    ```bash
    php artisan vendor:publish --tag=navi-api-config
    ```

4. Configure as variáveis de ambiente no arquivo `.env`:

    ```env
    NAVI_API_URL=https://api.exemplo.com
    NAVI_API_TOKEN=seu_token_aqui
    NAVI_API_INTERNAL_URL=false
    ```
5. Execute o comando abaixo para aplicar as configurações:

    ```bash
    php artisan config:cache
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
        $cep = $naviAPIService->cep('#####-###');
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



___
___

## Contact & Support

[![LinkedIn](https://img.shields.io/badge/LinkedIn-000?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/luiz-fabiano-nogueira-b20875170/)
[![WhatsApp](https://img.shields.io/badge/WhatsApp-000?style=for-the-badge&logo=whatsapp&logoColor=white)](https://api.whatsapp.com/send?phone=5548991779088)
[![GitHub](https://img.shields.io/badge/GitHub-000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/LuizFabianoNogueira)
[![Packagist](https://img.shields.io/badge/Packagist-000?style=for-the-badge&logo=packagist&logoColor=white)](https://packagist.org/packages/luizfabianonogueira/)

📞 **Phone:** [+5548991779088](tel:+5548991779088)  
✉️ **Email:** [luizfabianonogueira@gmail.com](mailto:luizfabianonogueira@gmail.com)

---

### Support My Work

If you enjoyed this project and would like to support my work, any donation via Pix is greatly appreciated!  
Feel free to donate using one of the following Pix keys:

💳 **Email Pix Key:** `luizfabianonogueira@gmail.com`  
📱 **Phone Pix Key:** `+55 48 99177-9088`

Thank you for your support!
