<?php


class Engine{
    protected string $power;
    protected string $manufacturer;

    /**
     * @param $power
     * @param $manufacturer
     */
    public function __construct($power, $manufacturer)
    {
        $this->power = $power;
        $this->manufacturer = $manufacturer;
    }

    function __toString(){
        return $this->power." ".$this->manufacturer;
    }
}