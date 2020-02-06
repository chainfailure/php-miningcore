<?php

namespace App\Miningcore\Factories;

use App\Miningcore\Pool;
use App\Miningcore\PoolCoin;
use App\Miningcore\PoolNetworkStats;
use App\Miningcore\PoolPaymentProcessing;
use App\Miningcore\PoolStats;
use GuzzleHttp\Psr7\Response;

class PoolFactory
{
    /**
     * Maps a JSON response to pool objects.
     *
     * @param Response $response
     * @return Pool[]
     */
    public function fromResponse(Response $response): array
    {
        $decoded = json_decode((string) $response->getBody());

        return array_map(function ($entry) {
            return $this->mapEntry($entry);
        }, $decoded->pools);
    }

    /**
     * Maps a single entry in the pool listing response to a pool object.
     *
     * @param $entry
     * @return Pool
     */
    protected function mapEntry($entry): Pool
    {
        $coin = new PoolCoin(
            $entry->coin->type,
            $entry->coin->name,
            $entry->coin->family,
            $entry->coin->algorithm,
        );

        $paymentProcessing = new PoolPaymentProcessing(
            $entry->paymentProcessing->enabled,
            $entry->paymentProcessing->minimumPayment,
            $entry->paymentProcessing->payoutScheme,
        );

        $stats = new PoolStats(
            $entry->poolStats->lastPoolBlockTime,
            $entry->poolStats->connectedMiners,
            $entry->poolStats->poolHashrate,
            $entry->poolStats->sharesPerSecond,
        );

        $networkStats = new PoolNetworkStats(
            $entry->networkStats->networkType,
            $entry->networkStats->networkHashrate,
            $entry->networkStats->networkDifficulty,
            $entry->networkStats->nextNetworkTarget,
            $entry->networkStats->nextNetworkBits,
            $entry->networkStats->lastNetworkBlockTime,
            $entry->networkStats->blockHeight,
            $entry->networkStats->connectedPeers,
            $entry->networkStats->rewardType,
        );

        return new Pool(
            $entry->id,
            $coin,
            [],
            $paymentProcessing,
            $entry->shareBasedBanning,
            $entry->clientConnectionTimeout,
            $entry->jobRebroadcastTimeout,
            $entry->blockRefreshInterval,
            $entry->poolFeePercent,
            $entry->address,
            $entry->addressInfoLink,
            $stats,
            $networkStats,
            $entry->totalPaid
        );
    }
}
