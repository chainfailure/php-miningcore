<?php


namespace App\MiningPool;


class PoolCoin
{
    /** @var string */
    protected $type;

    /** @var string */
    protected $name;

    /** @var string */
    protected $family;

    /** @var string */
    protected $algorithm;

    /**
     * PoolCoin constructor.
     * @param string $type
     * @param string $name
     * @param string $family
     * @param string $algorithm
     */
    public function __construct(string $type, string $name, string $family, string $algorithm)
    {
        $this->type = $type;
        $this->name = $name;
        $this->family = $family;
        $this->algorithm = $algorithm;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFamily(): string
    {
        return $this->family;
    }

    /**
     * @param string $family
     */
    public function setFamily(string $family): void
    {
        $this->family = $family;
    }

    /**
     * @return string
     */
    public function getAlgorithm(): string
    {
        return $this->algorithm;
    }

    /**
     * @param string $algorithm
     */
    public function setAlgorithm(string $algorithm): void
    {
        $this->algorithm = $algorithm;
    }
}
