CREATE DATABASE Traumato;

USE Traumato;

CREATE TABLE Utilisateur(
    id int not null auto_increment,
    username varchar(255),
    password varchar(255),
    two_fa varchar(255),
    role varchar(255) not null,
    nom varchar(255) not null,
    prenom varchar(255) not null,
    email varchar(255),
    telephone varchar(255),
    date_naissance date,
    specialite varchar(255),
    PRIMARY KEY(id)
);

CREATE TABLE RDV (
    id int primary key auto_increment not null,
    date_rdv date not null,
    maladie varchar(255) not null,
    utilisateur_id int not null,
    foreign key(utilisateur_id) references Utilisateur(id)
);
