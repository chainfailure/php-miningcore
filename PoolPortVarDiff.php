<?php


namespace App\MiningPool;


class PoolPortVarDiff
{
    /** @var float */
    protected $minDiff;

    /** @var float|null */
    protected $maxDiff;

    /** @var int */
    protected $maxDelta;

    /** @var int */
    protected $targetTime;

    /** @var int */
    protected $retargetTime;

    /** @var int */
    protected $variancePercent;

    /**
     * PoolPortVarDiff constructor.
     * @param float $minDiff
     * @param float|null $maxDiff
     * @param int $maxDelta
     * @param int $targetTime
     * @param int $retargetTime
     * @param int $variancePercent
     */
    public function __construct(float $minDiff, ?float $maxDiff, int $maxDelta, int $targetTime, int $retargetTime, int $variancePercent)
    {
        $this->minDiff = $minDiff;
        $this->maxDiff = $maxDiff;
        $this->maxDelta = $maxDelta;
        $this->targetTime = $targetTime;
        $this->retargetTime = $retargetTime;
        $this->variancePercent = $variancePercent;
    }

    /**
     * @return float
     */
    public function getMinDiff(): float
    {
        return $this->minDiff;
    }

    /**
     * @param float $minDiff
     */
    public function setMinDiff(float $minDiff): void
    {
        $this->minDiff = $minDiff;
    }

    /**
     * @return float|null
     */
    public function getMaxDiff(): ?float
    {
        return $this->maxDiff;
    }

    /**
     * @param float|null $maxDiff
     */
    public function setMaxDiff(?float $maxDiff): void
    {
        $this->maxDiff = $maxDiff;
    }

    /**
     * @return int
     */
    public function getMaxDelta(): int
    {
        return $this->maxDelta;
    }

    /**
     * @param int $maxDelta
     */
    public function setMaxDelta(int $maxDelta): void
    {
        $this->maxDelta = $maxDelta;
    }

    /**
     * @return int
     */
    public function getTargetTime(): int
    {
        return $this->targetTime;
    }

    /**
     * @param int $targetTime
     */
    public function setTargetTime(int $targetTime): void
    {
        $this->targetTime = $targetTime;
    }

    /**
     * @return int
     */
    public function getRetargetTime(): int
    {
        return $this->retargetTime;
    }

    /**
     * @param int $retargetTime
     */
    public function setRetargetTime(int $retargetTime): void
    {
        $this->retargetTime = $retargetTime;
    }

    /**
     * @return int
     */
    public function getVariancePercent(): int
    {
        return $this->variancePercent;
    }

    /**
     * @param int $variancePercent
     */
    public function setVariancePercent(int $variancePercent): void
    {
        $this->variancePercent = $variancePercent;
    }
}
