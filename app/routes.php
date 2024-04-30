<?php

    Router::setRoute("/", "HomeController", "index");
    Router::setRoute("/home", "HomeController", "index");
    Router::setRoute("/reserver", "HomeController", "reserver");
    Router::setRoute("/disponibilite/([0-9]+)", "HomeController", "disponibilite", 'id');
    Router::setRoute("/reserver-salle/([0-9]+)", "HomeController", "reserverSalle", 'id');
    Router::setRoute("/suivre", "HomeController", "suivre");
    // Router::setRoute("/reserver", "ReservationController", "reserver");
    Router::setRoute("/salles", "SalleController", "salles");
    Router::setRoute("/reservations", "ReservationController", "reservations");