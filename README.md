# Projet Digital

## Concept et public

Création d’un site permettant aux citoyens d’évaluer leur impact écologique. Le site vise les jeunes de **18 à 26 ans** qui cherchent à améliorer leur impact écologique.

## Équipe et répartition des tâches

| Personne | Rôle principal | Tâches | GitHub |
| --- | --- | --- | --- |
| Adam | Chef de projet / UX-UI | Organisation du projet, répartition des tâches, suivi de l’avancement, wireframes, design system | [Adam-Boussakour](https://github.com/Adam-Boussakour) |
| Mohamed | Designer / Contenu | Moodboard, identité visuelle, recherche de contenus, rédaction, aide à la conception des interfaces | [Moha-Mad-19](https://github.com/Moha-Mad-19) |
| Ensemble | Conception & validation | Brainstorming, choix graphiques, tests, corrections, préparation de la présentation finale | Adam et Mohamed |
| Professeur | Enseignant | Suivi pédagogique | Compte GitHub en attente |


## Outils

- **WordPress**, installé en local.
- **Twenty Twenty-Five**, thème parent actif sur l’installation locale.
- **GitHub**, pour le dépôt, les branches, les commits, les pull requests, les issues et le tableau Projects.
- **Visual Studio Code**, pour modifier les fichiers.

## Arborescence du thème enfant

```text
Projet-Digital/
├── .gitignore
├── README.md
├── style.css
├── functions.php
└── assets/
    ├── css/style.css
    ├── js/main.js
    └── img/.gitkeep
```

Le thème enfant hérite des modèles de Twenty Twenty-Five. Le champ `Template` de `style.css` désigne son dossier `twentytwentyfive`.

## Installation locale

1. Vérifier que WordPress local fonctionne et que Twenty Twenty-Five est installé dans `wp-content/themes/twentytwentyfive`.
2. Cloner ce dépôt dans `wp-content/themes/Projet-Digital` :

   ```sh
   git clone https://github.com/Adam-Boussakour/Projet-Digital.git
   ```

3. Dans WordPress, ouvrir **Apparence → Thèmes** et activer **Projet Digital Child**.
4. Vérifier l’affichage des pages, le chargement du CSS et du JavaScript, ainsi que l’absence d’erreur PHP.

Twenty Twenty-Five charge sa propre feuille de style. `functions.php` charge ensuite `style.css` du thème enfant, puis `assets/css/style.css` et `assets/js/main.js`.

**État de vérification :** le parent et les chemins sont configurés ; l’activation et les tests dans votre WordPress local restent à effectuer.

Références : [thèmes enfants WordPress](https://developer.wordpress.org/themes/advanced-topics/child-themes/), [chargement des styles de Twenty Twenty-Five](https://github.com/WordPress/twentytwentyfive/blob/trunk/functions.php).

## Conventions validées

- Ne pas travailler directement dans `main`.
- Une tâche = une issue et une branche `feature/nom-de-la-tache`.
- Noms des branches en minuscules, sans espace ni accent.
- Messages de commits explicites en français, par exemple `Ajout de la section presentation`.
- Ouvrir une pull request vers `main`, avec une description des changements et des vérifications.
- L’autre membre relit et approuve avant la fusion. L’auteur ne valide pas lui-même sa PR.

### Cycle d’une contribution

```sh
git switch main
git pull --ff-only
git switch -c feature/nom-de-la-tache
# Modifier et vérifier les fichiers.
git add chemin/du/fichier
git commit -m "Description claire de la modification"
git push -u origin feature/nom-de-la-tache
```

Sur GitHub, ouvrir la PR vers `main`, préciser l’objectif et les tests, puis la faire relire par l’autre membre. Après fusion, chacun met sa copie à jour :

```sh
git switch main
git pull --ff-only
```

## Planification

[Tableau GitHub Projects](https://github.com/users/Adam-Boussakour/projects/1) : **À faire → En cours → À vérifier → Terminé**.

Une tâche passe en « À vérifier » quand sa PR est prête et en « Terminé » après validation et fusion. Utiliser les labels existants selon la tâche : `documentation`, `enhancement`, `bug` ou `help wanted`.

Premières issues :

- [#1 — Concept et README](https://github.com/Adam-Boussakour/Projet-Digital/issues/1).
- [#2 — Accès des membres et du professeur](https://github.com/Adam-Boussakour/Projet-Digital/issues/2).
- [#3 — Configuration et tests du thème enfant](https://github.com/Adam-Boussakour/Projet-Digital/issues/3).
- [#4 — Contribution d’Adam](https://github.com/Adam-Boussakour/Projet-Digital/issues/4).
- [#5 — Contribution de Mohamed](https://github.com/Adam-Boussakour/Projet-Digital/issues/5).
- [#6 — Synchronisation et remise](https://github.com/Adam-Boussakour/Projet-Digital/issues/6).

Les issues de contribution proviennent de la préparation initiale ; leur contenu précis doit être défini avec l’équipe en accord avec les rôles ci-dessus.

## Validation avant remise

- [x] Concept, public, équipe, outils et répartition confirmés.
- [x] Thème parent identifié : Twenty Twenty-Five.
- [x] Conventions de branches, commits et relecture validées.
- [ ] Mohamed a accepté son invitation et le professeur a accès au dépôt.
- [ ] README relu et changements intégrés dans `main`.
- [ ] Thème enfant activé et testé dans WordPress local.
- [ ] Chaque membre a fusionné au moins une PR avec description et commentaire de relecture.
- [ ] Les deux ordinateurs ont le même `main`.
- [ ] Absence de mots de passe et de clés vérifiée dans les fichiers et l’historique.

Le `.gitignore` exclut les fichiers locaux courants : `.env`, `wp-config.php`, dépendances et sauvegardes. Ne jamais ajouter d’identifiants au dépôt.

**Remise :** [lien du dépôt Projet Digital](https://github.com/Adam-Boussakour/Projet-Digital), une seule remise par équipe.
