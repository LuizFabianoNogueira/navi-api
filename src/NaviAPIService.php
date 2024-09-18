<?php

namespace LuizFabianoNogueira\NaviAPI;

use Illuminate\Http\Client\ConnectionException;
use LuizFabianoNogueira\NaviAPI\Lib\Cep;
use LuizFabianoNogueira\NaviAPI\Lib\Cnpj;
use LuizFabianoNogueira\NaviAPI\Lib\Cpf;

class NaviAPIService
{
    /**
     * @param $cep
     * @return array
     * @throws ConnectionException
     */
    public function cep($cep): array
    {
        return (new Cep())->getCEP($cep);
    }

    /**
     * @param $cpf
     * @return array
     * @throws ConnectionException
     */
    public function cpf($cpf): array
    {
        return (new Cpf())->getCPF($cpf);
    }

    /**
     * @param $cnpj
     * @return array
     * @throws ConnectionException
     */
    public function cnpj($cnpj): array
    {
        return (new Cnpj())->getCNPJ($cnpj);
    }
}
