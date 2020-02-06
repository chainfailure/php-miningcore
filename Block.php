<?php


namespace App\Miningcore;


class Block
{
    /** @var int */
    protected $blockHeight;

    /** @var string */
    protected $status;

    /** @var float */
    protected $effort;

    /** @var float */
    protected $confirmationProgress;

    /** @var string */
    protected $transactionConfirmationData;

    /** @var float */
    protected $reward;

    /** @var string */
    protected $infoLink;

    /** @var string */
    protected $created;

    /**
     * Represents a block that was mined by a pool in the miningcore instance.
     *
     * @param int $blockHeight
     * @param string $status
     * @param float $effort
     * @param float $confirmationProgress
     * @param string $transactionConfirmationData
     * @param float $reward
     * @param string $infoLink
     * @param string $created
     */
    public function __construct(int $blockHeight, string $status, float $effort, float $confirmationProgress, string $transactionConfirmationData, float $reward, string $infoLink, string $created)
    {
        $this->blockHeight = $blockHeight;
        $this->status = $status;
        $this->effort = $effort;
        $this->confirmationProgress = $confirmationProgress;
        $this->transactionConfirmationData = $transactionConfirmationData;
        $this->reward = $reward;
        $this->infoLink = $infoLink;
        $this->created = $created;
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
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return float
     */
    public function getEffort(): float
    {
        return $this->effort;
    }

    /**
     * @param float $effort
     */
    public function setEffort(float $effort): void
    {
        $this->effort = $effort;
    }

    /**
     * @return float
     */
    public function getConfirmationProgress(): float
    {
        return $this->confirmationProgress;
    }

    /**
     * @param float $confirmationProgress
     */
    public function setConfirmationProgress(float $confirmationProgress): void
    {
        $this->confirmationProgress = $confirmationProgress;
    }

    /**
     * @return string
     */
    public function getTransactionConfirmationData(): string
    {
        return $this->transactionConfirmationData;
    }

    /**
     * @param string $transactionConfirmationData
     */
    public function setTransactionConfirmationData(string $transactionConfirmationData): void
    {
        $this->transactionConfirmationData = $transactionConfirmationData;
    }

    /**
     * @return float
     */
    public function getReward(): float
    {
        return $this->reward;
    }

    /**
     * @param float $reward
     */
    public function setReward(float $reward): void
    {
        $this->reward = $reward;
    }

    /**
     * @return string
     */
    public function getInfoLink(): string
    {
        return $this->infoLink;
    }

    /**
     * @param string $infoLink
     */
    public function setInfoLink(string $infoLink): void
    {
        $this->infoLink = $infoLink;
    }

    /**
     * @return string
     */
    public function getCreated(): string
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated(string $created): void
    {
        $this->created = $created;
    }
}
