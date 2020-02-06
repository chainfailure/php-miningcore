<?php


namespace App\Miningcore;


class PoolStats
{
    /** @var int|null */
    protected $lastPoolBlockTime;

    /** @var int */
    protected $connectedMiners;

    /** @var int */
    protected $poolHashRate;

    /** @var int */
    protected $sharesPerSecond;

    /**
     * PoolStats constructor.
     * @param int|null $lastPoolBlockTime
     * @param int $connectedMiners
     * @param int $poolHashRate
     * @param int $sharesPerSecond
     */
    public function __construct(?int $lastPoolBlockTime, int $connectedMiners, int $poolHashRate, int $sharesPerSecond)
    {
        $this->lastPoolBlockTime = $lastPoolBlockTime;
        $this->connectedMiners = $connectedMiners;
        $this->poolHashRate = $poolHashRate;
        $this->sharesPerSecond = $sharesPerSecond;
    }

    /**
     * @return int|null
     */
    public function getLastPoolBlockTime(): ?int
    {
        return $this->lastPoolBlockTime;
    }

    /**
     * @param int|null $lastPoolBlockTime
     */
    public function setLastPoolBlockTime(?int $lastPoolBlockTime): void
    {
        $this->lastPoolBlockTime = $lastPoolBlockTime;
    }

    /**
     * @return int
     */
    public function getConnectedMiners(): int
    {
        return $this->connectedMiners;
    }

    /**
     * @param int $connectedMiners
     */
    public function setConnectedMiners(int $connectedMiners): void
    {
        $this->connectedMiners = $connectedMiners;
    }

    /**
     * @return int
     */
    public function getPoolHashRate(): int
    {
        return $this->poolHashRate;
    }

    /**
     * @param int $poolHashRate
     */
    public function setPoolHashRate(int $poolHashRate): void
    {
        $this->poolHashRate = $poolHashRate;
    }

    /**
     * @return int
     */
    public function getSharesPerSecond(): int
    {
        return $this->sharesPerSecond;
    }

    /**
     * @param int $sharesPerSecond
     */
    public function setSharesPerSecond(int $sharesPerSecond): void
    {
        $this->sharesPerSecond = $sharesPerSecond;
    }
}
