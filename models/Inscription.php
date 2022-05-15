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
} 