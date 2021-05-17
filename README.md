# bp_projet

> pizza website for 3W Academy


## Tooling

- pages generated with PHP
- email form done with formspree
- sass used to compile stylesheets

## Getting started

```console
git clone git@github.com:realbenben/3wa-projet.git
npm install
npm run sass
````
url ide : https://benoitpat.ide.3wa.io/ide.html


## database
connection: 'mysql:host=home.3wa.io:3307;dbname=live-38_benoitpat_PizzaMamma;charset=UTF8'
username :'benoitpat'
password: '29c1da6fMjMwYmJhNzU3ZGIyZjQ1MjEzZmMwZjg32f9f8a51'
diagram of database added in : bp_projet


## template

- footer, navbar, head etc are components situated in file : bp_projet/components
- template generated with php

## css
- files are in : bp_projet/assets/stylesheets and bp_projet/assets/stylesheets/components
- home framework
- css variable used (_variables.scss)
- css cut in components called in application.scss

## javascript
- only use for the gallery of gals.php
- files in bp_projet/assets/javascripts

## php
-used for login and register
- you can create a new user or use :
- user: test59 /email: test59@test.fr / mdp: test59


#probleme durant le projet.

Concernant le template takeAway.phtml, je n'est pas reussi a lier la base de donnée à la commande,
cette appli n'étant pas fonctionnel, j'ai opté pour un formulaire
mail de commande qui est certes moin ergonomique mais celui ci est fonctionnel.
De ce fait la page redirect.php ne m'est plus utile, du coup je l'ai mis dans un dossier nommée trash.
