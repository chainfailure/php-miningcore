<?php


namespace App\MiningPool;


class PoolPaymentProcessing
{
    /** @var bool */
    protected $enabled;

    /** @var float */
    protected $minimumPayment;

    /** @var string */
    protected $payoutScheme;

    /**
     * PoolPaymentProcessing constructor.
     * @param bool $enabled
     * @param float $minimumPayment
     * @param string $payoutScheme
     */
    public function __construct(bool $enabled, float $minimumPayment, string $payoutScheme)
    {
        $this->enabled = $enabled;
        $this->minimumPayment = $minimumPayment;
        $this->payoutScheme = $payoutScheme;
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * @return float
     */
    public function getMinimumPayment(): float
    {
        return $this->minimumPayment;
    }

    /**
     * @param float $minimumPayment
     */
    public function setMinimumPayment(float $minimumPayment): void
    {
        $this->minimumPayment = $minimumPayment;
    }

    /**
     * @return string
     */
    public function getPayoutScheme(): string
    {
        return $this->payoutScheme;
    }

    /**
     * @param string $payoutScheme
     */
    public function setPayoutScheme(string $payoutScheme): void
    {
        $this->payoutScheme = $payoutScheme;
    }
}
