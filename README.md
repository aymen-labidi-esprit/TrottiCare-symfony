# TrottiCare+ : Urban Mobility & Community Hub

[![Build Status](https://img.shields.io/travis/com/aymen-labidi-esprit/TrottiCare-symfony/main.svg?style=flat-square)](https://travis-ci.com/github/aymen-labidi-esprit/TrottiCare-symfony)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg?style=flat-square)](./LICENSE)
[![Symfony Version](https://img.shields.io/badge/Symfony-6.x-blue.svg?style=flat-square)](https://symfony.com)

**TrottiCare+** est une plateforme web complète de location de trottinettes électriques, conçue avec Symfony. Elle offre une solution de mobilité urbaine pratique et écologique, intègre la gestion de flotte, la participation à des événements communautaires et des fonctionnalités pour les partenaires locaux.

<!-- Optional: Add a screenshot or GIF demo here -->
<!-- ![TrottiCare+ Screenshot](link/to/your/screenshot.png) -->

---

## Table des Matières

*   [Description du Projet](#description-du-projet)
*   [Fonctionnalités Principales](#fonctionnalités-principales)
*   [Stack Technique](#stack-technique)
*   [Installation](#installation)
    *   [Prérequis](#prérequis)
    *   [Étapes d'Installation](#étapes-dinstallation)
*   [Utilisation](#utilisation)
    *   [Accès à l'Application](#accès-à-lapplication)
    *   [Comptes de Démonstration](#comptes-de-démonstration)
*   [Contribution](#contribution)
    *   [Comment Contribuer ?](#comment-contribuer-)
    *   [Contributeurs](#contributeurs)
*   [Licence](#licence)
*   [Contact](#contact)

## Description du Projet

TrottiCare+ vise à simplifier la mobilité urbaine en proposant une plateforme intuitive pour la location de trottinettes électriques.

*   **Objectif :** Fournir un service de location de trottinettes fiable, accessible et facile à gérer, tout en créant une communauté engagée autour d'événements locaux.
*   **Problème Résolu :** Offre une alternative écologique et pratique aux transports traditionnels pour les courtes distances en ville, réduit les problèmes de stationnement et propose une gestion centralisée pour les opérateurs et les partenaires.
*   **Public Cible :** Citadins, étudiants, touristes, administrateurs de flotte, partenaires locaux (Points Relais), organisateurs d'événements.

## Fonctionnalités Principales

*   **Gestion Utilisateurs :** Inscription, connexion (email/mot de passe, reconnaissance faciale optionnelle), gestion des profils, rôles (Client, Partenaire, Admin), vérification email, réinitialisation de mot de passe (avec reCAPTCHA v2).
*   **Gestion Trottinettes :** Ajout, modification, suppression, suivi de l'état (Disponible, En Location, En Maintenance), localisation (actuellement textuelle), niveau de batterie, autonomie. Filtrage et pagination avancés (Admin & Public).
*   **Gestion Maintenances :** Suivi des interventions (formulaire et calendrier), mise à jour du statut des trottinettes. Notifications SMS/Webhook (via Twilio & Make.com). Filtrage et pagination (Admin).
*   **Gestion Réservations :** Création, modification (admin), consultation.
*   **Gestion Points Relais :** Ajout, modification, suppression.
*   **Gestion Événements :** Création, modification, listing (avec filtres et tri), gestion des participations (inscription/annulation par Client & Admin), téléchargement de billets PDF avec QR Code pour les participants. Filtrage et pagination (Admin & Client). Intégration Webhook pour ajout au calendrier Google.
*   **Système de Réclamations :** Soumission par les utilisateurs, réponse par les administrateurs.
*   **Tableaux de Bord :** Vues dédiées pour Admin, Client et Partenaire avec statistiques et accès rapides.
*   **Filtrage & Pagination :** Fonctionnalités de recherche, filtrage et pagination avancées dans les vues de listing (Utilisateurs, Trottinettes, Maintenances, Événements).

## Stack Technique

*   **Backend:** PHP >= 8.1, Symfony 6.x
*   **Base de Données:** MySQL / MariaDB (configurable via `DATABASE_URL`)
*   **ORM:** Doctrine
*   **Frontend:** Twig, Tailwind CSS (via CDN), JavaScript Vanilla
*   **API Externe:** Twilio (SMS), Google Maps/OpenStreetMap (via Leaflet.js), Make.com (Webhooks pour notifications), Google reCAPTCHA v2.
*   **Bibliothèques Clés:**
    *   `knplabs/knp-paginator-bundle`
    *   `symfonycasts/verify-email-bundle`
    *   `symfonycasts/reset-password-bundle`
    *   `endroid/qr-code-bundle`
    *   `knplabs/knp-snappy-bundle` (et `wkhtmltopdf`)
    *   `symfony/http-client`
    *   `symfony/mailer`
    *   `symfony/notifier` & `twilio/sdk` (pour SMS via Texter/Twilio)
    *   `face-api.min.js` (côté client, pour la reconnaissance faciale optionnelle)

## Installation

Instructions pour configurer et lancer le projet localement.

### Prérequis

*   PHP >= 8.1
*   Composer
*   Serveur Web (Apache/Nginx) ou Symfony CLI
*   Serveur de base de données MySQL/MariaDB (ou autre supporté par Doctrine)
*   Node.js & NPM (uniquement si vous modifiez les assets front-end)
*   `wkhtmltopdf` installé sur le système (pour les PDF)
*   Compte Twilio (pour les SMS)
*   Clés Google reCAPTCHA v2
*   Compte Make.com (ou équivalent pour les webhooks)

### Étapes d'Installation

1.  **Cloner le repository :**
    ```bash
    git clone https://github.com/aymen-labidi-esprit/TrottiCare-symfony.git
    cd TrottiCare-symfony
    ```

2.  **Installer les dépendances PHP :**
    ```bash
    composer install
    ```

3.  **Installer les dépendances Node (si nécessaire) :**
    ```bash
    # Décommenter si vous utilisez Webpack Encore
    # npm install
    # npm run build # Ou npm run dev --watch
    ```

4.  **Configurer l'environnement :**
    *   Copiez `.env` vers `.env.local` : `cp .env .env.local`
    *   Modifiez **`.env.local`** avec vos configurations spécifiques :
        ```env
        # --- Base de Données (Adaptez à votre config) ---
        DATABASE_URL="mysql://root@127.0.0.1:3306/finalbase?serverVersion=8.0.32&charset=utf8mb4"

        # --- Mailer (Utilise Outlook SMTP - mettez vos vrais identifiants ou configurez un autre transporteur) ---
        MAILER_DSN=smtp://aymen.labidi%40esprit.tn:VOTRE_MOT_DE_PASSE@smtp-mail.outlook.com:587?encryption=tls&auth_mode=login
        # Remplacez %40 par @ si votre mot de passe contient ce caractère.
        # Assurez-vous que l'authentification SMTP est activée sur votre compte Outlook/Microsoft.

        # --- Reset Password Bundle ---
        # IMPORTANT: Changez ceci pour une valeur unique et aléatoire dans votre .env.local
        RESET_PASSWORD_SECRET=%env(APP_SECRET)%

        # --- RECAPTCHA v2 ---
        RECAPTCHA_V2_SITE_KEY="6LdYgCgrAAAAADYq1mwxcWPlSic6ulMIiHAQlRga" # Clé publique (ok dans .env)
        RECAPTCHA_V2_SECRET_KEY="6LdYgCgrAAAAACy-WUeMJXDUE0jGYmORNH3m2T0H" # Clé secrète (NE PAS COMMITTER si publique)

        # --- Twilio (SMS) ---
        TWILIO_ACCOUNT_SID=AC92ce0293654b3bf92f26ad226c54270d
        TWILIO_AUTH_TOKEN=f0d8e15aced4230576ffa30c25700a12 # (NE PAS COMMITTER si publique)
        TWILIO_FROM_NUMBER=+19342470919

        # --- WKHTMLTOPDF ---
        # Vérifiez que ce chemin est correct pour votre système
        WKHTMLTOPDF_PATH=/usr/local/bin/wkhtmltopdf
        # WKHTMLTOIMAGE_PATH=/usr/local/bin/wkhtmltoimage # Décommentez si vous utilisez la génération d'images

        # --- Symfony Defaults ---
        APP_ENV=dev
        APP_SECRET=7ab14cc3ef1ce5973489bc35d565dbb2 # Changez ceci pour une valeur plus sécurisée
        ```
    *   **Sécurité :** Ne committez **jamais** vos clés secrètes (`TWILIO_AUTH_TOKEN`, `RECAPTCHA_V2_SECRET_KEY`, `MAILER_DSN` avec mot de passe, `APP_SECRET` de production) dans un repository public. Utilisez les secrets Symfony ou des variables d'environnement système pour la production.

5.  **Créer la base de données :**
    ```bash
    php bin/console doctrine:database:create --if-not-exists
    ```

6.  **Appliquer les migrations :**
    ```bash
    php bin/console doctrine:migrations:migrate --no-interaction
    ```

7.  **Charger les fixtures (recommandé pour tests) :**
    ```bash
    php bin/console doctrine:fixtures:load --no-interaction
    ```

8.  **Démarrer le serveur Symfony :**
    ```bash
    symfony server:start -d
    ```

## Utilisation

### Accès à l'Application

*   Ouvrez l'URL fournie par `symfony server:start` (généralement `https://127.0.0.1:8000`) dans votre navigateur.

### Comptes de Démonstration (via Fixtures)

*   **Admin :** `admin@trotticare.com` / `password`
*   **Client :** `client@trotticare.com` / `password`
*   **Partenaire :** `partenaire@trotticare.com` / `password`
*   *(Ces identifiants peuvent varier selon la configuration des fixtures)*

## Contribution

Nous remercions chaleureusement tous ceux qui ont contribué à ce projet !

### Comment Contribuer ?

1.  **Fork le projet** : Cliquez sur le bouton "Fork" sur [la page GitHub du projet](https://github.com/aymen-labidi-esprit/TrottiCare-symfony).
2.  **Clonez votre fork** : `git clone https://github.com/[VOTRE_PSEUDO_GITHUB]/TrottiCare-symfony.git && cd TrottiCare-symfony`
3.  **Créez une branche** : `git checkout -b feature/nom-de-votre-feature`
4.  **Faites vos modifications**.
5.  **Commitez vos changements** : `git commit -am 'feat: Ajout de X fonctionnalité'`
6.  **Pushez vers votre fork** : `git push origin feature/nom-de-votre-feature`
7.  **Ouvrez une Pull Request** : Sur GitHub, proposez une Pull Request de votre branche vers la branche `main` du repository original.

### Contributeurs

*   **Aymen Labidi:** [ @aymen-labidi-esprit](https://github.com/aymen-labidi-esprit) - *Project Lead, Backend & Frontend Development*
*   **Adem Hadj Salem:** [ @ademhadjsalem](https://github.com/ademhadjsalem) - *Collaborator*
*   **Jamila Meriem:** [ @Jamilameriem](https://github.com/Jamilameriem) - *Collaborator*
*   **Nada Marzouki:** [ @Nadamarzouki393](https://github.com/Nadamarzouki393) - *Collaborator*
*   **Nawel Hammami:** [ @nawelhammami12](https://github.com/nawelhammami12) - *Collaborator*
*   **Takwa Oueslati:** [ @TakwaOueslati](https://github.com/TakwaOueslati) - *Collaborator*

*(N'hésitez pas à ajouter votre nom ici si vous contribuez !)*

## Licence

Ce projet est distribué sous la licence **MIT**. Voir le fichier [LICENSE](./LICENSE) pour plus de détails.

*(Assurez-vous qu'un fichier `LICENSE` contenant le texte de la licence MIT est présent à la racine.)*

## Contact

Pour toute question ou suggestion, merci d'ouvrir une [Issue](https://github.com/aymen-labidi-esprit/TrottiCare-symfony/issues) sur le repository GitHub.