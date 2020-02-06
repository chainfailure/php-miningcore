<?php

namespace App\MiningPool\API;

use App\MiningPool\Pool;
use App\MiningPool\PoolCoin;
use App\MiningPool\PoolNetworkStats;
use App\MiningPool\PoolPaymentProcessing;
use App\MiningPool\PoolStats;
use GuzzleHttp\Psr7\Response;

class PoolFactory
{
    public function fromResponse(Response $response): array
    {
        $decoded = json_decode((string) $response->getBody());

        return array_map(function ($entry) {
            return $this->mapPoolEntry($entry);
        }, $decoded->pools);
    }

    protected function mapPoolEntry($entry): Pool
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

        dd($stats);

//        return new Pool(
//            $entry->id,
//        );
    }
}
