<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelCarte');
RequirePage::requireModel('ModelCategorie');
RequirePage::requireModel('ModelCollection');

class ControllerCarte{

    public function index(){
            $carte = new ModelCarte;
            $select = $carte->select();
            $categorie = new ModelCategorie;
            $selectCategorie = $categorie->select("categorie");
            $collection = new ModelCollection;
            $selectCollection = $collection->select("collection");
            twig::render("carte-index.php", ['cartes' => $select, 'categories' => $selectCategorie, 'collections' => $selectCollection, 'carte_list' => "Liste des Cartes"]);
    }

    public function create(){
       CheckSession::sessionAuth();
       twig::render('carte-create.php');
    }

    public function store(){
        $carte = new ModelCarte;
        $insertCarte = $carte->insert($_POST);
       requirePage::redirectPage('carte');


    }

    public function show($id){
        $carte = new ModelCarte;
        $selectCarte = $carte->selectId($id);
        $categorie = new ModelCategorie;
        $selectCategorie = $categorie->select("categorie");
        $collection = new ModelCollection;
        $selectCollection = $collection->select("collection");
        twig::render('carte-show.php', ['carte' => $selectCarte, 'categories' => $selectCategorie, 'collections' => $selectCollection]);
    }

    public function achat($id){

        $carte = new ModelCarte;
        $selectCarte = $carte->selectId($id);
        $categorie = new ModelCategorie;
        $selectCategorie = $categorie->select("categorie");
        $collection = new ModelCollection;
        $selectCollection = $collection->select("collection");
        twig::render('carte-achat.php', ['carte' => $selectCarte, 'categories' => $selectCategorie, 'collections' => $selectCollection]);
    }

    public function edit($id){
        $carte = new ModelCarte;
        $selectCarte = $carte->selectId($id);
        $categorie = new ModelCategorie;
        $selectCategorie = $categorie->select("categorie");
        $collection = new ModelCollection;
        $selectCollection = $collection->select("collection");
        twig::render('carte-edit.php', ['carte' => $selectCarte, 'categories' => $selectCategorie, 'collections' => $selectCollection]);
    }

    public function update(){
            $carte = new ModelCarte;
            $update = $carte->update($_POST);
            RequirePage::redirectPage('carte/show/'.$_POST['id']);
            $categorie = new ModelCategorie;
            $selectCategorie = $categorie->select("categorie");
            $collection = new ModelCollection;
            $selectCollection = $collection->select("collection");
            twig::render('carte-edit.php', ['errors'=>$errors, 'carte'=>$_POST, 'categories' => $selectCategorie, 'collections' => $selectCollection]);
        }

    public function delete(){
        $carte = new ModelCarte;
        $delete = $carte->delete($_POST['id']);
        RequirePage::redirectPage('carte');
    }
}
?>
