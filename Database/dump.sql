CREATE DATABASE Traumato;

USE Traumato;

/* Heroku ClearDB database

USE heroku_b36365ebf01a860;

*/

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

INSERT INTO utilisateur(username, password, two_fa, role, nom, prenom, email, telephone, date_naissance, specialite) VALUES ('aymenBenadra', 'aymben123', '', 'medecin', 'Benadra', 'Mohammed-Aymen', 'aymanbenadra16@gmail.com', '06XXXXXXXX', '2000-06-20', 'TSPT'), ('rahbani', 'rahbani123', '', 'medecin', 'Rahbani', 'Rafik', 'rahbani@gmail.com', '06XXXXXXXX', '1997-07-12', 'CAMH');
