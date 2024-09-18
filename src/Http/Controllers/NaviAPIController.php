<?php

namespace LuizFabianoNogueira\NaviAPI\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;
use LuizFabianoNogueira\NaviAPI\NaviAPIService;

class NaviAPIController extends Controller
{
    /**
     * @param Request $request
     * @param $cep
     * @return null
     * @throws ConnectionException
     */
    public function cep(Request $request, $cep)
    {
        return (new NaviAPIService())->cep($cep);
    }

    /**
     * @param Request $request
     * @param $cpf
     * @return null
     * @throws ConnectionException
     */
    public function cpf(Request $request, $cpf)
    {
        return (new NaviAPIService())->cpf($cpf);
    }

    /**
     * @param Request $request
     * @param $cnpj
     * @return null
     * @throws ConnectionException
     */
    public function cnpj(Request $request, $cnpj)
    {
        return (new NaviAPIService())->cnpj($cnpj);
    }
}
