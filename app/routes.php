<?php

    Router::setRoute("/", "HomeController", "index");
    Router::setRoute("/home", "HomeController", "index");
    Router::setRoute("/reserver", "HomeController", "reserver");
    Router::setRoute("/disponibilite/([0-9]+)", "HomeController", "disponibilite", 'id');
    Router::setRoute("/reserver-salle/([0-9]+)", "HomeController", "reserverSalle", 'id');
    Router::setRoute("/suivre", "HomeController", "suivre");
    // Router::setRoute("/reserver", "ReservationController", "reserver");
    Router::setRoute("/salles", "SalleController", "index");
    Router::setRoute("/reservations", "ReservationController", "index");








    // LES ROUTES CONCERNANT LE CRUD ET LE SPP

    // Recuperation de donnees
    Router::setRoute("/data/(.+)", "Controller", "dataSPP", 'entity');
    // Récupérer une données
    Router::setRoute("/find/(.+)/([0-9]+)", "Controller", "find", 'entity,id');
    // Ajout de données
    Router::setRoute("/add/(.+)", "Controller", "add", 'entity');
    // Modification de donnees
    Router::setRoute("/edit/(.+)/([0-9]+)", "Controller", "edit", 'entity,id');
    // Suppression de donnees
    Router::setRoute("/del/(.+)/([0-9]+)", "Controller", "del", 'entity,id');
    // Filtre de donnees
    Router::setRoute("/filter/(.+)/(.+)/([0-9]*)", "Controller", "filter", 'entity,foreign_key,filter_id');