# Fiche technique : Éco-Citoyen

## 1. Présentation du projet

Éco-Citoyen est un site qui aide les utilisateurs à comprendre leur impact écologique et à améliorer leurs habitudes. Un quiz permet d'obtenir un bilan avec un score représentatif de cet impact. Des conseils personnalisés et des défis encouragent ensuite le passage à l'action.

Cette fiche décrit la version prévue du site. Les fonctionnalités décrites ne sont pas encore toutes développées. Elle évoluera avec les wireframes, les maquettes et le design system.

## 2. Parcours utilisateur

1. L'utilisateur arrive sur la page d'accueil.
2. Il clique sur « Découvrir mon impact ».
3. S'il n'est pas connecté, il doit créer un compte ou se connecter avant de poursuivre. S'il est déjà connecté, il accède directement au quiz.
4. Il répond au quiz et consulte son bilan.
5. Il découvre des conseils personnalisés par IA selon ses réponses.
6. Il choisit un défi, consulte ses étapes et suit sa progression.
7. Il retrouve ses défis en cours et l'historique des défis terminés.

Le compte permet de rattacher le bilan et le suivi des défis à un utilisateur.

## 3. Pages et contenus à produire

Les rubriques de navigation sont : Impact, Conseils, Défis, Mes progrès et Mon compte. Elles regroupent les pages ci-dessous ; elles ne nécessitent pas forcément chacune une page supplémentaire.

| Quoi : page et contenu | Comment : outil prévu | Pourquoi : besoin utilisateur |
| --- | --- | --- |
| Accueil : titre, image de présentation et bouton « Découvrir mon impact » | Page WordPress composée avec Gutenberg ; présentation dans le thème enfant | Comprendre le principe du site et commencer le parcours |
| Inscription : formulaire de création de compte et bouton de validation | Gestion des comptes WordPress et formulaire intégré au site ; solution exacte à choisir | Disposer d'un compte personnel pour conserver ses résultats et son suivi |
| Connexion : formulaire et bouton de validation | Authentification WordPress ; contrôle de l'accès côté serveur | Retrouver son compte et accéder au quiz sans refaire l'inscription |
| Quiz : questions à choix unique ou multiples, réponses, indicateur de progression et boutons de navigation | Structure intégrée à WordPress, JavaScript pour les interactions et traitement des réponses côté serveur | Décrire ses habitudes et comprendre son avancement dans le questionnaire |
| Bilan : score, habitudes positives et conseils | Calcul du score à partir des réponses ; affichage intégré au thème enfant | Situer son impact écologique et identifier les habitudes à améliorer |
| Conseils personnalisés : titre, recommandations et explications | Fonction IA appelée par le serveur à partir des réponses au quiz | Recevoir des conseils adaptés à ses propres choix |
| Choisir un défi : liste de défis avec titre et description | Contenus administrables dans WordPress ; cartes réutilisables | Trouver une action concrète à entreprendre |
| Détail du défi : titre, objectif, étapes et bouton pour commencer | Contenu WordPress et présentation dans le thème enfant ; enregistrement de la participation côté serveur | Comprendre l'engagement avant de commencer un défi |
| Historique des défis : défis terminés, titres, dates et accès aux détails | Données de suivi rattachées au compte et affichées dans WordPress | Retrouver les actions accomplies et constater ses progrès |
| Défi en cours : titre, étapes réalisées et restantes, progression et bouton d'action | Données de suivi côté serveur ; JavaScript pour actualiser l'interface après validation | Savoir quelle étape réaliser et suivre son avancement |

## 4. Sections et composants

