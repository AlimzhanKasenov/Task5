<?php
class SportCar extends Car{
    protected float $speed;
    protected int $brand;
    protected string $class;
    protected string $weight;
    protected Driver $driver;
    protected Engine $engine;

    /**
     * @param float $speed
     * @param int $brand
     * @param string $class
     * @param string $weight
     * @param Driver $driver
     * @param Engine $engine
     */
    public function __construct(float $speed, int $brand, string $class, string $weight, Driver $driver, Engine $engine)
    {
        $this->speed = $speed;
        $this->brand = $brand;
        $this->class = $class;
        $this->weight = $weight;
        $this->driver = $driver;
        $this->engine = $engine;
    }

    function __toString(){
        return $this->speed." ".$this->brand." ".$this->class." ".$this->weight." ".$this->driver->__toString()." ".$this->engine->__toString();
    }
}