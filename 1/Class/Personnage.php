<?php

/**
 * Created by PhpStorm.
 * User: demo
 * Date: 19/09/17
 * Time: 9:46
 */
abstract class Personnage
{
    use Adressable;
    
    const LOW_STRENGTH = 10;
    const MID_STRENGTH = 50;
    const HIGH_STRENGTH = 100;

    const PERSONNAGE_TYPE = 'Personnage';
    /**
     * @var integer
     */
    protected $id;
    
    
    public static $instanceNumber = 0;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var integer
     */
    protected $strength;

    /**
     * @var integer
     */
    protected $xp = 0;
    
    /**
     * @var integer
     */
    protected $damage = 0;

    /**
     * @var string
     */
    protected $type;

    /**
     * Personnage constructor.
     * @param string $name
     * @param int $xp
     * @param int $damage
     */
    public function __construct($name=null,$strength=self::LOW_STRENGTH, $xp = 0, $damage = 0)
    {
        $this->name = $name;
        $this->xp = $xp;
        $this->damage = $damage;
        $this->setStrength($strength); // On se sert du setter pour profiter des avantages de l'encapsulation
        self::$instanceNumber ++;
        $this->type = self::PERSONNAGE_TYPE;
        
        $this->street = 'backer street';
        
    }
    
    public function hydrate($dataArray){
        foreach ($dataArray as $dataKey =>$dataValue){
            if (method_exists($this,'set'.ucfirst($dataKey))){
                call_user_func([$this,'set'.ucfirst($dataKey)],$dataValue);
            }
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
    
    


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): Personnage
    {
        $this->name = $name;
        return $this;
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
     * @return Personnage
     */
    public function setXp(int $xp): Personnage
    {
        $this->xp = $xp;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @param int $damage
     * @return Personnage
     */
    public function setDamage(int $damage): Personnage
    {
        $this->damage = $damage;
        return $this;
    }
    
    public function increaseDamage(){
        $this->damage +=5;
    }
    
    
    public function attack(Personnage $target){
        $target->increaseDamage();
    }

    /**
     * @return int
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength(int $strength)
    {
        if ($strength === self::HIGH_STRENGTH || $strength === self::LOW_STRENGTH || $strength === self::MID_STRENGTH){
            $this->strength = $strength;
        }
        else{
            throw new Exception('strength must be set with one Personnage const');
        }
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    
    
    
    
    
    
    

}