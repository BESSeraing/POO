<?php


class Personnage
{
    
    const FORCE_FORTE = 10;
    
    const FORCE_MOYENNE = 5;
    
    const FORCE_FAIBLE = 1;
    
    private $id;
    
    private $force = 1;
    
    private $xp = 0;
    
    private $degat = 0;
  
    private static $nombreDInstance =0;
    
    public function __construct($force,$xp = null)
    {
        self::$nombreDInstance ++;
        $this->setForce($force);
        if (null !== $xp){
            $this->setXp($xp);    
        }
    }


    public function frappe(Personnage $victime){
        $victime->setDegat($victime->getDegat()+$this->force);
    }
    
    
    /**
     * @param int $force
     * @throws Exception
     */
    public function setForce(int $force){
        if ($force != self::FORCE_FAIBLE && $force != self::FORCE_MOYENNE && $force != self::FORCE_FORTE){
            throw new Exception("Personnage::force doit être un entier entre 1 et 10");
        }
        $this->force = $force;
    }
    
    /**
     * @return int
     */
    public function getForce() : int{
        return $this->force;
    }

    

    /**
     * @return mixed
     */
    public function getDegat()
    {
        return $this->degat;
    }

    /**
     * @param mixed $degats
     */
    public function setDegat($degat)
    {
        if (!is_int($degat) || $degat <0 || $degat >100){
            throw new Exception("Personnage::degats doit être un entier entre 1 et 10");
        }
        $this->degat = $degat;
    }

    /**
     * @return int
     */
    public function getXp(): int
    {
        return $this->xp;
    }

    /**
     * @param int $xp
     */
    public function setXp(int $xp)
    {
        $this->xp = $xp;
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
    
    
    
    
    private function parler($message){
        echo $message.'<br>';
    }

    /**
     * @return int
     */
    public static function getNombreDInstance(): int
    {
        return self::$nombreDInstance;
    }
    
    
    
}