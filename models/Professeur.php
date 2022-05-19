<?php
namespace App\Model;
use App\Core\DataBase;
class Professeur extends Personne {

    //fonctions navigationels
    //ManyToMany avec classe
    private string $grade;
    // private string $adresse;
    public function __construct(){
        parent::$role = "ROLE_PROFESSEUR";  
     }

    public function classes():array{
        return [];
    }
    public static function getRole()
    {
        return self::$role='ROLE_PROFESSEUR';
    }
    


    
    public function update():int{
        return 0;
    }
    
    // public function findAll():array{
    //     return[];
    // }
    
    
//insert()
//delete()
//update()

//select()
//selectAll() select * from table;
//selectById() select * from table where id=1;



    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }
    
    public function insert():int{
        
       $db=parent::database();
       
        $db->connexionDB();
        //Requete non préparer est une requete dont la variable est injecter lors de l'écriture de la requete
       $sql="INSERT INTO personne (`nom_complet`,`role`,`grade`) VALUES (?,?,?)";
    
        $result=$db->executeUpdate($sql,[$this->nomComplet,parent::$role,$this->grade]);
        $db->closeConnexion(); 
        return $result;
      
    }
} 