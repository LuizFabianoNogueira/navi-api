<?php

namespace LuizFabianoNogueira\NaviAPI\Lib;

use Illuminate\Config\Repository;
use Illuminate\Foundation\Application;

/**
 * Class NaviAPI
 */
class NaviAPI
{
    /**
     * @var string|Repository|Application|mixed|null
     */
    public string $url;

    /**
     * @var string|Repository|Application|mixed|null
     */
    public string $token;

    /**
     * @var array|string[]
     */
    public array $headers;

    /**
     * NaviAPI constructor.
     */
    public function __construct()
    {
        $this->url = config('naviapi.url');
        $this->token = config('naviapi.token');
        $this->headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->token,
        ];
    }

    /**
     * @return string
     */
    public function getURL() : string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }

    /**
     * @return array|string[]
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param $string
     * @return string
     */
    public function clearString($string): string
    {
        return preg_replace('/[^0-9]/', '', $string);
    }

}
