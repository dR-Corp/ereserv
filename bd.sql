CREATE TABLE users (id int AUTO_INCREMENT PRIMARY KEY, nom varchar(255), username varchar(255), password varchar(255), role int);
CREATE TABLE salles (id int AUTO_INCREMENT PRIMARY KEY, nom varchar(255), capacité int, équipements text, photo text);
CREATE TABLE reservations (id int AUTO_INCREMENT PRIMARY KEY, salle_id int, date_debut date, date_fin date, référence varchar(255), statut varchar(255), FOREIGN KEY (salle_id) REFERENCES salles(id));