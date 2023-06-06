<?php 

function siteHeader($title) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL); 
    $BASE = "http://localhost:80/sisUserCadastro/";
    return <<<HTML
        <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
                
                
                <title>{$title}</title>
            </head>
             <nav class="navbar navbar-expand-lg bg-success sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./assets/images/ONF.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a class="nav-link" href="{$BASE}">Home</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{$BASE}user">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{$BASE}infoUser">Cadastro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        
    HTML;
    }


?>
