<?php


class SchoolTask
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $duration;

    public function __construct($description, $duration)
    {
        $this->description = $description;
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }
}
