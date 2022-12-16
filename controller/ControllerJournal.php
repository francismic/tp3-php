<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelUser');
RequirePage::requireModel('ModelJournal');


class ControllerJournal{

    public function index(){

        $info = new ModelJournal;
        $journal = $info->select();
       
        twig::render("journal-index.php", ['infos' => $journal]);
    }

    public function store(){
        $journal = new ModelJournal;
        $insert = $journal ->insert($_SESSION);
       }
}


?>