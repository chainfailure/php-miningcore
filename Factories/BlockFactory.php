<?php

namespace App\Miningcore\Factories;

use App\Miningcore\Block;
use GuzzleHttp\Psr7\Response;

class BlockFactory
{
    /**
     * Maps a JSON response to block objects.
     *
     * @param Response $response
     * @return Block[]
     */
    public function fromResponse(Response $response): array
    {
        $decoded = json_decode((string) $response->getBody());

        return array_map(function ($entry) {
            return $this->mapEntry($entry);
        }, $decoded);
    }

    /**
     * Maps a single entry in the block listing response to a block object.
     *
     * @param $entry
     * @return Block
     */
    protected function mapEntry($entry): Block
    {
        return new Block(
            $entry->blockHeight,
            $entry->status,
            $entry->effort,
            $entry->confirmationProgress,
            $entry->transactionConfirmationData,
            $entry->reward,
            $entry->infoLink,
            $entry->created
        );
    }
}
