<?php

namespace App\MiningPool\API;

use GuzzleHttp\Client;

/**
 * Represents an active instance of Miningcore
 * @package App\MiningPool\Miningcore
 */
class MiningCore
{
    /** @var Client */
    protected $httpClient;

    /** @var PoolFactory */
    protected $poolFactory;

    /**
     * @param Client $httpClient
     * @param PoolFactory $poolFactory
     */
    public function __construct(Client $httpClient, PoolFactory $poolFactory)
    {
        $this->httpClient = $httpClient;
        $this->poolFactory = $poolFactory;
    }

    /**
     * @return Pool[]
     */
    public function getPools(): array
    {
        $resp = $this->httpClient->get('/api/pools');

        if ($resp->getStatusCode() !== 200) {
            // Handle API downtime
        }

        return $this->poolFactory->fromResponse($resp);
    }

    public function isAlive(): bool
    {
        $resp = $this->httpClient->
    }
}
