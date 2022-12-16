<?php

class ModelCarte extends Crud {

    protected $table = 'carte';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nomJoueur', 'equipe', 'quantite', 'prix', 'categorie_id', 'collection_id'];

    
}

?>