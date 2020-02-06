<?php

namespace App\Miningcore;

use GuzzleHttp\Client;
use App\Miningcore\Factories\PoolFactory;
use App\Miningcore\Factories\BlockFactory;

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

    /** @var BlockFactory */
    protected $blockFactory;

    /**
     * @param Client $httpClient
     * @param PoolFactory $poolFactory
     * @param BlockFactory $blockFactory
     */
    public function __construct(Client $httpClient, PoolFactory $poolFactory, BlockFactory $blockFactory)
    {
        $this->httpClient = $httpClient;
        $this->poolFactory = $poolFactory;
        $this->blockFactory = $blockFactory;
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
     * Fetches the blocks produced by a specific pool.
     *
     * @param Pool $pool
     * @return Block[]
     */
    public function getBlocks(Pool $pool): array
    {
        $resp = $this->httpClient->get('/api/pools/'.$pool->getId().'/blocks');

        if ($resp->getStatusCode() !== 200) {
            // TODO
        }

        return $this->blockFactory->fromResponse($resp);
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
