<?php

require 'assets/php/connection.php';

if (empty($_POST)) {
    // Si $_POST est vide => aucune donnée soumise (on vient d'arriver sur la page)
    // On affiche le formulaire
    include  'register.phtml';
} else {
    // Création de l'utilisateur
    $db = dbConnection();
    
    // Avant d'insérer l'utilisateur, on va vérifier qu'il n'existe pas déjà un utilisateur avec cet email et ce pseudo
    $sql = $db->prepare('
        SELECT id, pseudo, email, password, registration_date
        FROM customer
        WHERE email = ? OR pseudo = ?
    ');
    
    $sql->execute([
        $_POST['email'],
        $_POST['pseudo'],
    ]);
    
    $user = $sql->fetch();
    
    if (empty($user)) {
        // Insertion de l'utilisateur
        $sql = $db->prepare('INSERT INTO customer(pseudo, email, password, registration_date) VALUES (?, ?, ?, NOW())');
        $sql->execute([
            $_POST['pseudo'],
            $_POST['email'],
            password_hash($_POST['password'], PASSWORD_BCRYPT),
        ]);
        
        header('Location:login.php');
    } else {
        // L'utilisateur existe déjà
        header('Location:takeAway.php');
    }
}

