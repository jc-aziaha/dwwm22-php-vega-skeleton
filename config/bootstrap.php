<?php

use Symfony\Component\Dotenv\Dotenv;


    // a. Chargement de l'autochargeur des classes de composer.
    require __DIR__ . "/../vendor/autoload.php";


    // b. Chargement des variables d'environnement.
    $dotenv = new Dotenv();

    // loads .env, .env.local, and .env.dev.local or .env.dev
    $dotenv->loadEnv(__DIR__ . '/../.env');

    if ( 
        !isset($_ENV['APP_ENV']) ||
        empty($_ENV['APP_ENV'])  || 
        !in_array($_ENV['APP_ENV'], ['dev', 'development', 'test', 'prod', 'production'])
        ) {
        throw new InvalidArgumentException("You need to add APP_ENV value in the dotenv file");
    }

    if ( 
        !isset($_ENV['APP_DEBUG']) ||
        empty($_ENV['APP_DEBUG'])  || 
        !in_array($_ENV['APP_DEBUG'], ['true', '1', 'false', '0'])
        ) {
        throw new InvalidArgumentException("You need to add APP_DEBUG value in the dotenv file");
    }

    return [
        "APP_ENV" => $_ENV['APP_ENV'],
        "APP_DEBUG" => filter_var($_ENV['APP_DEBUG'], FILTER_VALIDATE_BOOL),
    ];

    

    
