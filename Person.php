<?php
class Person{
    protected string $fio;
    protected int $age;

    /**
     * @param $fio
     * @param $age
     */
    public function __construct($fio, $age)
    {
        $this->fio = $fio;
        $this->age = $age;
    }

    function __toString(){
        return $this->fio." ".$this->age;
    }
}