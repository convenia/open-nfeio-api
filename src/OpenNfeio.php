<?php

namespace Convenia\OpenNfeio;

class OpenNfeio
{
    private $apiKey = null;
    private $baseUrl = 'http://open.nfe.io/v1/';
    private $url = null;
    private $ext = null;
    private $results = null;

    public function __construct($apiKey, $ext = null)
    {
        $this->apiKey = $apiKey;
        if ($ext !== null) {
            $this->ext = $ext;
        }
    }

    public function call($adress, $param)
    {
        $this->urlBuilder($adress, $param);
        $this->results = $this->apiGetResults();

        return $this;
    }

    public function urlBuilder($adress, $param)
    {
        $newUrl = '/'.$adress.'/'.$param;

        if ($this->url === null) {
            $newUrl = $this->baseUrl.$adress.'/'.$param;
        }
        $this->url = $newUrl;

        return $this->url;
    }

    public function __call($name, $parameters)
    {
        return $this->call($name, $parameters[0]);
    }

    public function get()
    {
        $return = $this->results;
        $this->clean();

        return $return;
    }

    public function apiGetResults()
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $this->url, [
            'query' => ['api_key' => $this->apiKey,
            ],
        ]);

        if ($res->hasHeader('Content-Length')) {
            $this->statusCode = $res->getStatusCode();
            $this->contentType = $res->getHeaderLine('content-type');

            return json_decode($res->getBody(), true);
        }
        throw new Exception('Invalid Function');
    }

    public function clean()
    {
        $this->apiKey = null;
        $this->baseUrl = 'http://open.nfe.io:443/v1/';
        $this->url = null;
        $this->ext = null;
        $this->results = null;
    }
}
