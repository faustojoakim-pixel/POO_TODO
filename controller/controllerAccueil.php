<?php
include_once('../TODO/model.php');
include_once('../TODO/view.php');


class controllerAccueil{
    
    private viewtodos $view;
    private Todo $model;

    public function __construct(viewtodos $newView, Todo $newModel){
        $this->view = $newView;
        $this->model = $newModel;
    }

    public function displayAccueil(){
        try{
            //A. Instancier (construire) un objet PDO
            $pdo = new PDO('mysql:host=localhost;dbname=todos','root','root',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

            //B. Préparer la requête SELECT
            $request = $pdo->prepare('SELECT u.firstname, u.lastname, u.email FROM users u');

            //C. Exécuter la requête
            $request->execute();

            //D. Récupérer le tableau de données renvoyé par la BDD
            $data = $request->fetchAll(PDO::FETCH_ASSOC);

            //E. Passer les données à la vue
            $this->view->setData($data);
        }catch(EXCEPTION $error){
            die($error->getMessage());
        }
    }
   
}







?>