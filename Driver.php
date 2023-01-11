<?php
class Driver extends Person {

    protected string $experience;
    protected string $fio;
    protected int $age;

    /**
     * @param string $experience
     * @param string $fio
     * @param int $age
     */
    public function __construct(string $experience, string $fio, int $age)
    {
        $this->experience = $experience;
        $this->fio = $fio;
        $this->age = $age;
    }


    function __toString(){
        return $this->experience." ".$this->fio." ".$this->age;
    }
}