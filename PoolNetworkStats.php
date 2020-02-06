<?php


namespace App\Miningcore;


class PoolNetworkStats
{
    /** @var string */
    protected $networkType;

    /** @var float */
    protected $networkHashRate;

    /** @var float */
    protected $networkDifficulty;

    /** @var string */
    protected $nextNetworkTarget;

    /** @var string */
    protected $nextNetworkBits;

    /** @var string */
    protected $lastNetworkBlockTime;

    /** @var int */
    protected $blockHeight;

    /** @var int */
    protected $connectedPeers;

    /** @var string */
    protected $rewardType;

    /**
     * PoolNetworkStats constructor.
     * @param string $networkType
     * @param float $networkHashRate
     * @param float $networkDifficulty
     * @param string $nextNetworkTarget
     * @param string $nextNetworkBits
     * @param string $lastNetworkBlockTime
     * @param int $blockHeight
     * @param int $connectedPeers
     * @param string $rewardType
     */
    public function __construct(string $networkType, float $networkHashRate, float $networkDifficulty, string $nextNetworkTarget, string $nextNetworkBits, string $lastNetworkBlockTime, int $blockHeight, int $connectedPeers, string $rewardType)
    {
        $this->networkType = $networkType;
        $this->networkHashRate = $networkHashRate;
        $this->networkDifficulty = $networkDifficulty;
        $this->nextNetworkTarget = $nextNetworkTarget;
        $this->nextNetworkBits = $nextNetworkBits;
        $this->lastNetworkBlockTime = $lastNetworkBlockTime;
        $this->blockHeight = $blockHeight;
        $this->connectedPeers = $connectedPeers;
        $this->rewardType = $rewardType;
    }

    /**
     * @return string
     */
    public function getNetworkType(): string
    {
        return $this->networkType;
    }

    /**
     * @param string $networkType
     */
    public function setNetworkType(string $networkType): void
    {
        $this->networkType = $networkType;
    }

    /**
     * @return float
     */
    public function getNetworkHashRate(): float
    {
        return $this->networkHashRate;
    }

    /**
     * @param float $networkHashRate
     */
    public function setNetworkHashRate(float $networkHashRate): void
    {
        $this->networkHashRate = $networkHashRate;
    }

    /**
     * @return float
     */
    public function getNetworkDifficulty(): float
    {
        return $this->networkDifficulty;
    }

    /**
     * @param float $networkDifficulty
     */
    public function setNetworkDifficulty(float $networkDifficulty): void
    {
        $this->networkDifficulty = $networkDifficulty;
    }

    /**
     * @return string
     */
    public function getNextNetworkTarget(): string
    {
        return $this->nextNetworkTarget;
    }

    /**
     * @param string $nextNetworkTarget
     */
    public function setNextNetworkTarget(string $nextNetworkTarget): void
    {
        $this->nextNetworkTarget = $nextNetworkTarget;
    }

    /**
     * @return string
     */
    public function getNextNetworkBits(): string
    {
        return $this->nextNetworkBits;
    }

    /**
     * @param string $nextNetworkBits
     */
    public function setNextNetworkBits(string $nextNetworkBits): void
    {
        $this->nextNetworkBits = $nextNetworkBits;
    }

    /**
     * @return string
     */
    public function getLastNetworkBlockTime(): string
    {
        return $this->lastNetworkBlockTime;
    }

    /**
     * @param string $lastNetworkBlockTime
     */
    public function setLastNetworkBlockTime(string $lastNetworkBlockTime): void
    {
        $this->lastNetworkBlockTime = $lastNetworkBlockTime;
    }

    /**
     * @return int
     */
    public function getBlockHeight(): int
    {
        return $this->blockHeight;
    }

    /**
     * @param int $blockHeight
     */
    public function setBlockHeight(int $blockHeight): void
    {
        $this->blockHeight = $blockHeight;
    }

    /**
     * @return int
     */
    public function getConnectedPeers(): int
    {
        return $this->connectedPeers;
    }

    /**
     * @param int $connectedPeers
     */
    public function setConnectedPeers(int $connectedPeers): void
    {
        $this->connectedPeers = $connectedPeers;
    }

    /**
     * @return string
     */
    public function getRewardType(): string
    {
        return $this->rewardType;
    }

    /**
     * @param string $rewardType
     */
    public function setRewardType(string $rewardType): void
    {
        $this->rewardType = $rewardType;
    }
}
