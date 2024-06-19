CREATE DATABASE gestion_joueurs;
USE gestion_joueurs;

CREATE TABLE joueurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    position VARCHAR(50) NOT NULL
);
