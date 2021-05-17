<?php
session_start();
require_once 'assets/php/connection.php';
// verifie si le champ mail et mdp sont bien rentrés / check if email and pwd are entered
if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $db = dbConnection();
    $check = $db->prepare('SELECT pseudo, email, password FROM customer WHERE email = ?');
    $check->execute([$email]);

    $data = $check->fetch();

    if(!empty($data)) {
        // on verifie le password / password check
        if (password_verify($_POST['password'], $data['password'])) {
            $_SESSION['customer'] = $data['email'];
            header('Location: takeAway.phtml');
            die();
        } else{
            $pwderror = 'password erronée';
        }
    } else {
        $mailerror = 'mail erronée';
    }
}

include "login.phtml";