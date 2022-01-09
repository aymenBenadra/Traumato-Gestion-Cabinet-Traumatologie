# Traumato: Gestion Cabinet Traumatologie

## Table de contenu

- [Traumato: Gestion Cabinet Traumatologie](#traumato-gestion-cabinet-traumatologie)
  - [Table de contenu](#table-de-contenu)
  - [Contexte du projet](#contexte-du-projet)
  - [Objectif du projet](#objectif-du-projet)
  - [Périmètre des clients](#périmètre-des-clients)
  - [Description fonctionnelle des besoins](#description-fonctionnelle-des-besoins)
    - [Fonction Principal](#fonction-principal)
    - [Sous Fonctions](#sous-fonctions)
  - [Phases de projet (Delais)](#phases-de-projet-delais)
  - [Livrables](#livrables)

## Contexte du projet

Le docteur Rahbani Rafik est un traumatologue qui souhaite renforcer sa présence sur le web et informatiser la gestion de ses patients.

Le besoin minimum est de réaliser une page publicitaire du cabinet, et une page de gestion des patients (Ajouter,Modifier,Supprimer, et afficher).

## Objectif du projet

Nous voulons réaliser une site web pour renforcer la présence sur du docteur Rahbani Rafik le web et informatiser la gestion de ses patients.

## Périmètre des clients

Nous nous concentrons sur les clients Maroccain qui ont 20+ ans et besoin d'un **traumatologue**.

## Description fonctionnelle des besoins

### Fonction Principal

|Fonction|Gestion des Patients|
|:------------------------------:|:-------------------------------------:|
|Objectif                       |Ajouter, Modifier, Supprimer, et Afficher les patients|
|Description                    |Une dashboard contient des actions a faire pour manager des patients. Un patient est défini par son nom, prénom, date de naissance et sa maladie.|
|Contraintes / règles de gestion|Seulement les Médecins et les secrétaires peut gérer des patients|
|Niveau de priorité             |Priorité haute|

### Sous Fonctions

|Fonction|Telecharger report des patients|
|:------------------------------:|:-------------------------------------:|
|Objectif                       |Sauvegarder tout les Patients|
|Description                    |les Médecins et les secrétaires peut telecharger une CSV avec des information de toutes les patients|
|Contraintes / règles de gestion|Seulement les Médecins et les secrétaires peut telecharger le report|
|Niveau de priorité             |Priorité normal|

|Fonction|Gestion des Médecins|
|:------------------------------:|:-------------------------------------:|
|Objectif                       |Ajouter, Modifier, Supprimer, et Afficher les Médecins|
|Description                    |Une dashboard contient des actions a faire pour manager des médecins. Un Médecin est définie par son nom, prénom,date de naissance et sa spécialité.|
|Contraintes / règles de gestion|Seulement les Admins peut gérer des Médecins|
|Niveau de priorité             |Priorité faible|

## Phases de projet (Delais)

Pour plus d'information sur les phases et délais de projet aller au Tableau Gantt [ici](https://prod.teamgantt.com/gantt/schedule/?ids=2927527&public_keys=pHfgvPgVU4G9&zoom=d120&font_size=12&col_width=455&documents=0&comments=0&estimated_hours=1&assigned_resources=1&percent_complete=1&hide_header_tabs=1&menu_view=0&resource_filter=1&name_in_bar=0&name_next_to_bar=0&resource_names=1#)

|Numéro|Nom de phase|Date du rendu|durée|
|:---:|:---:|:---:|:---:|
|1|**Initialisation**|10/01|2 jours/homme|
|2|**Conception**|12/01|2 jours/homme|
|3|**Maquettage**|14/01|2 jours/homme|
|4|**Frontend**|17/01|3 jours/homme|
|5|**Base de Données**|18/01|1 jour/homme|
|6|**Backend**|22/01|4 jours/homme|
|7|**Déploiement**|24/01|2 jours/homme|

## Livrables

Pour plus d'information sur les levrables et les taches aller au Tableau Trello [ici](https://trello.com/b/2wAe2cHY/traumato-gestion-cabinet-traomatologie)

- Phase 1: **Initialisation** [Markdown]
  - Github Repo
  - Un Cahier des Charges
  - Tableau Gantt
  - Tableau Trello
- Phase 2: **Conception** [UML]
  - Diagramme de Cas d'utilisations
  - Diagramme de Classes
  - Diagramme de Séquences
  - Diagramme d'Activité
- Phase 3: **Maquettage** [Figma]
  - Charte graphique adéquat du site web
  - Wireframe
  - Maquette
  - Prototype
- Phase 4: **Frontend** [Pug (Html), SCSS (CSS), JavaScript (Regex), jQuery (Ajax)]
  - Composants et page Template
  - Page Home
  - page Contact
  - Page App
- Phase 5: **Base de Données** [SQL (MySQL)]
  - Base de Données
  - Table Patient
  - Table Médecin
- Phase 6: **Backend** [PHP (PHPMailer)]
  - Composant d’accès aux données
  - Fonctionnalité page Contact
  - Fonctionnalité page App
- Phase 7: **Déploiement** [Heroku, RemoteMySQL]
  - Déploiement de base de données
  - Déploiement de site web
