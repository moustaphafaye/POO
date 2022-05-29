<?php
namespace App\Model;
use App\Core\Model; 
class Inscription extends Model{
    //les atributs d'instance
    //les atributs de classes sont static
    private int $id;
    //les atributs de classes
    public function __construct()
    {
        
    }
    public static function lesid(int $idac,int $idcl,int $idans,int $idet){
        $db=parent::database();
         $db->connexionDB();
        $sql="INSERT INTO inscription (`ac_id`,`classe_id`,`etudiant_id`,`annee_id`) VALUES (?,?,?,?)";
        $result=$db->executeUpdate($sql,[$idac,$idcl,$idans,$idet]);
        $db->closeConnexion(); 
        return $result;
    }
    //ManyToOne => AC
    public function ac():AC{
        $sql="select p.* from ".parent::table()."i,personne p
                                 where p.id=i.ac_id 
                                 and role like 'ROLE_AC'
                                 and i.id=?";
        return parent::findBy($sql,[$this->id]);

    }
    //ManyToOne => AnneeScolaire
    public function anneeScolaire():AnneeScolaire{
        $sql="select a.* from annee_scolaire a,inscription i
        where a.id=i.annee_id 
        and role like 'ROLE_AC'
        and i.id=?";
        return parent::findBy($sql,[$this->id]);
       
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
} 