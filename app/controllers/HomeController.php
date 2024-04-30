<?php
class HomeController extends Controller
{
    
    public function index($params) {

        $view = new PageView('home');
        
        $view->render([
            "titrePage" => "Bienvenue sur eReserv"
        ]);
    }

    public function reserver($params) {

        $view = new PageView('reserver');
        
        $view->render([
            "titrePage" => "Réservation d'une salle"
        ]);
    }

    public function suivre($params) {

        $view = new PageView('suivre');
        
        $view->render([
            "titrePage" => "Suivi de demande"
        ]);
    }

    public function disponibilite($params) {

        $view = new PageView('disponibilite');
        
        $view->render([
            "titrePage" => "Disponibilité de la salle"
        ]);
    }

    public function reserverSalle($params) {

        $view = new PageView('reserverSalle');
        
        $view->render([
            "titrePage" => "Réservation"
        ]);
    }

}
