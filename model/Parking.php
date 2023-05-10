<?php
require_once 'db/connection.php';

class Parking {
    private $id;
    private $name;
    private $city;
    private $open;
    private $close;
    private $isFull;

    /**
     * @param $id
     * @param $name
     * @param $city
     * @param $open
     * @param $close
     * @param $isFull
     */
    public function __construct($id, $name, $city, $open, $close, $isFull)
    {
        $this->id = $id;
        $this->name = $name;
        $this->city = $city;
        $this->open = $open;
        $this->close = $close;
        $this->isFull = $isFull;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * @param mixed $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }

    /**
     * @return mixed
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * @param mixed $close
     */
    public function setClose($close)
    {
        $this->close = $close;
    }

    /**
     * @return mixed
     */
    public function getIsFull()
    {
        return $this->isFull;
    }

    /**
     * @param mixed $isFull
     */
    public function setIsFull($isFull)
    {
        $this->isFull = $isFull;
    }

}
