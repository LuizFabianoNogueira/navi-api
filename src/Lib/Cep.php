<?php

namespace LuizFabianoNogueira\NaviAPI\Lib;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

/**
 * Class Cep
 */
class Cep extends NaviAPI
{
    /**
     * Search CEP
     *
     * @param $cep
     * @return array|null
     * @throws ConnectionException
     */
    public function getCEP($cep): array|null
    {
        $url = $this->getURL() . 'cep/' . $this->clearString($cep);
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

        throw new ConnectionException('Error NaviAPI '.$request->getStatusCode(), $request->getStatusCode());
    }
}
