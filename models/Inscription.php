<?php
class Inscription extends Model{
    //les atributs d'instance
    //les atributs de classes sont static
    private int $id;
    //les atributs de classes
    public function __construct()
    {
        self::$table="classe";
    }
    //ManyToOne => AC
    public function ac():AC{
        $sql="select p.* from inscription i,personne p
                                 where p.id=i.ac_id 
                                 and role like 'ROLE_AC'
                                 and i.id=".$this->id;
        return new AC();
    }
    //ManyToOne => AnneeScolaire
    public function anneeScolaire():AC{
        $sql="select a.* from ann_scolaire a,inscription i
        where a.id=i.annee_id 
        and role like 'ROLE_AC'
        and i.id=".$this->id;
        return new anneescolaire();
    }
} 