<?php

// call the db connection
require 'connection.php';

// this page is used to show pizza in updateOrder.phtml/affiche les pizza dans le template
$db = dbConnection();
$sql = $db->prepare('SELECT id, name, price
                    FROM products
                    WHERE type ="pizza"
                    ORDER BY id');

// 3. execute request/Exécuter la requête
$sql->execute();

// 4. stock result request in a variable
//Récupérer les résultats de la requête exécutée et les stocker dans une variable
$pizzas = $sql->fetchAll();

$sql = $db->prepare('SELECT id, name, price
                    FROM products
                    WHERE type ="boisson"
                    ORDER BY id');

$sql->execute();
$drinks = $sql->fetchAll();

// ensuite on modifie la commande

$productSQL = 'UPDATE products_orders (product_id,order_id) VALUES (%s,%s)';

    $uniqId = uniqid('order_', true);
    $orderSQL = \sprintf('UPDATE orders  date,total_price) VALUES (%s,%d)',
        new \DateTime(),
        $uniqId,
   );
 ?>