| Quoi | Comment | Pourquoi |
| --- | --- | --- |
| En-tête, logo et navigation entre les rubriques | Éléments réutilisables du thème enfant et blocs Gutenberg adaptés | Garder des repères cohérents sur toutes les pages |
| Menu  | Bouton accessible, CSS et JavaScript si nécessaire | Permettre la navigation sur un petit écran |
| Pied de page | Élément réutilisable du thème ; contenu à préciser | Regrouper les informations secondaires utiles |
| Titres, paragraphes, images et sections de présentation | Blocs Gutenberg | Permettre au client de modifier les contenus sans toucher au code |
| Boutons et liens | Éléments HTML adaptés à l'action, styles partagés dans le thème enfant | Rendre les actions identifiables et cohérentes |
| Formulaires d'inscription et de connexion | Champs avec libellés, validation côté serveur et retours d'erreur clairs | Faciliter l'accès au compte et signaler les corrections nécessaires |
| Questions, choix de réponse et progression du quiz | Champs de formulaire adaptés, CSS et JavaScript | Répondre facilement au clavier comme au toucher et savoir où l'on en est |
| Score et indicateur visuel du bilan | Valeur textuelle et représentation visuelle, par exemple une jauge | Expliquer le résultat sans dépendre uniquement de la couleur |
| Blocs d'habitudes positives et de conseils | Composants réutilisables dans le thème enfant | Rendre le bilan facile à parcourir |
| Cartes de défis et de conseils | Présentation partagée, responsive, alimentée par les contenus et données du site | Comparer les propositions et accéder à leur détail |
| Liste d'étapes et progression d'un défi | Composants de suivi liés au compte | Distinguer ce qui est réalisé de ce qui reste à faire |
| Messages de chargement, d'erreur et de confirmation | Zones de message accessibles et mises à jour par JavaScript | Informer l'utilisateur du résultat de ses actions |
| Aide « Comment répondre ? » | Explication dépliable dans la page, avec une balise native adaptée lorsque possible | Expliquer le quiz sans ouvrir une fenêtre supplémentaire |

Les composants seront conçus d'abord pour mobile, puis adaptés à la tablette et à l'ordinateur. Les cartes pourront s'empiler et les formulaires resteront lisibles sans défilement horizontal.

## 5. Contenus, médias et identité visuelle

| Quoi | Comment | Pourquoi |
| --- | --- | --- |
| Palette, typographies et espacements du design system | Réglages partagés dans `theme.json`, complétés par le CSS du thème enfant | Assurer la cohérence entre les maquettes et les pages du site |
| Mise en page et styles des composants | CSS organisé dans le thème enfant | Adapter le rendu aux supports et éviter les styles contradictoires |
| Textes de présentation, descriptions et explications | Contenus modifiables avec Gutenberg | Permettre au client de mettre le site à jour |
| Logo, icônes et images propres au thème | Ressources rangées dans `assets/img/` | Centraliser les ressources nécessaires au thème |
| Images ajoutées dans les pages | Médiathèque WordPress ; fichiers optimisés et textes alternatifs adaptés | Illustrer les contenus tout en maîtrisant le poids des pages |

Le thème parent déclaré dans le dépôt est Twenty Twenty-Five (`Template: twentytwentyfive`). Le thème enfant existant est « Projet Digital Child ». Les réglages prévus dans `theme.json` devront être mis en place et vérifiés avec cette base.

## 6. Gestion des états de l'interface

| Quoi : état ou action | Comment | Pourquoi : information transmise |
| --- | --- | --- |
| Utilisateur connecté ou non connecté | Session WordPress et vérification côté serveur | Diriger vers le quiz ou vers l'inscription/connexion |
| Menu  | JavaScript et état accessible du bouton si nécessaire | Indiquer si les liens de navigation sont affichés |
| Réponse sélectionnée ou non sélectionnée | Champs natifs et styles de sélection ; JavaScript pour le parcours | Confirmer le choix effectué |
| Passage à la question suivante ou précédente | JavaScript et mise à jour de la progression | Situer l'utilisateur dans le quiz |
| Enregistrement du quiz ou d'une étape de défi | Requête au serveur, état de chargement, puis confirmation ou erreur | Éviter l'incertitude et les validations répétées |
| Génération des conseils IA en cours, réussie ou en échec | Appel côté serveur et messages dans l'interface | Expliquer l'attente et permettre une nouvelle tentative en cas d'échec |
| Défi non commencé, en cours ou terminé | Statut conservé côté serveur pour le compte concerné | Présenter l'action suivante et classer le défi dans le bon espace |
| Historique vide | Message explicatif avec lien vers les défis | Aider un nouvel utilisateur à commencer |
| Aide du quiz dépliée ou repliée | Composant dépliable dans la page | Donner une explication à la demande |

