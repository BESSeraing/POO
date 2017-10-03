<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 26/09/17
 * Time: 11:57
 */

trait Adressable
{
    /**
     * @var string
     */ 
    protected $street;
    /**
     * @var string
     */
    protected $zip;
    /**
     * @var string
     */
    protected $city;

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip(string $zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }
    
    
    
    
}