<?php

namespace LuizFabianoNogueira\NaviAPI\Lib;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

/**
 * Class Cpf
 */
class Cpf extends NaviAPI
{
    /**
     * Search CPF
     *
     * @param $cpf
     * @return array|null
     * @throws ConnectionException
     */
    public function getCPF($cpf): array|null
    {
        $url = $this->getURL() . 'cpf/' . $this->clearString($cpf);
        $request = Http::withHeaders($this->getHeaders())->get($url);
        if ($request->getStatusCode() === 200 ||
            $request->getStatusCode() === 201 ||
            $request->getStatusCode() === 400 ||
            $request->getStatusCode() === 412) {
            return $request->json();
        }

        if ($request->getStatusCode() === 400) {
            throw new ConnectionException('Error NaviAPI - Verify URL ', $request->getStatusCode());
        }

        throw new ConnectionException('Error NaviAPI', $request->getStatusCode());
    }
}
