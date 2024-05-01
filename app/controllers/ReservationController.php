<?php
class ReservationController extends Controller
{
    
    public function index($params) {

        // $view = new PageView('reservations');
        
        // $view->render([
        //     "titrePage" => "Gestion des reservations",
        //     "attributs" => Reservation::attributs(),
        // ]);

        $view = new CRUDView('crud');
        
        $view->render([
            "titrePage" => "Gestion des réservations",
            "attributs" => Reservation::attributs(),
            'entity' => Reservation::class,
        ]);
    }

    public function suivi ($params) {

        $data = file_get_contents('php://input');
        $data = json_decode($data, true);
        // echo "<pre>"; print_r($params);

        extract($data); // reference

        $reservation = Reservation::where("reference", "=", $reference);

        if($reservation) {
            $response = [
                "statut" => "OK",
                "data" => [
                    "salle" => Salle::find($reservation->getId()),
                    "reservation" => $reservation
                ]
            ];
        }
        else {
            $response = [
                "statut" => "NOT_FOUND",
                "data" => []
            ];
        }

        echo json_encode($response);

    }

    public function reserver ($params) {

        $data = file_get_contents('php://input');
        $data = json_decode($data, true);
        // echo "<pre>"; print_r($params);

        extract($data); // salle_id, date_debut, date_fin
        

        $reservation = Reservation::create($data);

        if($reservation) {
            $response = [
                "statut" => "OK",
                "data" => $reservation
            ];
        }
        else {
            $response = [
                "statut" => "CREATE_FAIL",
                "data" => []
            ];
        }

        echo json_encode($response);

    }

}
