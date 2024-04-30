<?php
class RéservationController extends Controller
{
    
    public function index($params) {

        $view = new PageView('reservations');
        
        $view->render([
            "titrePage" => "Gestion des reservations"
        ]);
    }


}
