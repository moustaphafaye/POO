<?php
class Inscription {
    //les atributs d'instance
    //les atributs de classes sont static
    
    //les atributs de classes

    //ManyToOne => AC
    public function ac():AC{
        return new AC();
    }
    //ManyToOne => AnneeScolaire
    public function anneeScolaire():AC{
        return new anneescolaire();
    }
} 