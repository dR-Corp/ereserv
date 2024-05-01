<?php
class UserController extends Controller
{
    
    public function index($params) {

        // $sous_programme = new SousProgramme();
        // $fillable = $sous_programme->fillable();
        // $attr = ['id', ...$fillable];

        $view = new CRUDView('crud');
        
        $view->render([
            "titrePage" => "Utilisateurs",
            "attributs" => User::attributs(),
            'entity' => User::class,
        ]);

    }

    
    public function login($params) {

        $view = new BlankView('login');
        
        $view->render([
            "title" => "eReserv | Page de connexion"
        ]);
    }

    
    public function log($params) {

        extract($params);

                

    }

}
