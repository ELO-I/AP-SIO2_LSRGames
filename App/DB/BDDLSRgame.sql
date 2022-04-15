DROP DATABASE IF EXISTS LSRdatabase;
CREATE DATABASE LSRdatabase;
USE LSRdatabase;

CREATE TABLE Salle (
idsalle int,
nom varchar(255),
description varchar(255),
image varchar(255)
) Engine InnoDB;

Insert into Salle values (1, 'Salle 1', 'Salle Effrayante', 'salle1.jpg');
Insert into Salle values (2, 'Salle 2', 'Salle de la peur', 'salle2.jpg');
Insert into Salle values (3, 'Salle 3', 'Salle de la mort', 'salle3.jpg');
Insert into Salle values (4, 'Salle 4', 'Salle de la gloire', 'salle4.jpg');

CREATE TABLE Partie (
idPartie int,
date date,
nbTablettes int,
resultat Boolean#true = victoire, false = defaite
) Engine InnoDB;

Insert into Partie values (1, '2018-01-01',3, true);
Insert into Partie values (2, '2018-01-02',2, false);
Insert into Partie values (3, '2018-01-03',8, true);
Insert into Partie values (4, '2018-01-04',2, false);

CREATE TABLE Joueur (
idJoueur int,
idClient int,
pseudo varchar(255),
score int
) Engine InnoDB;

insert into Joueur values (1, 1, 'Joueur 1', 777);
insert into Joueur values (2, 2, 'Joueur 2', 25);
insert into Joueur values (3, 3, 'Joueur 3', 902);
insert into Joueur values (4, 4, 'Joueur 4', 8);




CREATE table pays (
idpays varchar(255),
description varchar(255)
) Engine InnoDB;

insert into pays values ('France', '210 Escape Games ouvert à tous');
insert into pays values ('Allemagne', '45 Escape Games ouvert en Allemagne');
insert into pays values ('Espagne', '21 Escape Games ouvert en Espagne');
insert into pays values ('Suisse', '60 Escape Games ouvert en Suisse');


CREATE TABLE Tarification (
tarif int,
prix_joueur int,
nomoffre varchar(255)
) Engine InnoDB;

Insert into Tarification values (1, 37, 'Basic');
Insert into Tarification values (2, 32, 'Groupe d\'amis (+4)');
Insert into Tarification values (3, 29, 'Sortie de groupe (+ 10)');

CREATE TABLE Client (
idClient int,
nom varchar(50),
prenom varchar(50),
adresse varchar(100),
nb_parties int
) Engine InnoDB;

Insert into Client values (1, 'Dupont', 'Jean', '1 rue de la paix', 1);
Insert into Client values (2, 'Dupond', 'Jeanne', '2 rue de la paix', 2);
Insert into Client values (3, 'Dupont', 'Jeanne', '3 rue de la paix', 3);
Insert into Client values (4, 'Dupont', 'Jeanne', '4 rue de la paix', 4);
Insert into Client values (5, 'Dupont', 'Jeanne', '5 rue de la paix', 5);

CREATE TABLE faq (
idfaq int,
question varchar(300),
reponse varchar(1000)
) Engine InnoDB;

Insert into faq values (1, 'Quelle est la taille idéale d\'un groupe ?', 'Nous recommandons une taille de groupe de 4 à 6 personnes. De cette façon, chacun a quelque chose à faire et une agréable dynamique de groupe est créée.');
insert into faq values (2, ' A quel point avons-nous besoin d\'être en forme ?', 'Les jeux sont joués à pied. Les joueurs parcourent environ 2000 mètres en 150 minutes. Il s’agit donc plutôt d’une promenade et non d’une chasse trop sportive.Des demandes spéciales peuvent également être faites. Ensuite, nous rendons le parcours plus confortable ou plus sportif..');
insert into faq values (3, ' Les jeux sont-ils adaptés aux enfants ?', 'Pour les enfants de 10 à 12 ans, nous recommandons notre jeu « le portail magique ». Les enfants l’adorent ! Les tâches sont compréhensibles, le thème est approprié pour les enfants. L’accompagnement par un adulte est recommandé ! Pour les adolescents à partir de 14 ans, le jeu « Operation Mindfall » est déjà adapté.');

CREATE TABLE Information (
nom varchar(50),
adresse varchar(100),
tel varchar(50),
mail varchar(50),
site varchar(50),
facebook varchar(50),
twitter varchar(50),
instagram varchar(50),
linkedin varchar(50),
logo varchar(50),
about varchar(1000)
) Engine InnoDB;

insert into information values('LSRGAME', '27 faubourg des balmettes', '0450450520', 'contact@lsrgame.fr', 'www.lsrgames.fr', 'facebook.com/lsrgames', 'twitter.com/lsrgames', 'instagram.com/lsrgames', 'linkedin.com/lsrgames', 'logo.jpg', 'Blablabla On est les meilleurs');

CREATE TABLE Avis (
idAvis int,
idClient int,
idPartie int,
idsalle int,
photos varchar(255),
commentaire varchar(1000)
) Engine InnoDB;

insert into avis values (1, 1, 1, 1, 'photo1.jpg', 'J\'ai joué avec mon ami et il est très sympa');
insert into avis values (2, 2, 2, 1, 'photo2.jpg', 'J\'ai joué avec mon ami et il est très sympa');
insert into avis values (3, 3, 3, 2, 'photo3.jpg', 'J\'ai joué avec mon ami et il est très sympa');
insert into avis values (4, 4, 4, 4, 'photo4.jpg', 'J\'ai joué avec mon ami et il est très sympa');
insert into avis values (5, 5, 5, 4, 'photo5.jpg', 'J\'ai joué avec mon ami et il est très sympa');
insert into avis values (6, 6, 6, 3, 'photo6.jpg', 'J\'ai joué avec mon ami et il est très sympa');

