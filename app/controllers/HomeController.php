<?php
class HomeController extends Controller
{
    
    public function index($params) {

        $view = new PageView('home');
        
        $view->render([
            "titrePage" => "Bienvenue sur eReserv"
        ]);
    }

    public function reservation($params) {

        $view = new PageView('reservation');

        $salles = Salle::all();
        
        $view->render([
            "titrePage" => "Réservation d'une salle",
            "salles" => $salles
        ]);
    }

    public function suivre($params) {

        $view = new PageView('suivre');
        
        $view->render([
            "titrePage" => "Suivi de demande"
        ]);
    }

    public function disponibilite($params) {

        extract($params);

        $reservations = Reservation::where("salle_id", "=", $id);

        $view = new PageView('disponibilite');
        
        $view->render([
            "titrePage" => "Disponibilité de la salle",
            "reservations" => $reservations
        ]);
    }

    public function reserverSalle($params) {

        extract($params);

        $view = new PageView('reserverSalle');
        
        $view->render([
            "salle_id" => $id,
            "titrePage" => "Réservation"
        ]);
    }

}
