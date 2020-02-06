<?php

namespace App\Miningcore;

class Pool
{
    /** @var string */
    protected $id;

    /** @var PoolCoin */
    protected $coin;

    /** @var PoolPort[] */
    protected $ports;

    /** @var PoolPaymentProcessing */
    protected $paymentProcessing;

    /** @var bool|null */
    protected $shareBasedBanning;

    /** @var int */
    protected $clientConnectionTimeout;

    /** @var int */
    protected $jobRebroadcastTimeout;

    /** @var int */
    protected $blockRefreshInterval;

    /** @var float */
    protected $poolFeePercent;

    /** @var string */
    protected $address;

    /** @var string */
    protected $addressInfoLink;

    /** @var PoolStats */
    protected $poolStats;

    /** @var PoolNetworkStats  */
    protected $networkStats;

    /** @var float */
    protected $totalPaid;

    /**
     * Pool constructor.
     * @param string $id
     * @param PoolCoin $coin
     * @param PoolPort[] $ports
     * @param PoolPaymentProcessing $paymentProcessing
     * @param bool|null $shareBasedBanning
     * @param int $clientConnectionTimeout
     * @param int $jobRebroadcastTimeout
     * @param int $blockRefreshInterval
     * @param float $poolFeePercent
     * @param string $address
     * @param string $addressInfoLink
     * @param PoolStats $poolStats
     * @param PoolNetworkStats $networkStats
     * @param float $totalPaid
     */
    public function __construct(string $id, PoolCoin $coin, array $ports, PoolPaymentProcessing $paymentProcessing, ?bool $shareBasedBanning, int $clientConnectionTimeout, int $jobRebroadcastTimeout, int $blockRefreshInterval, float $poolFeePercent, string $address, string $addressInfoLink, PoolStats $poolStats, PoolNetworkStats $networkStats, float $totalPaid)
    {
        $this->id = $id;
        $this->coin = $coin;
        $this->ports = $ports;
        $this->paymentProcessing = $paymentProcessing;
        $this->shareBasedBanning = $shareBasedBanning;
        $this->clientConnectionTimeout = $clientConnectionTimeout;
        $this->jobRebroadcastTimeout = $jobRebroadcastTimeout;
        $this->blockRefreshInterval = $blockRefreshInterval;
        $this->poolFeePercent = $poolFeePercent;
        $this->address = $address;
        $this->addressInfoLink = $addressInfoLink;
        $this->poolStats = $poolStats;
        $this->networkStats = $networkStats;
        $this->totalPaid = $totalPaid;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return PoolCoin
     */
    public function getCoin(): PoolCoin
    {
        return $this->coin;
    }

    /**
     * @param PoolCoin $coin
     */
    public function setCoin(PoolCoin $coin): void
    {
        $this->coin = $coin;
    }

    /**
     * @return PoolPort[]
     */
    public function getPorts(): array
    {
        return $this->ports;
    }

    /**
     * @param PoolPort[] $ports
     */
    public function setPorts(array $ports): void
    {
        $this->ports = $ports;
    }

    /**
     * @return PoolPaymentProcessing
     */
    public function getPaymentProcessing(): PoolPaymentProcessing
    {
        return $this->paymentProcessing;
    }

    /**
     * @param PoolPaymentProcessing $paymentProcessing
     */
    public function setPaymentProcessing(PoolPaymentProcessing $paymentProcessing): void
    {
        $this->paymentProcessing = $paymentProcessing;
    }

    /**
     * @return bool|null
     */
    public function getShareBasedBanning(): ?bool
    {
        return $this->shareBasedBanning;
    }

    /**
     * @param bool|null $shareBasedBanning
     */
    public function setShareBasedBanning(?bool $shareBasedBanning): void
    {
        $this->shareBasedBanning = $shareBasedBanning;
    }

    /**
     * @return int
     */
    public function getClientConnectionTimeout(): int
    {
        return $this->clientConnectionTimeout;
    }

    /**
     * @param int $clientConnectionTimeout
     */
    public function setClientConnectionTimeout(int $clientConnectionTimeout): void
    {
        $this->clientConnectionTimeout = $clientConnectionTimeout;
    }

    /**
     * @return int
     */
    public function getJobRebroadcastTimeout(): int
    {
        return $this->jobRebroadcastTimeout;
    }

    /**
     * @param int $jobRebroadcastTimeout
     */
    public function setJobRebroadcastTimeout(int $jobRebroadcastTimeout): void
    {
        $this->jobRebroadcastTimeout = $jobRebroadcastTimeout;
    }

    /**
     * @return int
     */
    public function getBlockRefreshInterval(): int
    {
        return $this->blockRefreshInterval;
    }

    /**
     * @param int $blockRefreshInterval
     */
    public function setBlockRefreshInterval(int $blockRefreshInterval): void
    {
        $this->blockRefreshInterval = $blockRefreshInterval;
    }

    /**
     * @return float
     */
    public function getPoolFeePercent(): float
    {
        return $this->poolFeePercent;
    }

    /**
     * @param float $poolFeePercent
     */
    public function setPoolFeePercent(float $poolFeePercent): void
    {
        $this->poolFeePercent = $poolFeePercent;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getAddressInfoLink(): string
    {
        return $this->addressInfoLink;
    }

    /**
     * @param string $addressInfoLink
     */
    public function setAddressInfoLink(string $addressInfoLink): void
    {
        $this->addressInfoLink = $addressInfoLink;
    }

    /**
     * @return PoolStats
     */
    public function getPoolStats(): PoolStats
    {
        return $this->poolStats;
    }

    /**
     * @param PoolStats $poolStats
     */
    public function setPoolStats(PoolStats $poolStats): void
    {
        $this->poolStats = $poolStats;
    }

    /**
     * @return PoolNetworkStats
     */
    public function getNetworkStats(): PoolNetworkStats
    {
        return $this->networkStats;
    }

    /**
     * @param PoolNetworkStats $networkStats
     */
    public function setNetworkStats(PoolNetworkStats $networkStats): void
    {
        $this->networkStats = $networkStats;
    }

    /**
     * @return float
     */
    public function getTotalPaid(): float
    {
        return $this->totalPaid;
    }

    /**
     * @param float $totalPaid
     */
    public function setTotalPaid(float $totalPaid): void
    {
        $this->totalPaid = $totalPaid;
    }
}
