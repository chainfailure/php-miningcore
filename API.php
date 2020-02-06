<?php

namespace App\Miningcore;

use GuzzleHttp\Client;
use App\Miningcore\Factories\PoolFactory;

/**
 * Represents an active instance of Miningcore
 * @package App\Miningcore\Miningcore
 */
class API
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
     * Returns a list of all pools currently running on the miningcore instance.
     *
     * @return Pool[]
     */
    public function getPools(): array
    {
        $resp = $this->httpClient->get('/api/pools');

        if ($resp->getStatusCode() !== 200) {
            // TODO: Handle API downtime
        }

        return $this->poolFactory->fromResponse($resp);
    }

    /**
     * Fires a request to determine if the mining pool is currently active and not returning any errors.
     *
     * @return bool
     */
    public function isAlive(): bool
    {
        $resp = $this->httpClient->get('/api/pools');

        return $resp->getStatusCode() === 200;
    }
}
