<?php
abstract class Personne extends Model{
    protected int $id;
    protected string $nomComplet;
    protected static string $role; 
    //Attribut de classes ou static
    private static int $nbrePersonne;


    //le constructeur
    public function __construct()
    {
        parent::$table="personne";
    }
    //les getters
    public function getId():int{
        return $this->id; 
    }
    public function getNomComplet():string{
        return $this->nomComplet; 
    }
    public static function getNbrePersonne():int{
        return selt::$nbrePersonne;
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
    public function getRole()
    {
        return $this->role;
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
    //la redefinition
    // public static function findAll():array{
    //     $sql="select * from personne where role like '".self::$role."'";
    //     return[];
    // }
}