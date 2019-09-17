<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 10/09/19
 * Time: 11:20
 */

abstract class Personnage
{

    public const FORCE_LOW = 80;
    public const FORCE_MEDIUM = 90;
    public const FORCE_HIGH = 100;

    protected static $playersNumber = 0;

    protected $id;
    protected $name;
    protected $force;
    protected $xp;
    protected $degats;

    public function __construct(int $force, int $xp, int $degats, string $name)
    {
        $this->setForce($force);
        $this->setDegats($degats);
        $this->setXp($xp);
        $this->setName($name);
        self::$playersNumber ++;
    }

    public function __destruct()
    {
        self::$playersNumber --;
    }

    /**
     * @return mixed
     */
    public function getForce() : int
    {
        return $this->force;
    }

    /**
     * @param mixed $force
     */
    public function setForce($force): void
    {
        if ($force === self::FORCE_HIGH || $force === self::FORCE_MEDIUM || $force === self::FORCE_LOW){
            $this->force = $force;
        } else {
            throw new Exception("force doit être une des constantes de force");
        }
    }

    /**
     * @return mixed
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * @param mixed $xp
     */
    public function setXp($xp): void
    {
        $this->xp = $xp;
    }

    /**
     * @return mixed
     */
    public function getDegats()
    {
        return $this->degats;
    }

    /**
     * @param mixed $degats
     */
    public function setDegats($degats): void
    {
        $this->degats = $degats;
    }


    public function hit(Personnage $victime) : void {
        $victime->receiveDamages($this->force * $this->xp);
        $this->xp ++;
    }

    public function receiveDamages(int $value) : void {
        $this->degats += $value;
    }

    /**
     * @return int
     */
    public static function getPlayersNumber(): int
    {
        return self::$playersNumber;
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
    public function setId($id): void
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
    public function setName($name): void
    {
        $this->name = $name;
    }


    public abstract function speak(string $message) :void;

}