<?php


class Azubi
{
    private $id;

    private $name;

    private $ausbildungsStart;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getAusbildungsStart()
    {
        return $this->ausbildungsStart;
    }

    /**
     * @param mixed $ausbildungsStart
     */
    public function setAusbildungsStart($ausbildungsStart)
    {
        $this->ausbildungsStart = $ausbildungsStart;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
