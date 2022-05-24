<?php
namespace App\Model;
use App\Core\Model;
class Classe extends Model {

    //fonctions navigationels
    //ManyToOne avec professeur
    private int $id;
    private string $libele;
    private string $filiere;
    private string $niveau;
   
    
    public function professeurs():array|null{
        $sql="select ........";
        return parent::findBy($sql,[$this->id]);
        
    }
    public function etudiant():Etudiant{
        return new Etudiant();
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

    /**
     * Get the value of libele
     */ 
    public function getLibele()
    {
        return $this->libele;
    }

    /**
     * Set the value of libele
     *
     * @return  self
     */ 
    public function setLibele($libele)
    {
        $this->libele = $libele;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function insert():int{
        
        $db=parent::database();
        
         $db->connexionDB();
         //Requete non préparer est une requete dont la variable est injecter lors de l'écriture de la requete
        $sql="INSERT INTO classe (`libele`,`filiere`,`niveau`) VALUES (?,?,?)";
     
         $result=$db->executeUpdate($sql,[$this->libele,$this->filiere,$this->niveau]);
        
         $db->closeConnexion(); 
         return $result;
       
     }
     public function update():int{
        $db=parent::database();
         $db->connexionDB();

        $sql= 'UPDATE classe SET libele = :libele, filiere = :filiere, niveau = :niveau WHERE id = :id';
        $data=[ 'id' => $this->id,
        'libele' => $this->libele,
        'filiere' => $this->filiere,
        'niveau' => $this->niveau];
        $result=$db->executeUpdate($sql,$data);
         $db->closeConnexion(); 

        // $sql="INSERT INTO classe (`libele`,`filiere`,`niveau`) VALUES (?,?,?)";
        // $rql=Update classe set Téléphone=’772062042’, Adresse=’Parcelles’where Matricule=’004A3’ ;
        return $result;
    }
}