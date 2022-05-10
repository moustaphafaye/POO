<?php
class Professeur extends Personne {

    //fonctions navigationels
    //ManyToMany avec classe
    private string $grade;
    // private string $adresse;
    public function __construct(){
        self::$role = "ROLE_PROFESSEUR";  
     }

    public function classes():array{
        return [];
    }
    public function insert():int{
        return 0; 
    }
    public function update():int{
        return 0;
    }
    public function delete():int{
        return 0; 
    }
    // public function findAll():array{
    //     return[];
    // }
    public function findById():objet|null{
        return null;
    }
    public function findBy(string $sql,array $data=null,$single=false ):objet|null|array{
        return null;
    }
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
    public static function findAll():array{
        $sql="select * from ".self::$table." where role like '".self::$role."'";
        echo $sql;
        return[];
    }
    
} 