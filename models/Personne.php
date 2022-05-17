<?php
namespace App\Model;
use App\Core\Model;
abstract class Personne extends Model{
    protected int $id;
    protected string $nomComplet;
    protected static string $role; 
    //Attribut de classes ou static
    private static int $nbrePersonne;

    //le constructeur
    public function __construct()
    {
       
    }

    //les getters
    public function getId():int{
        return $this->id; 
    }
    public function getNomComplet():string{
        return $this->nomComplet; 
    }
    public static function getNbrePersonne():int{
        return self::$nbrePersonne;
    }
    //les setters
    public function setId(int $id):self{
        $this->id=$id; 
        return $this;
    }
    public function setNomComplet(string $nomComplet):self{
        $this->nomComplet=$nomComplet;
        return $this;
    }
    public static function setNbrePersonne(int $nbrePersonne) :void{
        self::$nbrePersonne=$nbrePersonne;
    }

    /**
     * Get the value of role
     */ 
    public static function getRole()
    {
        return self::$role='';
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
    public static function findAll():array{
        $sql="select * from ".parent::table()." where role like ?"; 
        return parent::findBy($sql,[get_called_class()::getRole()]);
    }
}