<?php
class Lorry extends Car{
    protected int $carrying;
    protected int $brand;
    protected string $class;
    protected string $weight;
    protected Driver $driver;
    protected Engine $engine;

    /**
     * @param int $carrying
     * @param int $brand
     * @param string $class
     * @param string $weight
     * @param Driver $driver
     * @param Engine $engine
     */
    public function __construct(int $carrying, int $brand, string $class, string $weight, Driver $driver, Engine $engine)
    {
        $this->carrying = $carrying;
        $this->brand = $brand;
        $this->class = $class;
        $this->weight = $weight;
        $this->driver = $driver;
        $this->engine = $engine;
    }

    function __toString(){
        return $this->carrying." ".$this->brand." ".$this->class." ".$this->weight." ".$this->driver->__toString()." ".$this->engine->__toString();
    }
}