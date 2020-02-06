<?php


namespace App\MiningPool;


class PoolPort
{
    /** @var string */
    protected $listenAddress;

    /** @var string|null */
    protected $name;

    /** @var float */
    protected $difficulty;

    /** @var bool */
    protected $tls;

    /** @var string */
    protected $tlsPfxFile;

    /** @var PoolPortVarDiff */
    protected $varDiff;

    /**
     * PoolPort constructor.
     * @param string $listenAddress
     * @param string|null $name
     * @param float $difficulty
     * @param bool $tls
     * @param string $tlsPfxFile
     * @param PoolPortVarDiff $varDiff
     */
    public function __construct(string $listenAddress, ?string $name, float $difficulty, bool $tls, string $tlsPfxFile, PoolPortVarDiff $varDiff)
    {
        $this->listenAddress = $listenAddress;
        $this->name = $name;
        $this->difficulty = $difficulty;
        $this->tls = $tls;
        $this->tlsPfxFile = $tlsPfxFile;
        $this->varDiff = $varDiff;
    }

    /**
     * @return string
     */
    public function getListenAddress(): string
    {
        return $this->listenAddress;
    }

    /**
     * @param string $listenAddress
     */
    public function setListenAddress(string $listenAddress): void
    {
        $this->listenAddress = $listenAddress;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getDifficulty(): float
    {
        return $this->difficulty;
    }

    /**
     * @param float $difficulty
     */
    public function setDifficulty(float $difficulty): void
    {
        $this->difficulty = $difficulty;
    }

    /**
     * @return bool
     */
    public function isTls(): bool
    {
        return $this->tls;
    }

    /**
     * @param bool $tls
     */
    public function setTls(bool $tls): void
    {
        $this->tls = $tls;
    }

    /**
     * @return string
     */
    public function getTlsPfxFile(): string
    {
        return $this->tlsPfxFile;
    }

    /**
     * @param string $tlsPfxFile
     */
    public function setTlsPfxFile(string $tlsPfxFile): void
    {
        $this->tlsPfxFile = $tlsPfxFile;
    }

    /**
     * @return PoolPortVarDiff
     */
    public function getVarDiff(): PoolPortVarDiff
    {
        return $this->varDiff;
    }

    /**
     * @param PoolPortVarDiff $varDiff
     */
    public function setVarDiff(PoolPortVarDiff $varDiff): void
    {
        $this->varDiff = $varDiff;
    }
}
