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
        if (config('naviapi.internal_url')) {
            return (new NaviAPIService())->cep($cep);
        }
        return response()->json(['message' => 'Internal URL not configured'], 500);
    }

    /**
     * @param Request $request
     * @param $cpf
     * @return null
     * @throws ConnectionException
     */
    public function cpf(Request $request, $cpf)
    {
        if (config('naviapi.internal_url')) {
            return (new NaviAPIService())->cpf($cpf);
        }
        return response()->json(['message' => 'Internal URL not configured'], 500);
    }

    /**
     * @param Request $request
     * @param $cnpj
     * @return null
     * @throws ConnectionException
     */
    public function cnpj(Request $request, $cnpj)
    {
        if (config('naviapi.internal_url')) {
            return (new NaviAPIService())->cnpj($cnpj);
        }
        return response()->json(['message' => 'Internal URL not configured'], 500);
    }
}
