<?php

class ModelJournal extends Crud {

    protected $table = 'journal';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'date', 'addresseIP', 'userId'];
}

?>