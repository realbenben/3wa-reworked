<?php
// used for the connection with dadabase
function dbConnection(): PDO
{
    return new PDO(
        'mysql:host=home.3wa.io:3307;dbname=live-38_benoitpat_PizzaMamma;charset=UTF8',
        'benoitpat',
        '29c1da6fMjMwYmJhNzU3ZGIyZjQ1MjEzZmMwZjg32f9f8a51', [
            // use to track errors
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            // keep results in array
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

}


?>