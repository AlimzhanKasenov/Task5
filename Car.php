<?php


class Car {
    protected int $brand;
    protected string $class;
    protected string $weight;
    protected Driver $driver;
    protected Engine $engine;

    /**
     * @param $brand
     * @param $class
     * @param $weight
     * @param $driver
     * @param $engine
     */
    public function __construct($brand, $class, $weight, $driver, $engine)
    {
        $this->brand = $brand;
        $this->class = $class;
        $this->weight = $weight;
        $this->driver = $driver;
        $this->engine = $engine;
    }

    function start(): void
    {
        echo "Поехали<br>";
    }
    function stop(): void
    {
        echo "Останавливаемся<br>";
    }

    function turnRight(): void
    {
        echo "Поворот на право<br>";
    }

    function turnLeft(): void
    {
        echo "Поворот на лево<br>";
    }

    function __toString(){
         return $this->brand." ".$this->class." ".$this->weight." ".$this->driver->__toString()." ".$this->engine->__toString();
    }

}