JavaScript gère les interactions visibles. Les contrôles d'accès, la validation des données et leur sauvegarde restent effectués côté serveur.

## 7. Données dynamiques et contrat JSON

### Données prévues

- Questions du quiz, choix proposés et pondérations du futur barème.
- Réponses de l'utilisateur et score calculé.
- Conseils personnalisés associés aux réponses du quiz.
- Catalogue de défis : identifiant, titre, description, objectif et étapes.
- Suivi personnel : défi choisi, étapes réalisées, statut et dates.

### Première idée de données à exploiter

Pour les essais, un fichier `data/defis.json` pourra contenir des exemples de défis. Le site pourra afficher ces données sous forme de cartes et de fiches détaillées. Cette proposition permet de développer et tester l'interface avant que le stockage définitif soit prêt.

En version finale, les défis pourront être administrés dans WordPress et le suivi personnel sera conservé côté serveur. La structure exacte de stockage et les échanges entre l'interface et le serveur restent à définir. Aucune API externe de données n'est encore choisie.

### Rôle de `Contrat.json`

Un contrat JSON est prévu pour préciser les données échangées : noms des champs, types, champs obligatoires, réponses attendues et erreurs possibles. Il facilitera le travail commun entre les parties du projet et évitera que chaque membre utilise une structure différente. Son format exact sera défini avec les consignes des cours concernés.

Les fichiers de test du dépôt ne contiendront pas de données personnelles réelles.

### Score écologique

Le score représentera l'impact écologique des habitudes déclarées dans le quiz. Le barème n'est pas encore défini : il faudra choisir les catégories, la pondération des réponses, le sens de lecture du score et les explications associées.

Le calcul devra être documenté et reproductible. Tant qu'aucune méthode adaptée n'est retenue, le score sera présenté comme un indicateur pédagogique, sans prétendre mesurer précisément des émissions de CO₂.

## 8. Fonction intelligente

**Quoi ?** Produire des conseils écologiques personnalisés en fonction des réponses et des choix de l'utilisateur dans le quiz.

**Comment ?** Le serveur transmettra les informations nécessaires à un service IA. Le fournisseur et l'éventuelle extension restent à choisir. La réponse attendue pourra suivre une structure JSON : titre du conseil, recommandation, explication et catégorie. Le serveur vérifiera les données reçues avant leur affichage. Les clés d'API resteront sur le serveur, hors du dépôt et du navigateur.

**Pourquoi ?** Proposer des actions adaptées aux habitudes déclarées, avec une explication compréhensible, plutôt qu'une liste identique pour tous.

L'IA ne sera pas responsable du calcul du score : celui-ci reposera sur le barème à définir. Les données envoyées seront limitées aux informations utiles, sans transmettre inutilement l'identité ou l'adresse e-mail du compte. En cas d'indisponibilité, un message clair et des conseils généraux préparés à l'avance sont proposés comme solution de repli.

La génération de défis par IA reste une possibilité à discuter. Pour préparer une première version réalisable, un catalogue de défis rédigés par l'équipe est proposé, mais ce choix n'est pas encore confirmé.

## 9. Contraintes

| Domaine | Contrainte |
| --- | --- |
| Outils | Utiliser WordPress, Gutenberg et un thème enfant. Les contenus doivent être modifiables sans toucher au code. |
| Affichage et accessibilité | Concevoir d’abord pour mobile, puis adapter aux autres écrans. Garder des textes lisibles, des contrastes suffisants et une navigation accessible au clavier. Tester sur les principaux navigateurs. |
| Performance | Optimiser les images, limiter les extensions et utiliser au maximum deux familles de polices. |
| Sécurité et IA | Protéger les données des utilisateurs, ne pas mettre de mots de passe ou de clés d’API sur GitHub et appeler l’IA depuis le serveur. |
| Organisation et collaboration | Ranger clairement les fichiers, travailler avec des branches et des Pull Requests, puis mettre le site sur le serveur de l’école. |

